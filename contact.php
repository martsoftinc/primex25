<?php
$prefill_interest = isset($_GET['interest']) ? htmlspecialchars($_GET['interest'], ENT_QUOTES, 'UTF-8') : '';
$success = isset($_GET['sent']) && $_GET['sent'] === '1';
$ref = isset($_GET['ref']) ? htmlspecialchars($_GET['ref'], ENT_QUOTES, 'UTF-8') : '';
$error = isset($_GET['error']) ? htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8') : '';
include 'header.php';
?>
<main class="pt-0">
  <section class="relative bg-ev-dark pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex items-center gap-3 mb-4">
        <span class="w-3 h-3 rounded-full bg-ev-gold"></span>
        <span class="text-sm uppercase tracking-wider text-white/60">Contact</span>
      </div>
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white max-w-3xl">
        Looking for a <span class="text-ev-gold">credible business connection?</span>
      </h1>
      <p class="mt-4 text-lg text-white/70 max-w-2xl">Whether you are seeking supply, sourcing, procurement support or strategic partnerships, talk to Primex25.</p>
    </div>
  </section>

  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <?php if ($success): ?>
      <div class="max-w-2xl mx-auto mb-12 p-8 bg-ev-gray rounded-2xl border-l-4 border-ev-gold">
        <h2 class="text-xl font-bold text-ev-dark mb-2">Enquiry received</h2>
        <p class="text-base text-gray-600 leading-relaxed mb-3">
          Thank you. Your business enquiry has been received by Primex25 Trade &amp; Consult Ltd.
          <?php if ($ref): ?>Your reference number is <strong class="text-ev-dark"><?php echo $ref; ?></strong>.<?php endif; ?>
        </p>
        <p class="text-sm text-gray-500 leading-relaxed">
          Submission does <strong>not</strong> guarantee engagement, introduction or transaction acceptance. We review enquiries for commercial relevance and may request further information as part of preliminary qualification. Serious approaches are typically acknowledged within a reasonable business timeframe.
        </p>
        <a href="contact.php" class="inline-block mt-4 text-sm font-medium text-ev-purple hover:text-ev-gold">Submit another enquiry →</a>
      </div>
      <?php elseif ($error): ?>
      <div class="max-w-2xl mx-auto mb-12 p-6 bg-red-50 rounded-2xl border border-red-100 text-red-800 text-sm">
        <?php echo $error; ?>
      </div>
      <?php endif; ?>

      <div class="grid md:grid-cols-2 gap-12 <?php echo $success ? 'opacity-60 pointer-events-none' : ''; ?>">
        <!-- Contact info -->
        <div>
          <h2 class="text-xl font-bold text-ev-dark mb-6">Contact information</h2>
          <div class="space-y-5 text-sm">
            <div>
              <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">Company</div>
              <div class="font-medium text-ev-dark">Primex25 Trade &amp; Consult Ltd</div>
            </div>
            <div>
              <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">Office</div>
              <div class="text-ev-dark">No. 135/5 Mahogany Street<br />West McCarthy Hill, Weija Accra</div>
              <div class="text-xs text-gray-500 mt-1">Digital Address: GS-0138-8305</div>
            </div>
            <div>
              <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">Email</div>
              <a href="mailto:info@primex25.com" class="font-medium text-ev-purple hover:text-ev-gold">info@primex25.com</a>
            </div>
            <div>
              <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">WhatsApp / Telephone</div>
              <a href="https://wa.me/233558814552" target="_blank" rel="noopener noreferrer" class="font-medium text-ev-purple hover:text-ev-gold">+233 55 881 4552</a>
            </div>
            <div>
              <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">Focus</div>
              <div class="text-ev-dark">International Trade · Energy &amp; Petroleum · Procurement · Business Advisory</div>
            </div>
          </div>
          <p class="mt-8 text-sm text-gray-500 leading-relaxed">
            All enquiries are reviewed for commercial relevance. We respond to serious B2B approaches and may request additional information as part of preliminary qualification. We do not request banking or sensitive KYC documents through this public form.
          </p>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-2xl border border-gray-100 p-6 md:p-8 shadow-sm">
          <form class="space-y-5" id="enquiry-form" method="post" action="process-enquiry.php" novalidate>
            <!-- Honeypot -->
            <div class="absolute -left-[9999px]" aria-hidden="true">
              <label for="website_url">Website</label>
              <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off" />
            </div>
            <input type="hidden" name="form_ts" value="<?php echo time(); ?>" />

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Full Name *</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold focus:ring-1 focus:ring-ev-gold outline-none text-sm" name="fullName" type="text" required />
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Job Title *</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold focus:ring-1 focus:ring-ev-gold outline-none text-sm" name="jobTitle" type="text" required placeholder="e.g. Procurement Manager" />
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Company Name *</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold focus:ring-1 focus:ring-ev-gold outline-none text-sm" name="company" type="text" required />
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Country *</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold focus:ring-1 focus:ring-ev-gold outline-none text-sm" name="country" type="text" required />
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Email *</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold focus:ring-1 focus:ring-ev-gold outline-none text-sm" name="email" type="email" required placeholder="name@company.com" />
                <p class="text-xs text-gray-400 mt-1">Corporate email preferred; personal domains accepted for smaller companies.</p>
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Telephone *</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold focus:ring-1 focus:ring-ev-gold outline-none text-sm" name="phone" type="tel" required placeholder="+233 ..." />
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">WhatsApp</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="whatsapp" type="tel" placeholder="Optional" />
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Company Website</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="website" type="url" placeholder="https://" />
              </div>
            </div>

            <div>
              <label class="block text-xs font-medium text-gray-500 mb-1.5">Nature of Business</label>
              <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="nature" type="text" placeholder="e.g. Petroleum trading, Manufacturing" />
            </div>

            <div class="grid sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Business Interest *</label>
                <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="interest" id="interest" required>
                  <option value="">Select interest</option>
                  <?php
                  $interests = ['Energy & Petroleum','International Trade & Sourcing','Procurement','Business Advisory','Strategic Partnership','Other'];
                  foreach ($interests as $i) {
                    $sel = ($prefill_interest === $i) ? ' selected' : '';
                    echo '<option value="'.htmlspecialchars($i).'"'.$sel.'>'.htmlspecialchars($i).'</option>';
                  }
                  ?>
                </select>
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Your Role *</label>
                <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="type" required>
                  <option value="">Select role</option>
                  <option>Buyer</option>
                  <option>Seller</option>
                  <option>Supplier</option>
                  <option>Mandate</option>
                  <option>Broker / Intermediary</option>
                  <option>Procurement Client</option>
                  <option>Other</option>
                </select>
              </div>
            </div>

            <!-- Energy conditional fields -->
            <div id="energy-fields" class="hidden space-y-4 p-4 bg-ev-gray rounded-xl border border-gray-100">
              <p class="text-xs font-medium text-ev-dark uppercase tracking-wider">Energy &amp; Petroleum details</p>
              <div class="grid sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-medium text-gray-500 mb-1.5">Product *</label>
                  <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="product" type="text" data-energy-required placeholder="e.g. EN590 10PPM" />
                </div>
                <div>
                  <label class="block text-xs font-medium text-gray-500 mb-1.5">Quantity / Volume *</label>
                  <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="quantity" type="text" data-energy-required placeholder="e.g. 50,000 MT" />
                </div>
                <div>
                  <label class="block text-xs font-medium text-gray-500 mb-1.5">Destination / Country *</label>
                  <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="destination" type="text" data-energy-required />
                </div>
                <div>
                  <label class="block text-xs font-medium text-gray-500 mb-1.5">Incoterm / Delivery basis</label>
                  <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="incoterm" type="text" placeholder="e.g. CIF Tema, FOB" />
                </div>
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Buyer / Seller role note</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="energy_role_note" type="text" placeholder="Optional clarification" />
              </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-4" id="generic-product-fields">
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Product / Service Required</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="product_generic" type="text" placeholder="Where applicable" />
              </div>
              <div>
                <label class="block text-xs font-medium text-gray-500 mb-1.5">Quantity / Volume</label>
                <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm" name="quantity_generic" type="text" placeholder="Where applicable" />
              </div>
            </div>

            <div>
              <label class="block text-xs font-medium text-gray-500 mb-1.5">Brief Description of Requirement *</label>
              <textarea class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-gold outline-none text-sm resize-y" rows="4" name="message" required placeholder="Describe your requirement clearly and professionally."></textarea>
            </div>

            <div class="flex items-start gap-3">
              <input type="checkbox" name="consent" required class="mt-1 w-4 h-4 rounded border-gray-300 text-ev-gold focus:ring-ev-gold" />
              <label class="text-xs text-gray-500 leading-relaxed">I confirm the information is accurate and consent to Primex25 processing this enquiry for business communication purposes. I understand that submission does not guarantee engagement. *</label>
            </div>

            <button type="submit" class="inline-flex items-center gap-2 px-8 py-3 bg-ev-purple text-white rounded-full text-sm font-medium hover:bg-ev-purple/90 transition-colors">
              Submit Business Enquiry
              <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
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