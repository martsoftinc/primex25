
<?php include 'header.php'; ?>

<main class="pt-0">

  <!-- ===== HERO ===== -->
  <section id="home" class="hero-section relative flex items-center overflow-hidden bg-ev-dark">
    <div class="absolute inset-0 z-0">
      <video autoplay loop muted playsinline class="w-full h-full object-cover" poster="https://cdn.prod.website-files.com/683d63758db3c51dd8a96ce0%2F689cbba34cfb3ad80d45c55a_evostel-1-hxz7rg3q-z82gyfsa_5tjljFHS-poster-00001.jpg">
        <source src="intro.mp4" type="video/mp4" />
        <source src="https://cdn.prod.website-files.com/683d63758db3c51dd8a96ce0%2F689cbba34cfb3ad80d45c55a_evostel-1-hxz7rg3q-z82gyfsa_5tjljFHS-transcode.webm" type="video/webm" />
      </video>
      <div class="hero-overlay absolute inset-0"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl w-full pt-20">
      <div class="max-w-4xl">
        <div class="hero-gold-line mb-6" id="hero-gold-line"></div>
        <h1 class="hero-title text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-8">
          <span class="hero-word">Connecting Opportunities.</span><br />
          <span class="hero-word">Building Partnerships.</span><br />
          <span class="hero-word text-ev-gold">Creating Value.</span>
        </h1>
        <p class="hero-stat text-base sm:text-lg text-white/80 leading-relaxed mb-10 max-w-2xl">
          Primex25 Trade &amp; Consult Ltd is a Ghana-based B2B company focused on international trade facilitation, energy and petroleum, sourcing, procurement and business advisory services — connecting credible businesses across Ghana, Africa and international markets.
        </p>
        <div class="hero-stat flex flex-wrap gap-4 mb-12">
          <a href="#services" class="inline-flex items-center gap-2 px-7 py-3.5 bg-ev-gold text-ev-blue rounded-full text-sm font-semibold hover:bg-white transition-colors">
            Explore Our Services
            <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="partnerships.php" class="inline-flex items-center gap-2 px-7 py-3.5 border-2 border-white/40 text-white rounded-full text-sm font-medium hover:border-ev-gold hover:text-ev-gold transition-colors">
            Partner With Us
          </a>
        </div>
        <div class="hero-stat flex flex-wrap gap-x-8 gap-y-2 text-sm text-white/60">
          <span>International Trade</span>
          <span class="text-ev-gold">·</span>
          <span>Energy &amp; Petroleum</span>
          <span class="text-ev-gold">·</span>
          <span>Procurement</span>
          <span class="text-ev-gold">·</span>
          <span>Business Advisory</span>
        </div>
      </div>
    </div>

    <div class="hero-scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2">
      <span class="text-xs uppercase tracking-widest text-white/50">Scroll</span>
      <svg class="w-5 h-5 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </div>
  </section>

  <!-- ===== ABOUT TEASER ===== -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex items-center gap-3 mb-10">
        <span class="w-3 h-3 rounded-full bg-gray-300"></span>
        <span class="text-sm uppercase tracking-wider text-gray-500">About us</span>
      </div>
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium leading-snug text-ev-dark mb-6">
            A Ghana-based B2B gateway connecting opportunities with credible counterparties.
          </h2>
          <p class="text-base text-gray-600 leading-relaxed mb-8">
            We identify opportunities, establish relevant commercial connections, support business engagements and help companies navigate sourcing, procurement, market-entry and partnership requirements across regional and international markets.
          </p>
          <div class="flex flex-wrap gap-3">
            <a href="about.php" class="inline-flex items-center gap-2 px-6 py-3 bg-ev-purple text-white rounded-full text-sm font-medium hover:bg-ev-purple/90 transition-colors">
              About Primex25
              <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="leadership.php" class="inline-flex items-center gap-2 px-6 py-3 border border-gray-200 text-ev-dark rounded-full text-sm font-medium hover:border-ev-gold hover:text-ev-gold transition-colors">
              Leadership
            </a>
          </div>
        </div>
        <div class="space-y-6">
          <div class="bg-ev-gray rounded-2xl p-6">
            <div class="text-xs uppercase tracking-wider text-ev-gold font-medium mb-2">Mission</div>
            <p class="text-sm text-ev-dark leading-relaxed">To connect credible businesses, opportunities and strategic partners through professional trade facilitation, sourcing, procurement and commercial advisory services.</p>
          </div>
          <div class="bg-ev-gray rounded-2xl p-6">
            <div class="text-xs uppercase tracking-wider text-ev-gold font-medium mb-2">Vision</div>
            <p class="text-sm text-ev-dark leading-relaxed">To become a trusted African business gateway connecting companies and commercial opportunities across regional and international markets.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHY PARTNER ===== -->
  <section class="py-20 md:py-28 bg-white border-t border-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid md:grid-cols-12 gap-10 mb-16">
        <div class="md:col-span-3 flex items-start gap-3">
          <span class="w-3 h-3 rounded-full bg-gray-300 mt-1.5"></span>
          <span class="text-sm uppercase tracking-wider text-gray-500">Why Us</span>
        </div>
        <div class="md:col-span-6">
          <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-ev-dark mb-6">Why Partner With Primex25?</h2>
          <p class="text-base text-gray-600 leading-relaxed">
            We position ourselves as a professional intermediary focused on credible connections, structured engagement and commercial integrity.
          </p>
        </div>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div>
          <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
          </div>
          <h3 class="text-xl font-bold text-ev-dark mb-3">Credible Connections</h3>
          <p class="text-sm text-gray-600 leading-relaxed">Connecting businesses with relevant commercial opportunities and counterparties.</p>
        </div>
        <div>
          <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-ev-dark mb-3">Commercial Professionalism</h3>
          <p class="text-sm text-gray-600 leading-relaxed">Structured communication, documentation and commercially appropriate engagement.</p>
        </div>
        <div>
          <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-ev-dark mb-3">Cross-Border Perspective</h3>
          <p class="text-sm text-gray-600 leading-relaxed">Connecting opportunities in Ghana and Africa with regional and international markets.</p>
        </div>
        <div>
          <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-ev-dark mb-3">Confidentiality &amp; Integrity</h3>
          <p class="text-sm text-gray-600 leading-relaxed">Responsible handling of business information and commercial relationships.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== APPROACH ===== -->
  <section class="py-16 md:py-20 bg-ev-gray">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid md:grid-cols-2 gap-12">
        <div>
          <div class="flex items-center gap-3 mb-6">
            <span class="w-3 h-3 rounded-full bg-gray-300"></span>
            <span class="text-sm uppercase tracking-wider text-gray-500">Core Values</span>
          </div>
          <div class="flex flex-wrap gap-3">
            <span class="px-4 py-2 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Integrity</span>
            <span class="px-4 py-2 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Professionalism</span>
            <span class="px-4 py-2 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Confidentiality</span>
            <span class="px-4 py-2 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Reliability</span>
            <span class="px-4 py-2 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Partnership</span>
            <span class="px-4 py-2 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Value Creation</span>
          </div>
        </div>
        <div>
          <div class="flex items-center gap-3 mb-6">
            <span class="w-3 h-3 rounded-full bg-gray-300"></span>
            <span class="text-sm uppercase tracking-wider text-gray-500">Our Approach</span>
          </div>
          <div class="flex flex-wrap items-center gap-2 text-sm text-ev-dark">
            <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Identify Opportunities</span>
            <span class="text-ev-gold">→</span>
            <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Qualify Counterparties</span>
            <span class="text-ev-gold">→</span>
            <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Connect Businesses</span>
            <span class="text-ev-gold">→</span>
            <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Facilitate Engagement</span>
            <span class="text-ev-gold">→</span>
            <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Support Progress</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SERVICES ===== -->
  <section id="services" class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid md:grid-cols-12 gap-10 mb-16">
        <div class="md:col-span-3 flex items-start gap-3">
          <span class="w-3 h-3 rounded-full bg-gray-300 mt-1.5"></span>
          <span class="text-sm uppercase tracking-wider text-gray-500">Our Services</span>
        </div>
        <div class="md:col-span-6">
          <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-ev-dark mb-6">Our Core Business Areas</h2>
          <p class="text-base text-gray-600 leading-relaxed">
            Four complementary service lines designed to connect businesses with commercial opportunities across markets.
          </p>
        </div>
      </div>

      <div class="grid sm:grid-cols-2 gap-6">
        <a href="energy-petroleum.php" class="group block p-8 bg-ev-dark rounded-2xl hover:bg-ev-blue transition-colors">
          <h3 class="text-xl font-bold text-white mb-3">Energy &amp; Petroleum</h3>
          <p class="text-sm text-white/70 leading-relaxed mb-4">Trade facilitation and commercial coordination for refined products including EN590, PMS, Jet A-1 and LPG. We facilitate connections — we do not hold inventory.</p>
          <span class="text-sm font-medium text-ev-gold group-hover:text-white transition-colors">Learn more →</span>
        </a>
        <a href="trade-sourcing.php" class="group block p-8 bg-ev-lightpurple rounded-2xl hover:bg-ev-gray transition-colors">
          <h3 class="text-xl font-bold text-ev-dark mb-3">International Trade &amp; Sourcing</h3>
          <p class="text-sm text-ev-dark/70 leading-relaxed mb-4">Connecting qualified buyers, suppliers and manufacturers across domestic and international markets.</p>
          <span class="text-sm font-medium text-ev-purple group-hover:text-ev-gold transition-colors">Learn more →</span>
        </a>
        <a href="procurement.php" class="group block p-8 bg-ev-purple rounded-2xl hover:opacity-95 transition-opacity">
          <h3 class="text-xl font-bold text-white mb-3">Procurement</h3>
          <p class="text-sm text-white/70 leading-relaxed mb-4">Supplier identification, product sourcing and vendor coordination for companies, institutions and projects.</p>
          <span class="text-sm font-medium text-ev-gold">Learn more →</span>
        </a>
        <a href="business-advisory.php" class="group block p-8 bg-ev-yellow rounded-2xl hover:bg-ev-gray transition-colors">
          <h3 class="text-xl font-bold text-ev-dark mb-3">Business Advisory</h3>
          <p class="text-sm text-ev-dark/70 leading-relaxed mb-4">Practical advisory on commercial development, market opportunities and strategic partnerships.</p>
          <span class="text-sm font-medium text-ev-dark group-hover:text-ev-gold transition-colors">Learn more →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== WHO WE SERVE ===== -->
  <section class="py-16 md:py-20 bg-ev-gray">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex items-center gap-3 mb-8">
        <span class="w-3 h-3 rounded-full bg-gray-300"></span>
        <span class="text-sm uppercase tracking-wider text-gray-500">Who We Serve</span>
      </div>
      <div class="flex flex-wrap gap-3">
        <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Corporate Buyers</span>
        <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Suppliers &amp; Manufacturers</span>
        <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Energy Companies</span>
        <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Importers &amp; Exporters</span>
        <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Procurement Teams</span>
        <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">International Businesses</span>
        <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Investors &amp; Strategic Partners</span>
      </div>
    </div>
  </section>

  <!-- ===== PARTNERSHIPS TEASER ===== -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid md:grid-cols-2 gap-10 mb-12">
        <div>
          <div class="flex items-center gap-3 mb-6">
            <span class="w-3 h-3 rounded-full bg-gray-300"></span>
            <span class="text-sm uppercase tracking-wider text-gray-500">Partnerships</span>
          </div>
          <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-ev-dark leading-tight">
            Building Relationships That <span class="text-ev-gold">Create Value</span>
          </h2>
        </div>
        <div class="flex flex-col justify-end">
          <p class="text-base text-gray-600 leading-relaxed mb-6">
            Primex25 welcomes credible engagement from buyers, suppliers, manufacturers, international companies, mandate holders and strategic partners seeking mutually beneficial commercial relationships.
          </p>
          <a href="partnerships.php" class="inline-flex items-center gap-2 text-sm font-medium text-ev-purple hover:text-ev-gold transition-colors">
            View partnership pathways
            <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="partnerships.php#buyers" class="block p-6 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors">
          <h3 class="text-lg font-bold text-ev-dark mb-2">For Buyers</h3>
          <p class="text-sm text-gray-600">Submit your requirement and we will assess fit.</p>
        </a>
        <a href="partnerships.php#suppliers" class="block p-6 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors">
          <h3 class="text-lg font-bold text-ev-dark mb-2">For Suppliers &amp; Manufacturers</h3>
          <p class="text-sm text-gray-600">Register interest in new market opportunities.</p>
        </a>
        <a href="partnerships.php#international" class="block p-6 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors">
          <h3 class="text-lg font-bold text-ev-dark mb-2">For International Companies</h3>
          <p class="text-sm text-gray-600">Explore market partnership possibilities.</p>
        </a>
        <a href="partnerships.php#mandates" class="block p-6 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors">
          <h3 class="text-lg font-bold text-ev-dark mb-2">For Mandates &amp; Representatives</h3>
          <p class="text-sm text-gray-600">Discuss structured representation opportunities.</p>
        </a>
        <a href="partnerships.php#strategic" class="block p-6 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors sm:col-span-2 lg:col-span-1">
          <h3 class="text-lg font-bold text-ev-dark mb-2">For Strategic Partners</h3>
          <p class="text-sm text-gray-600">Propose a mutually beneficial collaboration.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== LEADERSHIP TEASER ===== -->
  <section class="py-16 md:py-20 bg-white border-t border-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex items-center gap-3 mb-10">
        <span class="w-3 h-3 rounded-full bg-gray-300"></span>
        <span class="text-sm uppercase tracking-wider text-gray-500">Leadership</span>
      </div>
      <div class="flex flex-col sm:flex-row gap-8 items-start">
        <a href="leadership.php" class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 bg-ev-gray block">
          <img src="images/ceo.jpeg" alt="Gerald Kofi Jumbo" class="w-full h-full object-cover" />
        </a>
        <div>
          <h3 class="text-2xl font-bold text-ev-dark">
            <a href="leadership.php" class="hover:text-ev-gold transition-colors">Gerald Kofi Jumbo</a>
          </h3>
          <p class="text-ev-gold font-medium mb-3">Founder &amp; Chief Executive Officer</p>
          <p class="text-sm text-gray-600 leading-relaxed mb-4 max-w-xl">
            Providing strategic leadership across business development, international trade facilitation, energy and petroleum engagements, procurement, sourcing and corporate partnerships.
          </p>
          <a href="leadership.php" class="inline-flex items-center gap-2 text-sm font-medium text-ev-purple hover:text-ev-gold transition-colors">
            View full profile
            <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CONTACT CTA ===== -->
  <section class="py-20 md:py-28 bg-ev-dark">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
            Looking for a <span class="text-ev-gold">credible business connection?</span>
          </h2>
          <p class="text-white/70 mb-6">Submit a structured commercial enquiry. We review all approaches for relevance. Submission does not guarantee engagement.</p>
          <div class="space-y-2 text-sm text-white/60">
            <p>Plot 104, Farrar Avenue, Adabraka, Accra, Ghana</p>
            <p>Digital Address: GS-0138-8305</p>
            <p><a href="mailto:info@primex25.com" class="text-ev-gold hover:underline">info@primex25.com</a> · <a href="https://wa.me/233558814552" class="text-ev-gold hover:underline">+233 55 881 4552</a></p>
          </div>
        </div>
        <div class="flex md:justify-end">
          <a href="contact.php" class="inline-flex items-center gap-2 px-8 py-4 bg-ev-gold text-ev-dark rounded-full text-sm font-semibold hover:bg-white transition-colors">
            Go to Enquiry Form
            <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>
