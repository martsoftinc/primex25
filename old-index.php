<?php include 'header.php'; ?>

    <!-- ==================== MAIN ==================== -->
    <main class="pt-0">

      <!-- ===== HERO SECTION (FULL VIEWPORT) ===== -->
      <section id="home" class="hero-section relative flex items-center overflow-hidden bg-ev-dark">
        <!-- Background video / image -->
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
              Primex25 Trade & Consult Ltd is a Ghana-based B2B trade facilitation, sourcing, procurement and business development company connecting credible businesses, suppliers, buyers and strategic partners across Ghana, Africa and international markets.
            </p>
            <div class="hero-stat flex flex-wrap gap-4 mb-12">
              <a href="#services" class="inline-flex items-center gap-2 px-7 py-3.5 bg-ev-gold text-ev-blue rounded-full text-sm font-semibold hover:bg-white transition-colors">
                Explore Our Services
                <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
              <a href="#partnerships" class="inline-flex items-center gap-2 px-7 py-3.5 border-2 border-white/40 text-white rounded-full text-sm font-medium hover:border-ev-gold hover:text-ev-gold transition-colors">
                Partner With Us
              </a>
            </div>
            <div class="hero-stat flex flex-wrap gap-x-8 gap-y-2 text-sm text-white/60">
              <span>International Trade</span>
              <span class="text-ev-gold">·</span>
              <span>Energy & Petroleum</span>
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

      <!-- ===== ABOUT US ===== -->
      <section id="about" class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
          <div class="flex items-center gap-3 mb-10">
            <span class="w-3 h-3 rounded-full bg-gray-300"></span>
            <span class="text-sm uppercase tracking-wider text-gray-500">About us</span>
          </div>
          <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium leading-snug text-ev-dark mb-6">
                Primex25 Trade & Consult Ltd is a Ghana-based B2B company focused on international trade facilitation, energy and petroleum, sourcing, procurement and business advisory services.
              </h2>
              <p class="text-base text-gray-600 leading-relaxed mb-8">
                We exist to help bridge the gap between business opportunities and credible counterparties. Our role is to identify opportunities, establish relevant commercial connections, support business engagements and help companies navigate sourcing, procurement, market-entry and partnership requirements.
              </p>
              <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-ev-purple text-white rounded-full text-sm font-medium hover:bg-ev-purple/90 transition-colors">
                Business Enquiry
                <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
            <div class="space-y-6">
              <div class="bg-ev-gray rounded-2xl p-6">
                <div class="text-xs uppercase tracking-wider text-ev-green font-medium mb-2">Mission</div>
                <p class="text-sm text-ev-dark leading-relaxed">To connect credible businesses, opportunities and strategic partners through professional trade facilitation, sourcing, procurement and commercial advisory services.</p>
              </div>
              <div class="bg-ev-gray rounded-2xl p-6">
                <div class="text-xs uppercase tracking-wider text-ev-green font-medium mb-2">Vision</div>
                <p class="text-sm text-ev-dark leading-relaxed">To become a trusted African business gateway connecting companies and commercial opportunities across regional and international markets.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===== WHY PARTNER ===== -->
      <section class="py-20 md:py-28 bg-white">
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
            <div class="group">
              <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
              </div>
              <h3 class="text-xl font-bold text-ev-dark mb-3">Credible Business Connections</h3>
              <p class="text-sm text-gray-600 leading-relaxed">Connecting businesses with relevant commercial opportunities and counterparties.</p>
            </div>
            <div class="group">
              <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <h3 class="text-xl font-bold text-ev-dark mb-3">Commercial Professionalism</h3>
              <p class="text-sm text-gray-600 leading-relaxed">Structured communication, documentation and commercially appropriate engagement.</p>
            </div>
            <div class="group">
              <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <h3 class="text-xl font-bold text-ev-dark mb-3">Cross-Border Perspective</h3>
              <p class="text-sm text-gray-600 leading-relaxed">Connecting opportunities in Ghana and Africa with regional and international markets.</p>
            </div>
            <div class="group">
              <div class="w-12 h-12 rounded-xl bg-ev-blue flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-ev-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <h3 class="text-xl font-bold text-ev-dark mb-3">Confidentiality & Integrity</h3>
              <p class="text-sm text-gray-600 leading-relaxed">Responsible handling of business information and commercial relationships.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===== CORE VALUES & APPROACH ===== -->
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
                <span class="text-ev-green">→</span>
                <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Qualify Counterparties</span>
                <span class="text-ev-green">→</span>
                <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Connect Businesses</span>
                <span class="text-ev-green">→</span>
                <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Facilitate Engagement</span>
                <span class="text-ev-green">→</span>
                <span class="px-3 py-1.5 bg-white rounded-full shadow-sm">Support Progress</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===== OUR SERVICES ===== -->
      <section id="services" class="py-20 md:py-28 bg-white overflow-hidden">
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

          <div class="swiper is-services">
            <div class="swiper-wrapper">
              <!-- Energy -->
              <div class="swiper-slide" id="energy">
                <div class="flex flex-col md:flex-row gap-6 items-stretch">
                  <div class="flex-1 bg-ev-dark rounded-2xl p-8 flex flex-col justify-between min-h-[320px]">
                    <div>
                      <h3 class="text-2xl font-bold text-white mb-4">Energy & Petroleum</h3>
                      <p class="text-sm text-white/70 leading-relaxed mb-4">Trade facilitation, commercial coordination and market linkage within the petroleum and energy sector. We facilitate connections — we do not hold inventory.</p>
                      <ul class="text-sm text-white/60 space-y-1 mb-4">
                        <li>· EN590 10PPM / AGO · PMS / Gasoline</li>
                        <li>· Jet A-1 · LPG · Other energy products</li>
                      </ul>
                    </div>
                    <a href="#contact" class="inline-flex items-center gap-2 mt-4 text-sm font-medium text-ev-green hover:text-white transition-colors">
                      Discuss an Energy Requirement
                      <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                  </div>
                  <div class="flex-1 rounded-2xl overflow-hidden min-h-[320px] bg-ev-lightpurple p-8 flex flex-col justify-center">
                    <h4 class="text-sm font-semibold text-ev-dark mb-3 uppercase tracking-wider">Process</h4>
                    <ol class="space-y-2 text-sm text-ev-dark/80">
                      <li><span class="font-bold text-ev-blue">01</span> Business Enquiry</li>
                      <li><span class="font-bold text-ev-blue">02</span> Preliminary Qualification</li>
                      <li><span class="font-bold text-ev-blue">03</span> Counterparty Matching</li>
                      <li><span class="font-bold text-ev-blue">04</span> Commercial Engagement</li>
                      <li><span class="font-bold text-ev-blue">05</span> Transaction Coordination</li>
                    </ol>
                  </div>
                </div>
              </div>
              <!-- Trade -->
              <div class="swiper-slide" id="trade">
                <div class="flex flex-col md:flex-row gap-6 items-stretch">
                  <div class="flex-1 bg-ev-lightpurple rounded-2xl p-8 flex flex-col justify-between min-h-[320px]">
                    <div>
                      <h3 class="text-2xl font-bold text-ev-dark mb-4">International Trade & Sourcing</h3>
                      <p class="text-sm text-ev-dark/70 leading-relaxed">Connecting qualified buyers, suppliers, manufacturers and sourcing opportunities across domestic and international markets.</p>
                    </div>
                    <div class="flex flex-wrap gap-3 mt-6">
                      <a href="#contact" class="inline-flex items-center gap-2 text-sm font-medium text-ev-purple hover:text-ev-green transition-colors">Submit a Sourcing Requirement →</a>
                    </div>
                  </div>
                  <div class="flex-1 bg-ev-dark rounded-2xl p-8 flex flex-col justify-between min-h-[320px]">
                    <div>
                      <h4 class="text-sm font-semibold text-ev-gold mb-3 uppercase tracking-wider">Services</h4>
                      <ul class="text-sm text-white/70 space-y-2">
                        <li>International Sourcing</li>
                        <li>Supplier & Buyer Identification</li>
                        <li>Product Sourcing</li>
                        <li>Import & Export Facilitation</li>
                        <li>Cross-Border Business Development</li>
                      </ul>
                    </div>
                    <a href="#contact" class="inline-flex items-center gap-2 mt-4 text-sm font-medium text-ev-green hover:text-white transition-colors">
                      Introduce Your Company
                      <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Procurement -->
              <div class="swiper-slide" id="procurement">
                <div class="flex flex-col md:flex-row gap-6 items-stretch">
                  <div class="flex-1 bg-ev-purple rounded-2xl p-8 flex flex-col justify-between min-h-[320px]">
                    <div>
                      <h3 class="text-2xl font-bold text-white mb-4">Procurement</h3>
                      <p class="text-sm text-white/70 leading-relaxed">Supporting organizations with supplier identification, product sourcing, vendor coordination and procurement solutions for companies, institutions and projects.</p>
                    </div>
                    <a href="#contact" class="inline-flex items-center gap-2 mt-6 text-sm font-medium text-ev-green hover:text-white transition-colors">
                      Discuss Your Procurement Requirement
                      <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                  </div>
                  <div class="flex-1 bg-ev-gray rounded-2xl p-8 flex flex-col justify-center min-h-[320px]">
                    <h4 class="text-sm font-semibold text-ev-dark mb-4 uppercase tracking-wider">Areas</h4>
                    <div class="flex flex-wrap gap-2">
                      <span class="px-3 py-1.5 bg-white rounded-full text-xs font-medium text-ev-dark">Energy</span>
                      <span class="px-3 py-1.5 bg-white rounded-full text-xs font-medium text-ev-dark">Construction</span>
                      <span class="px-3 py-1.5 bg-white rounded-full text-xs font-medium text-ev-dark">Industrial Equipment</span>
                      <span class="px-3 py-1.5 bg-white rounded-full text-xs font-medium text-ev-dark">Corporate Supplies</span>
                      <span class="px-3 py-1.5 bg-white rounded-full text-xs font-medium text-ev-dark">Hospitality</span>
                      <span class="px-3 py-1.5 bg-white rounded-full text-xs font-medium text-ev-dark">General Merchandise</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Advisory -->
              <div class="swiper-slide" id="advisory">
                <div class="flex flex-col md:flex-row gap-6 items-stretch">
                  <div class="flex-1 bg-ev-yellow rounded-2xl p-8 flex flex-col justify-between min-h-[320px]">
                    <div>
                      <h3 class="text-2xl font-bold text-ev-dark mb-4">Business Advisory</h3>
                      <p class="text-sm text-ev-dark/70 leading-relaxed">Practical business advisory focused on commercial development, market opportunities and strategic partnerships.</p>
                    </div>
                    <a href="#contact" class="inline-flex items-center gap-2 mt-6 text-sm font-medium text-ev-dark hover:text-ev-green transition-colors">
                      Request a Consultation
                      <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                  </div>
                  <div class="flex-1 bg-ev-dark rounded-2xl p-8 flex flex-col justify-center min-h-[320px]">
                    <ul class="text-sm text-white/70 space-y-2">
                      <li>Business Development</li>
                      <li>Market Entry Support</li>
                      <li>Partnership Development</li>
                      <li>Commercial Representation</li>
                      <li>Business & Market Research</li>
                      <li>Strategic Commercial Advisory</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex items-center justify-between mt-8">
              <div class="swiper-drag-wrapper is-services flex-1 mr-8 h-1 bg-gray-200 rounded-full relative">
                <div class="swiper-drag-services h-full bg-ev-dark rounded-full w-1/4"></div>
              </div>
              <div class="flex gap-3">
                <button class="service-prev w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition-colors">
                  <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"><path d="M6.38 3.95L2.33 8l4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.67 8H2.45" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="service-next w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition-colors">
                  <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"><path d="M9.62 3.95L13.67 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.33 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
              </div>
            </div>
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
            <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Suppliers & Manufacturers</span>
            <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Energy Companies</span>
            <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Importers & Exporters</span>
            <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Procurement Teams</span>
            <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">International Businesses</span>
            <span class="px-5 py-2.5 bg-white rounded-full text-sm font-medium text-ev-dark shadow-sm">Investors & Strategic Partners</span>
          </div>
        </div>
      </section>

      <!-- ===== PARTNERSHIPS ===== -->
      <section id="partnerships" class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
          <div class="grid md:grid-cols-2 gap-10 mb-12">
            <div>
              <div class="flex items-center gap-3 mb-6">
                <span class="w-3 h-3 rounded-full bg-gray-300"></span>
                <span class="text-sm uppercase tracking-wider text-gray-500">Partnerships</span>
              </div>
              <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-ev-dark leading-tight">
                Building Relationships That <span class="text-ev-green">Create Value</span>
              </h2>
            </div>
            <div class="flex flex-col justify-end">
              <p class="text-base text-gray-600 leading-relaxed mb-6">
                Primex25 welcomes credible engagement from businesses, manufacturers, suppliers, buyers, investors and organizations seeking mutually beneficial commercial relationships.
              </p>
            </div>
          </div>
          <div class="grid sm:grid-cols-2 gap-6">
            <a href="#contact" class="block p-8 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors group">
              <h3 class="text-lg font-bold text-ev-dark mb-2">For Buyers</h3>
              <p class="text-sm text-gray-600 mb-4">Submit your requirement and we will assess fit.</p>
              <span class="text-sm font-medium text-ev-purple group-hover:text-ev-green transition-colors">Submit Buyer Requirement →</span>
            </a>
            <a href="#contact" class="block p-8 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors group">
              <h3 class="text-lg font-bold text-ev-dark mb-2">For Suppliers & Manufacturers</h3>
              <p class="text-sm text-gray-600 mb-4">Register interest in new market opportunities.</p>
              <span class="text-sm font-medium text-ev-purple group-hover:text-ev-green transition-colors">Register Supplier Interest →</span>
            </a>
            <a href="#contact" class="block p-8 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors group">
              <h3 class="text-lg font-bold text-ev-dark mb-2">For International Companies</h3>
              <p class="text-sm text-gray-600 mb-4">Explore market partnership possibilities.</p>
              <span class="text-sm font-medium text-ev-purple group-hover:text-ev-green transition-colors">Discuss Market Partnership →</span>
            </a>
            <a href="#contact" class="block p-8 bg-ev-gray rounded-2xl hover:bg-ev-lightpurple transition-colors group">
              <h3 class="text-lg font-bold text-ev-dark mb-2">For Strategic Partners</h3>
              <p class="text-sm text-gray-600 mb-4">Propose a mutually beneficial collaboration.</p>
              <span class="text-sm font-medium text-ev-purple group-hover:text-ev-green transition-colors">Propose a Partnership →</span>
            </a>
          </div>
        </div>
      </section>

      <!-- ===== COMPLIANCE ===== -->
      <section class="py-16 md:py-20 bg-ev-gray">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
          <div class="max-w-3xl">
            <div class="flex items-center gap-3 mb-6">
              <span class="w-3 h-3 rounded-full bg-gray-300"></span>
              <span class="text-sm uppercase tracking-wider text-gray-500">Compliance & Due Diligence</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-bold text-ev-dark mb-4">Counterparty Qualification</h2>
            <p class="text-base text-gray-600 leading-relaxed">
              Primex25 places importance on appropriate counterparty qualification before progressing material commercial engagements. Where relevant, this may include corporate identity verification, company documentation, KYC considerations, counterparty due diligence, commercial requirement verification and compliance screening. We do not claim processes beyond those we actually perform.
            </p>
          </div>
        </div>
      </section>

      <!-- ===== LEADERSHIP ===== -->
      <section class="py-16 md:py-20 bg-white">
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
                <a href="leadership.php" class="hover:text-ev-green transition-colors">Gerald Kofi Jumbo</a>
              </h3>
              <p class="text-ev-green font-medium mb-3">Founder & Chief Executive Officer</p>
              <p class="text-sm text-gray-600 leading-relaxed mb-4 max-w-xl">
                Providing strategic leadership and overseeing Primex25’s business development, international trade facilitation, energy and petroleum engagements, procurement, sourcing, and corporate partnerships.
              </p>
              <a href="leadership.php" class="inline-flex items-center gap-2 text-sm font-medium text-ev-purple hover:text-ev-green transition-colors">
                View full profile
                <svg class="w-4 h-4" viewBox="0 0 17 16" fill="none"><path d="M10.12 3.95L14.17 8l-4.05 4.05" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.83 8h11.22" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- ===== CONTACT ===== -->
      <section id="contact" class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
          <div class="grid md:grid-cols-12 gap-10 mb-16">
            <div class="md:col-span-3 flex items-start gap-3">
              <span class="w-3 h-3 rounded-full bg-gray-300 mt-1.5"></span>
              <span class="text-sm uppercase tracking-wider text-gray-500">Contact us</span>
            </div>
            <div class="md:col-span-9">
              <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-ev-dark mb-6">
                Looking for a <span class="text-ev-green">credible business connection?</span>
              </h2>
              <p class="text-base text-gray-600">Whether you are seeking supply, sourcing opportunities, procurement support or strategic partnerships, talk to Primex25.</p>
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-gray-50 rounded-2xl p-8 md:p-10">
              <div class="mb-10">
                <h3 class="text-xl font-bold text-ev-dark mb-6">Contact information</h3>
                <div class="space-y-4">
                  <div>
                    <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">Company</div>
                    <div class="text-base font-medium text-ev-dark">Primex25 Trade & Consult Ltd</div>
                  </div>
                  <div>
                    <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">Location</div>
                    <div class="text-base font-medium text-ev-dark">Ghana</div>
                  </div>
                  <div>
                    <div class="text-xs uppercase tracking-wider text-gray-400 mb-1">Focus</div>
                    <div class="text-sm text-ev-dark">International Trade · Energy & Petroleum · Procurement · Business Advisory</div>
                  </div>
                </div>
              </div>
              <p class="text-sm text-gray-500 leading-relaxed">
                All enquiries are reviewed for commercial relevance. We respond to serious B2B approaches and may request additional information as part of preliminary qualification.
              </p>
            </div>

            <div class="bg-white rounded-2xl border border-gray-100 p-8 md:p-10">
              <form class="space-y-5" id="enquiry-form" method="post" action="#">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Full Name *</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="fullName" placeholder="Your full name" type="text" required />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Job Title *</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="jobTitle" placeholder="e.g. Procurement Manager" type="text" required />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Company Name *</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="company" placeholder="Company name" type="text" required />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Country *</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="country" placeholder="Country" type="text" required />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Corporate Email *</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="email" placeholder="name@company.com" type="email" required />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Telephone *</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="phone" placeholder="+233 ..." type="tel" required />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">WhatsApp</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="whatsapp" placeholder="Optional" type="tel" />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Company Website</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="website" placeholder="https://" type="url" />
                  </div>
                </div>

                <div>
                  <label class="block text-xs font-medium text-gray-500 mb-1.5">Nature of Business</label>
                  <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green focus:ring-1 focus:ring-ev-green outline-none transition-colors text-sm" name="nature" placeholder="e.g. Petroleum trading, Manufacturing" type="text" />
                </div>

                <div class="grid sm:grid-cols-2 gap-4">
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Business Interest *</label>
                    <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green outline-none text-sm" name="interest" required>
                      <option value="">Select interest</option>
                      <option>Energy & Petroleum</option>
                      <option>International Trade & Sourcing</option>
                      <option>Procurement</option>
                      <option>Business Advisory</option>
                      <option>Strategic Partnership</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Applicant Type *</label>
                    <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green outline-none text-sm" name="type" required>
                      <option value="">Select type</option>
                      <option>Buyer</option>
                      <option>Supplier</option>
                      <option>Manufacturer</option>
                      <option>Service Client</option>
                      <option>Investor/Partner</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-4">
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Product / Service Required</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green outline-none text-sm" name="product" placeholder="Where applicable" type="text" />
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1.5">Quantity / Volume</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green outline-none text-sm" name="quantity" placeholder="Where applicable" type="text" />
                  </div>
                </div>

                <div>
                  <label class="block text-xs font-medium text-gray-500 mb-1.5">Destination / Country</label>
                  <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green outline-none text-sm" name="destination" placeholder="Where applicable" type="text" />
                </div>

                <div>
                  <label class="block text-xs font-medium text-gray-500 mb-1.5">Brief Description of Requirement *</label>
                  <textarea class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-ev-green outline-none text-sm resize-y" rows="4" name="message" placeholder="Describe your requirement clearly and professionally." required></textarea>
                </div>

                <div class="flex items-start gap-3">
                  <input type="checkbox" name="consent" required class="mt-1 w-4 h-4 rounded border-gray-300 text-ev-green focus:ring-ev-green" />
                  <label class="text-xs text-gray-500 leading-relaxed">I confirm the information is accurate and consent to Primex25 processing this enquiry for business communication purposes. *</label>
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