<?php
/**
 * Primex25 enquiry processor
 * - Honeypot + basic rate limiting (session)
 * - Generates reference number
 * - Sends via Gmail SMTP to mrtinfaith007@gmail.com
 * - Does not request/store sensitive KYC docs
 */

session_start();

function redirect_with($params) {
    $q = http_build_query($params);
    header('Location: contact.php?' . $q);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Honeypot
if (!empty($_POST['website_url'])) {
    // Silent success to bots
    redirect_with(['sent' => '1', 'ref' => 'PX-SPAM']);
}

// Rate limit: max 5 submissions per hour per session
$now = time();
if (!isset($_SESSION['enquiry_times'])) {
    $_SESSION['enquiry_times'] = [];
}
$_SESSION['enquiry_times'] = array_filter($_SESSION['enquiry_times'], function ($t) use ($now) {
    return ($now - $t) < 3600;
});
if (count($_SESSION['enquiry_times']) >= 5) {
    redirect_with(['error' => 'Too many submissions from this session. Please try again later or email info@primex25.com.']);
}

// Minimum form fill time (3 seconds) against instant bots
$form_ts = isset($_POST['form_ts']) ? (int)$_POST['form_ts'] : 0;
if ($form_ts > 0 && ($now - $form_ts) < 3) {
    redirect_with(['error' => 'Please take a moment to complete the form carefully.']);
}

// Required fields
$required = ['fullName', 'jobTitle', 'company', 'country', 'email', 'phone', 'interest', 'type', 'message', 'consent'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        redirect_with(['error' => 'Please complete all required fields.']);
    }
}

$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
if (!$email) {
    redirect_with(['error' => 'Please provide a valid email address.']);
}

// Sanitize
function clean($v) {
    return trim(strip_tags((string)$v));
}

$data = [
    'fullName'   => clean($_POST['fullName'] ?? ''),
    'jobTitle'   => clean($_POST['jobTitle'] ?? ''),
    'company'    => clean($_POST['company'] ?? ''),
    'country'    => clean($_POST['country'] ?? ''),
    'email'      => $email,
    'phone'      => clean($_POST['phone'] ?? ''),
    'whatsapp'   => clean($_POST['whatsapp'] ?? ''),
    'website'    => clean($_POST['website'] ?? ''),
    'nature'     => clean($_POST['nature'] ?? ''),
    'interest'   => clean($_POST['interest'] ?? ''),
    'type'       => clean($_POST['type'] ?? ''),
    'product'    => clean($_POST['product'] ?? ($_POST['product_generic'] ?? '')),
    'quantity'   => clean($_POST['quantity'] ?? ($_POST['quantity_generic'] ?? '')),
    'destination'=> clean($_POST['destination'] ?? ''),
    'incoterm'   => clean($_POST['incoterm'] ?? ''),
    'energy_role'=> clean($_POST['energy_role_note'] ?? ''),
    'message'    => clean($_POST['message'] ?? ''),
];

// Reference number
$ref = 'PX-' . strtoupper(substr(date('Ymd'), 2)) . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));

// Build email body
$body = "New business enquiry — Primex25 Trade & Consult Ltd\n";
$body .= "Reference: {$ref}\n";
$body .= "Submitted: " . date('Y-m-d H:i:s T') . "\n";
$body .= str_repeat('-', 50) . "\n\n";
foreach ($data as $k => $v) {
    if ($v === '') continue;
    $label = ucwords(str_replace('_', ' ', $k));
    $body .= "{$label}: {$v}\n";
}
$body .= "\n" . str_repeat('-', 50) . "\n";
$body .= "Note: Submission does not guarantee engagement.\n";
$body .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";

// ============================================================
// SMTP CONFIG (Gmail) — sends to mrtinfaith007@gmail.com
// ============================================================
$smtp_host     = 'smtp.gmail.com';
$smtp_port     = 465;
$smtp_user     = 'martinfaith007@gmail.com';
$smtp_pass     = 'swlugqpubyhytlqg';
$smtp_from     = 'martinfaith007@gmail.com';
$smtp_fromName = 'Primex25 Website';
$to            = 'info@primex25.com';   // destination you requested
$subject       = "[Primex25 Enquiry {$ref}] {$data['interest']} — {$data['company']}";

/**
 * Simple SMTP send over SSL (port 465)
 * Returns true on success, false on failure.
 */
function smtp_send($host, $port, $user, $pass, $from, $fromName, $to, $subject, $body, $replyToEmail, $replyToName) {
    $errno = 0;
    $errstr = '';
    $timeout = 30;

    $socket = @fsockopen('ssl://' . $host, $port, $errno, $errstr, $timeout);
    if (!$socket) {
        return false;
    }

    stream_set_timeout($socket, $timeout);

    $read = function() use ($socket) {
        $data = '';
        while ($str = fgets($socket, 515)) {
            $data .= $str;
            if (isset($str[3]) && $str[3] === ' ') break;
        }
        return $data;
    };

    $write = function($cmd) use ($socket) {
        fwrite($socket, $cmd . "\r\n");
    };

    // Greeting
    $read();

    $write('EHLO ' . gethostname());
    $read();

    $write('AUTH LOGIN');
    $read();
    $write(base64_encode($user));
    $read();
    $write(base64_encode($pass));
    $auth_resp = $read();
    if (strpos($auth_resp, '235') === false) {
        fclose($socket);
        return false;
    }

    $write('MAIL FROM:<' . $from . '>');
    $read();

    $write('RCPT TO:<' . $to . '>');
    $read();

    $write('DATA');
    $read();

    $headers  = 'From: ' . $fromName . ' <' . $from . ">\r\n";
    $headers .= 'To: <' . $to . ">\r\n";
    $headers .= 'Reply-To: ' . $replyToName . ' <' . $replyToEmail . ">\r\n";
    $headers .= 'Subject: ' . $subject . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: Primex25-Enquiry-Form\r\n";
    $headers .= "\r\n";

    // Dot-stuffing for safety
    $safe_body = str_replace("\n.", "\n..", $body);

    $write($headers . $safe_body . "\r\n.");
    $data_resp = $read();

    $write('QUIT');
    fclose($socket);

    return (strpos($data_resp, '250') !== false);
}

$mail_ok = smtp_send(
    $smtp_host,
    $smtp_port,
    $smtp_user,
    $smtp_pass,
    $smtp_from,
    $smtp_fromName,
    $to,
    $subject,
    $body,
    $data['email'],
    $data['fullName']
);

// Optional: log to file for backup (ensure directory is writable on server)
$log_line = date('c') . " | {$ref} | {$data['email']} | {$data['company']} | {$data['interest']} | mail=" . ($mail_ok ? '1' : '0') . "\n";
@file_put_contents(__DIR__ . '/enquiries.log', $log_line, FILE_APPEND | LOCK_EX);

$_SESSION['enquiry_times'][] = $now;

if (!$mail_ok) {
    // Still show success to user (don't leak mail failure), but log shows mail=0
    // You can change this to show an error if preferred:
    // redirect_with(['error' => 'Could not send enquiry. Please email info@primex25.com directly.']);
}

redirect_with(['sent' => '1', 'ref' => $ref]);