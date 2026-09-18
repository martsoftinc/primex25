<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <title>Primex25 Trade &amp; Consult Ltd | Connecting Opportunities. Building Partnerships.</title>
  <meta name="description" content="Primex25 is a Ghana-based B2B trade facilitation, sourcing, procurement and business development company connecting credible businesses across Ghana, Africa and international markets." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { almarai: ['Almarai', 'sans-serif'] },
          colors: {
            'ev-purple': '#003366',
            'ev-green': '#C9A227',
            'ev-yellow': '#FFF8E7',
            'ev-lightpurple': '#E8F0F8',
            'ev-gray': '#F5F5F5',
            'ev-dark': '#003366',
            'ev-blue': '#003366',
            'ev-gold': '#C9A227',
          },
          screens: {
            'xs': '400px',
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
          },
        },
      },
    };
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    /* =========================================================
       BASE
       ========================================================= */
    *, *::before, *::after { box-sizing: border-box; }

    html {
      scroll-behavior: smooth;
      -webkit-text-size-adjust: 100%;
    }

    html, body {
      margin: 0;
      padding: 0;
      min-height: 100%;
      overflow-x: hidden;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
    }

    body {
      font-family: 'Almarai', sans-serif;
      font-size: 16.5px;
      line-height: 1.65;
      color: #003366;
      background: #fff;
      -webkit-tap-highlight-color: transparent;
    }

    @media (min-width: 768px) {
      body { font-size: 17.5px; }
    }

    @media (min-width: 1024px) {
      body { font-size: 18px; }
    }

    ::selection {
      background: #C9A227;
      color: #003366;
    }

    a { color: inherit; }

    .site-wrapper {
      position: relative;
      width: 100%;
      max-width: 100%;
    }

    /* =========================================================
       SITE HEADER
       ========================================================= */
    .site-header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
      transition: box-shadow 0.3s ease, background 0.3s ease;
    }

    .site-header.is-scrolled {
      box-shadow: 0 4px 24px rgba(0, 51, 102, 0.08);
      background: rgba(255, 255, 255, 0.98);
    }

    .site-header-inner {
      max-width: 80rem;
      margin: 0 auto;
      padding: 0 1rem;
      height: 5rem;            /* taller to match larger logo */
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.75rem;
    }

    @media (min-width: 640px) {
      .site-header-inner {
        padding: 0 1.25rem;
        height: 5.25rem;
      }
    }

    @media (min-width: 768px) {
      .site-header-inner {
        padding: 0 1.5rem;
        height: 5.25rem;
      }
    }

    @media (min-width: 1024px) {
      .site-header-inner {
        padding: 0 2rem;
        height: 5.5rem;
      }
    }

    /* Logo */
    .header-logo {
      display: flex;
      align-items: center;
      flex-shrink: 0;
      text-decoration: none;
    }

    .header-logo img {
      height: 3.4rem;          /* bigger on mobile */
      width: auto;
      object-fit: contain;
      display: block;
      transition: transform 0.25s ease;
    }

    @media (min-width: 640px) {
      .header-logo img { height: 3.6rem; }
    }

    @media (min-width: 768px) {
      .header-logo img { height: 5.15rem; }  /* keep desktop size */
    }

    /* =========================================================
       DESKTOP NAV  (lg: 1024px+)
       ========================================================= */
    .nav-desktop {
      display: none;
      align-items: center;
      gap: 0.25rem;
    }

    @media (min-width: 1024px) {
      .nav-desktop {
        display: flex;
        gap: 0.15rem;
      }
    }

    @media (min-width: 1280px) {
      .nav-desktop { gap: 0.35rem; }
    }

    .nav-desktop > a,
    .nav-desktop .nav-dropdown > button {
      position: relative;
      font-size: 0.9375rem;
      font-weight: 500;
      color: #003366;
      background: none;
      border: none;
      cursor: pointer;
      padding: 0.5rem 0.85rem;
      border-radius: 0.5rem;
      text-decoration: none;
      transition: color 0.2s ease, background 0.2s ease;
      font-family: inherit;
    }

    @media (min-width: 1280px) {
      .nav-desktop > a,
      .nav-desktop .nav-dropdown > button {
        font-size: 1rem;
        padding: 0.55rem 1rem;
      }
    }

    .nav-desktop > a:hover,
    .nav-desktop .nav-dropdown > button:hover {
      color: #C9A227;
      background: rgba(201, 162, 39, 0.08);
    }

    /* Underline draw animation on hover */
    .nav-desktop > a::after {
      content: '';
      position: absolute;
      left: 0.85rem;
      right: 0.85rem;
      bottom: 0.3rem;
      height: 2px;
      background: #C9A227;
      border-radius: 1px;
      transform: scaleX(0);
      transform-origin: left center;
      transition: transform 0.28s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .nav-desktop > a:hover::after {
      transform: scaleX(1);
    }

    /* Services dropdown */
    .nav-dropdown {
      position: relative;
    }

    .nav-dropdown > button {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
    }

    .nav-dropdown > button .chevron {
      width: 0.7rem;
      height: 0.7rem;
      transition: transform 0.25s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .nav-dropdown:hover > button .chevron,
    .nav-dropdown:focus-within > button .chevron {
      transform: rotate(180deg);
    }

    .nav-dropdown-panel {
      position: absolute;
      top: calc(100% + 0.35rem);
      left: 0;
      min-width: 17.5rem;
      background: #fff;
      border-radius: 0.75rem;
      box-shadow:
        0 4px 6px -1px rgba(0, 51, 102, 0.06),
        0 16px 40px -8px rgba(0, 51, 102, 0.14);
      border: 1px solid rgba(0, 0, 0, 0.06);
      padding: 0.4rem;
      z-index: 60;

      /* Closed state */
      opacity: 0;
      visibility: hidden;
      transform: translateY(8px) scale(0.98);
      transform-origin: top left;
      transition:
        opacity 0.22s cubic-bezier(0.22, 1, 0.36, 1),
        transform 0.22s cubic-bezier(0.22, 1, 0.36, 1),
        visibility 0.22s;
      pointer-events: none;
    }

    .nav-dropdown:hover .nav-dropdown-panel,
    .nav-dropdown:focus-within .nav-dropdown-panel {
      opacity: 1;
      visibility: visible;
      transform: translateY(0) scale(1);
      pointer-events: auto;
    }

    .nav-dropdown-panel a {
      display: block;
      padding: 0.7rem 1rem;
      font-size: 0.9375rem;
      font-weight: 500;
      color: #003366;
      text-decoration: none;
      border-radius: 0.5rem;
      transition: background 0.18s ease, color 0.18s ease, padding-left 0.18s ease;
    }

    .nav-dropdown-panel a:hover {
      background: rgba(201, 162, 39, 0.12);
      color: #C9A227;
      padding-left: 1.15rem;
    }

    /* =========================================================
       HEADER ACTIONS
       ========================================================= */
    .header-actions {
      display: flex;
      align-items: center;
      gap: 0.35rem;
      flex-shrink: 0;
    }

    @media (min-width: 640px) {
      .header-actions { gap: 0.5rem; }
    }

    .btn-enquiry {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      font-size: 0.8125rem;
      font-weight: 600;
      color: #003366;
      text-decoration: none;
      padding: 0.45rem 0.7rem;
      border-radius: 9999px;
      white-space: nowrap;
      border: 1px solid transparent;
      transition:
        color 0.2s ease,
        background 0.2s ease,
        border-color 0.2s ease,
        transform 0.2s ease;
    }

    .btn-enquiry:hover {
      color: #C9A227;
      background: rgba(201, 162, 39, 0.1);
      border-color: rgba(201, 162, 39, 0.25);
    }

    .btn-enquiry:active {
      transform: scale(0.97);
    }

    .btn-enquiry .dot {
      width: 0.45rem;
      height: 0.45rem;
      border-radius: 9999px;
      background: #C9A227;
      flex-shrink: 0;
      box-shadow: 0 0 0 0 rgba(201, 162, 39, 0.5);
      animation: pulse-dot 2.2s ease-in-out infinite;
    }

    @keyframes pulse-dot {
      0%, 100% { box-shadow: 0 0 0 0 rgba(201, 162, 39, 0.45); }
      50% { box-shadow: 0 0 0 5px rgba(201, 162, 39, 0); }
    }

    @media (min-width: 640px) {
      .btn-enquiry {
        font-size: 0.9rem;
        padding: 0.5rem 0.9rem;
        gap: 0.5rem;
      }
      .btn-enquiry .dot {
        width: 0.55rem;
        height: 0.55rem;
      }
    }

    .btn-enquiry .label-short { display: inline; }
    .btn-enquiry .label-full { display: none; }

    @media (min-width: 480px) {
      .btn-enquiry .label-short { display: none; }
      .btn-enquiry .label-full { display: inline; }
    }

    /* Hamburger */
    .btn-menu {
      position: relative;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 2.75rem;
      height: 2.75rem;
      padding: 0;
      border: none;
      background: transparent;
      color: #003366;
      cursor: pointer;
      border-radius: 0.55rem;
      transition: background 0.2s ease;
      flex-shrink: 0;
    }

    .btn-menu:hover {
      background: rgba(0, 51, 102, 0.06);
    }

    @media (min-width: 1024px) {
      .btn-menu.btn-menu-open { display: none; }
    }

    /* Animated hamburger → X */
    .hamburger {
      width: 1.35rem;
      height: 1rem;
      position: relative;
      display: block;
    }

    .hamburger span {
      display: block;
      position: absolute;
      left: 0;
      width: 100%;
      height: 2px;
      background: currentColor;
      border-radius: 2px;
      transition:
        transform 0.3s cubic-bezier(0.22, 1, 0.36, 1),
        opacity 0.2s ease,
        top 0.3s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .hamburger span:nth-child(1) { top: 0; }
    .hamburger span:nth-child(2) { top: 50%; margin-top: -1px; }
    .hamburger span:nth-child(3) { top: 100%; margin-top: -2px; }

    body.menu-open .hamburger span:nth-child(1) {
      top: 50%;
      margin-top: -1px;
      transform: rotate(45deg);
    }

    body.menu-open .hamburger span:nth-child(2) {
      opacity: 0;
      transform: scaleX(0);
    }

    body.menu-open .hamburger span:nth-child(3) {
      top: 50%;
      margin-top: -1px;
      transform: rotate(-45deg);
    }

    /* =========================================================
       MOBILE MENU – full screen slide + staggered links
       ========================================================= */
    .mobile-menu {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      height: 100dvh;
      z-index: 1100;
      background: #fff;
      display: flex;
      flex-direction: column;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
      overscroll-behavior: contain;

      /* Closed */
      transform: translate3d(100%, 0, 0);
      visibility: hidden;
      pointer-events: none;
      transition:
        transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
        visibility 0.4s;
    }

    .mobile-menu.is-open {
      transform: translate3d(0, 0, 0);
      visibility: visible;
      pointer-events: auto;
    }

    /* Soft backdrop fade (optional overlay edge) */
    .mobile-menu::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(0, 51, 102, 0.03) 0%, transparent 40%);
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .mobile-menu.is-open::before {
      opacity: 1;
    }

    .mobile-menu-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
      min-height: 4.25rem;
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
      flex-shrink: 0;
      position: sticky;
      top: 0;
      background: #fff;
      z-index: 2;
    }

    @media (min-width: 640px) {
      .mobile-menu-header {
        padding: 0 1.25rem;
        min-height: 4.75rem;
      }
    }

    .mobile-menu-header .brand {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      text-decoration: none;
      color: #003366;
    }

    .mobile-menu-header .brand img {
      height: 5.5rem;
      width: auto;
      object-fit: contain;
    }

    .mobile-menu-header .brand span {
      font-weight: 600;
      font-size: 1.05rem;
    }

    .mobile-menu-header .btn-menu {
      display: inline-flex !important;
    }

    .mobile-menu-body {
      padding: 1.25rem 1.25rem 2.5rem;
      flex: 1;
    }

    @media (min-width: 640px) {
      .mobile-menu-body {
        padding: 1.75rem 1.75rem 3rem;
        max-width: 28rem;
      }
    }

    .mobile-menu-section {
      margin-bottom: 1.75rem;
      padding-bottom: 1.5rem;
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    }

    .mobile-menu-section:last-child {
      border-bottom: none;
      margin-bottom: 0;
    }

    .mobile-menu-label {
      font-size: 0.7rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: #9ca3af;
      margin-bottom: 0.35rem;
      padding-left: 0.15rem;
    }

    /* Staggered link entrance when menu opens */
    .mobile-menu a.menu-link {
      display: block;
      padding: 0.85rem 0.15rem;
      font-size: 1.2rem;
      font-weight: 500;
      color: #003366;
      text-decoration: none;
      border-radius: 0.35rem;
      opacity: 0;
      transform: translateX(1.25rem);
      transition:
        color 0.2s ease,
        background 0.2s ease,
        padding-left 0.2s ease,
        opacity 0.35s cubic-bezier(0.22, 1, 0.36, 1),
        transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .mobile-menu.is-open a.menu-link {
      opacity: 1;
      transform: translateX(0);
    }

    /* Stagger delays */
    .mobile-menu.is-open a.menu-link:nth-child(1) { transition-delay: 0.08s; }
    .mobile-menu.is-open a.menu-link:nth-child(2) { transition-delay: 0.12s; }
    .mobile-menu.is-open a.menu-link:nth-child(3) { transition-delay: 0.16s; }
    .mobile-menu.is-open a.menu-link:nth-child(4) { transition-delay: 0.20s; }
    .mobile-menu.is-open a.menu-link:nth-child(5) { transition-delay: 0.24s; }
    .mobile-menu.is-open a.menu-link:nth-child(6) { transition-delay: 0.28s; }
    .mobile-menu.is-open .mobile-menu-section:nth-child(2) a.menu-link:nth-child(1) { transition-delay: 0.22s; }
    .mobile-menu.is-open .mobile-menu-section:nth-child(2) a.menu-link:nth-child(2) { transition-delay: 0.26s; }
    .mobile-menu.is-open .mobile-menu-section:nth-child(2) a.menu-link:nth-child(3) { transition-delay: 0.30s; }
    .mobile-menu.is-open .mobile-menu-section:nth-child(2) a.menu-link:nth-child(4) { transition-delay: 0.34s; }
    .mobile-menu.is-open .mobile-menu-section:nth-child(2) a.menu-link:nth-child(5) { transition-delay: 0.38s; }

    /* Reset delays when closed so next open re-animates */
    .mobile-menu:not(.is-open) a.menu-link {
      transition-delay: 0s !important;
    }

    .mobile-menu a.menu-link:hover,
    .mobile-menu a.menu-link:active {
      color: #C9A227;
      padding-left: 0.5rem;
    }

    .mobile-menu .btn-enquiry-solid {
      display: inline-flex;
      align-items: center;
      gap: 0.55rem;
      margin-top: 0.35rem;
      padding: 0.9rem 1.6rem;
      background: #003366;
      color: #fff !important;
      border-radius: 9999px;
      font-size: 0.95rem;
      font-weight: 600;
      text-decoration: none;
      opacity: 0;
      transform: translateY(12px);
      transition:
        background 0.2s ease,
        transform 0.35s cubic-bezier(0.22, 1, 0.36, 1),
        opacity 0.35s cubic-bezier(0.22, 1, 0.36, 1),
        box-shadow 0.2s ease;
      box-shadow: 0 4px 14px rgba(0, 51, 102, 0.2);
    }

    .mobile-menu.is-open .btn-enquiry-solid {
      opacity: 1;
      transform: translateY(0);
      transition-delay: 0.42s;
    }

    .mobile-menu:not(.is-open) .btn-enquiry-solid {
      transition-delay: 0s;
    }

    .mobile-menu .btn-enquiry-solid:hover {
      background: #002244;
      box-shadow: 0 6px 20px rgba(0, 51, 102, 0.28);
    }

    .mobile-menu .btn-enquiry-solid svg {
      transition: transform 0.25s ease;
    }

    .mobile-menu .btn-enquiry-solid:hover svg {
      transform: translateX(3px);
    }

    /* Lock page scroll when menu open */
    body.menu-open {
      overflow: hidden;
      touch-action: none;
    }

    /* =========================================================
       HERO (shared)
       ========================================================= */
    .hero-section {
      min-height: 100vh;
      min-height: 100svh;
    }

    .hero-overlay {
      background: linear-gradient(
        135deg,
        rgba(0, 51, 102, 0.78) 0%,
        rgba(0, 51, 102, 0.55) 50%,
        rgba(0, 30, 60, 0.72) 100%
      );
    }

    .hero-title .hero-word {
      display: inline-block;
      opacity: 0;
      transform: translateY(36px);
    }

    .hero-stat {
      opacity: 0;
      transform: translateY(24px);
    }

    .hero-gold-line {
      height: 3px;
      width: 0;
      background: #C9A227;
      transition: width 1.1s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .hero-gold-line.is-visible { width: 72px; }

    .hero-scroll-indicator { opacity: 0; }

    @keyframes bounce-y {
      0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
      40% { transform: translateY(-8px); }
      60% { transform: translateY(-4px); }
    }

    .hero-scroll-indicator.is-visible {
      opacity: 1;
      animation: bounce-y 2s infinite 2.2s;
    }

    /* WhatsApp float */
    .whatsapp-float {
      position: fixed;
      bottom: max(1.25rem, env(safe-area-inset-bottom));
      right: max(1.25rem, env(safe-area-inset-right));
      z-index: 900;
      width: 3.5rem;
      height: 3.5rem;
      background: #25D366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 16px rgba(37, 211, 102, 0.4);
      transition: transform 0.25s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.25s ease;
    }

    .whatsapp-float:hover {
      transform: scale(1.08);
      box-shadow: 0 6px 22px rgba(37, 211, 102, 0.5);
    }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
      }
    }
  </style>
</head>
<body id="top" class="font-almarai bg-white text-ev-dark antialiased">

  <div class="site-wrapper">

    <!-- ==================== HEADER ==================== -->
    <header class="site-header" id="site-header">
      <div class="site-header-inner">

        <a href="index.php" class="header-logo" aria-label="Primex25 home">
          <img src="images/logo.jpeg" alt="Primex25 Trade &amp; Consult Ltd" />
        </a>

        <!-- Desktop nav -->
        <nav class="nav-desktop" aria-label="Main">
          <a href="index.php">Home</a>
          <a href="about.php">About us</a>
          <a href="leadership.php">Leadership</a>

          <div class="nav-dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false">
              Services
              <svg class="chevron" viewBox="0 0 12 8" fill="none" aria-hidden="true">
                <path d="M11 1.5L6 6.5L1 1.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            <div class="nav-dropdown-panel" role="menu">
              <a href="energy-petroleum.php" role="menuitem">Energy &amp; Petroleum</a>
              <a href="trade-sourcing.php" role="menuitem">International Trade &amp; Sourcing</a>
              <a href="procurement.php" role="menuitem">Procurement</a>
              <a href="business-advisory.php" role="menuitem">Business Advisory</a>
            </div>
          </div>

          <a href="partnerships.php">Partnerships</a>
        </nav>

        <div class="header-actions">
          <a href="contact.php" class="btn-enquiry" aria-label="Business Enquiry">
            <span class="dot" aria-hidden="true"></span>
            <span class="label-short">Enquiry</span>
            <span class="label-full">Business Enquiry</span>
          </a>

          <button
            type="button"
            id="mobile-menu-btn"
            class="btn-menu btn-menu-open"
            aria-label="Open menu"
            aria-controls="mobile-menu"
            aria-expanded="false"
          >
            <span class="hamburger" aria-hidden="true">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
        </div>
      </div>
    </header>

