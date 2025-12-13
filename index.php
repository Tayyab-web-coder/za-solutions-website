<?php 
  // SEO Variables for Home Page
  $pageTitle = "Home - ZA Solutions | Data Intelligence & Operations Excellence";
  $metaDescription = "ZA Solutions provides expert data intelligence and operations services including lead generation, data entry, and CRM management. Transform your B2B strategy with precision-engineered solutions.";
  $keywords = "data intelligence, business operations, lead generation, data entry, B2B solutions, CRM management, ZA Solutions";
  $canonicalUrl = "https://www.zasolutions.com/";
  $activePage = "home";
  
  // Include Header
  include './includes/header.php'; 
?>

<!-- Schema.org Structured Data for Google -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "ZA Solutions",
  "url": "https://www.zasolutions.com",
  "logo": "https://www.zasolutions.com/public/image.png",
  "description": "Data Intelligence & Operations Excellence",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Bahawalpur",
    "addressRegion": "Punjab",
    "addressCountry": "PK"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+92-325-629-4921",
    "contactType": "Customer Service",
    "email": "info@zasolutions.co"
  },
  "sameAs": [
    "https://www.linkedin.com/company/za-solutions-bwp/",
    "https://www.facebook.com/people/ZA-Solutions/61572168118592/",
    "https://www.instagram.com/za.solutions.bwp/"
  ]
}
</script>

<!-- Home Page Content -->
<div id="home" class="page active">
  
  <!-- Hero Section -->
  <section class="hero-gradient relative overflow-hidden section-py" style="min-height: 100vh; display: flex; align-items: center">
    <div class="absolute inset-0" style="background: radial-gradient(circle at 50% 50%, rgba(0, 194, 255, 0.15) 0%, transparent 60%);"></div>
    <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(rgba(0, 194, 255, 0.4) 1px, transparent 1px); background-size: 50px 50px;"></div>
    
    <div class="max-w-7xl mx-auto section-px w-full relative z-10">
      <div class="text-center max-w-5xl mx-auto">
        <div class="reveal-item mt-8">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 backdrop-blur-sm mb-8">
            <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <span class="text-cyan-300 text-sm font-medium">Trusted by 100+ Leading Companies</span>
          </div>
        </div>
        
        <h1 class="hero-title text-white mb-4">
          <span class="slide-left">Data That</span><br />
          <span class="slide-right gradient-text">Drives Growth</span>
        </h1>
        
        <p class="hero-description mb-4 leading-relaxed text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
          Transform your B2B strategy with precision-engineered data solutions that power exponential scaling.
        </p>
        
        <div class="hero-buttons flex flex-wrap gap-5 justify-center mb-2">
          <a href="contact.php" class="btn-primary text-lg px-8 py-4">Contact Us</a>
          <a href="services.php" class="btn-secondary text-lg px-8 py-4">Our Services</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section py-20 px-6 relative">
    <div class="max-w-7xl mx-auto relative z-10">
      
      <!-- Section Header -->
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 backdrop-blur-sm mb-6">
          <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <span class="text-cyan-300 text-sm font-medium">Trusted Excellence</span>
        </div>
        
        <h2 class="text-5xl font-bold text-white mb-6">
          What We <span class="gradient-text">Specialize In</span>
        </h2>
        
        <p class="text-xl text-gray-400 max-w-3xl mx-auto">
          Core services engineered to fuel your sales pipeline and optimize operational efficiency with precision and scale
        </p>
      </div>

      <!-- Service Cards Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- 1. Lead Generation -->
        <div class="service-card reveal-item">
          <div class="icon-circle mb-4">
            <svg fill="currentColor" viewBox="0 0 20 20">
              <path d="M13 7H7v6h6V7z"></path>
              <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2V2a1 1 0 112 0v1a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2v1a1 1 0 11-2 0v-1h-2v1a1 1 0 11-2 0v-1a2 2 0 01-2-2v-2H3a1 1 0 110-2h1V9H3a1 1 0 110-2h1V5a2 2 0 012-2v-1z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <h3 class="text-white mb-3 font-bold text-lg">Lead Generation</h3>
          <ul class="text-xs text-gray-400 space-y-1.5">
            <li>• B2B Lead Generation</li>
            <li>• LinkedIn Lead Generation</li>
            <li>• Real Estate Lead Generation</li>
            <li>• Social Media Lead Generation</li>
            <li>• E-commerce Leads</li>
            <li>• Healthcare & Medical Leads</li>
            <li>• Contact List Building</li>
          </ul>
        </div>

        <!-- 2. Data Entry -->
        <div class="service-card reveal-item">
          <div class="icon-circle mb-4">
            <svg fill="currentColor" viewBox="0 0 20 20">
              <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"></path>
            </svg>
          </div>
          <h3 class="text-white mb-3 font-bold text-lg">Data Entry</h3>
          <ul class="text-xs text-gray-400 space-y-1.5">
            <li>• Manual Data Entry</li>
            <li>• Excel/Google Sheets Data Entry</li>
            <li>• CRM Data Entry</li>
            <li>• Copy-Paste Tasks</li>
            <li>• PDF/Scanned Document Entry</li>
            <li>• Data Cleanup & Formatting</li>
          </ul>
        </div>

        <!-- 3. Microsoft Office Services -->
        <div class="service-card reveal-item">
          <div class="icon-circle mb-4">
            <svg fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
              <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 1 1 0 000-2H2a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2h-2a1 1 0 000 2 2 2 0 012 2v11H4V5z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <h3 class="text-white mb-3 font-bold text-lg">Microsoft Office Services</h3>
          <ul class="text-xs text-gray-400 space-y-1.5">
            <li>• Word Document Creation</li>
            <li>• Excel Spreadsheet Development</li>
            <li>• PowerPoint Presentation Design</li>
            <li>• Data Visualization (Charts/Graphs)</li>
            <li>• Document Editing & Formatting</li>
            <li>• Report Creation</li>
          </ul>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center mt-16">
        <a href="services.php" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-xl font-semibold text-lg shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:scale-105 transition-all duration-300">
          Explore All Services
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

<!-- Tools & Technologies Section -->
      <section class="tools-section section-py">
        <div class="max-w-7xl mx-auto section-px relative z-10">
          <!-- Section Header -->
          <div class="text-center mb-16">
            <div
              class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 backdrop-blur-sm mb-6"
            >
              <svg
                class="w-5 h-5 text-cyan-400"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <span class="text-cyan-300 text-sm font-medium"
                >Our Technology Stack</span
              >
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
              Tools & <span class="gradient-text">Technologies We Use</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
              Leveraging industry-leading platforms and tools to deliver
              precise, scalable data solutions
            </p>
          </div>

          <!-- All Tools Grid - Initially showing 2 rows -->
          <div class="tools-grid-wrapper reveal-item">
            <div
              id="allToolsGrid"
              class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 tools-grid"
            >
              <!-- LinkedIn Sales Navigator -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">LinkedIn Sales Navigator</h4>
                <p class="tool-description">Advanced B2B prospecting</p>
              </div>

              <!-- Apollo.io -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Apollo.io</h4>
                <p class="tool-description">Contact database & enrichment</p>
              </div>

              <!-- ZoomInfo -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-5.5-2.5l7.51-3.49L17.5 6.5 9.99 9.99 6.5 17.5zm5.5-6.6c.61 0 1.1.49 1.1 1.1s-.49 1.1-1.1 1.1-1.1-.49-1.1-1.1.49-1.1 1.1-1.1z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">ZoomInfo</h4>
                <p class="tool-description">B2B intelligence platform</p>
              </div>

              <!-- Hunter.io -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Hunter.io</h4>
                <p class="tool-description">Email finder & verification</p>
              </div>

              <!-- Lusha -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Lusha</h4>
                <p class="tool-description">Contact information finder</p>
              </div>

              <!-- Seamless.ai -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Seamless.ai</h4>
                <p class="tool-description">Real-time B2B data</p>
              </div>

              <!-- HubSpot -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M18.5 8.5V6c0-.55-.45-1-1-1h-2.5c0-1.66-1.34-3-3-3S9 3.34 9 5H6.5c-.55 0-1 .45-1 1v2.5c-1.66 0-3 1.34-3 3s1.34 3 3 3V17c0 .55.45 1 1 1H9c0 1.66 1.34 3 3 3s3-1.34 3-3h2.5c.55 0 1-.45 1-1v-2.5c1.66 0 3-1.34 3-3s-1.34-3-3-3zM12 3.5c.83 0 1.5.67 1.5 1.5h-3c0-.83.67-1.5 1.5-1.5zm0 17c-.83 0-1.5-.67-1.5-1.5h3c0 .83-.67 1.5-1.5 1.5z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">HubSpot</h4>
                <p class="tool-description">CRM & marketing hub</p>
              </div>

              <!-- Salesforce -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Salesforce</h4>
                <p class="tool-description">Enterprise CRM solution</p>
              </div>

              <!-- Zoho CRM -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Zoho CRM</h4>
                <p class="tool-description">Cloud-based CRM</p>
              </div>

              <!-- Pipedrive -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Pipedrive</h4>
                <p class="tool-description">Sales pipeline tool</p>
              </div>

              <!-- Airtable -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Airtable</h4>
                <p class="tool-description">Collaborative database</p>
              </div>

              <!-- Google Sheets -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 12h2v5H7v-5zm8-5h2v10h-2V7zm-4 3h2v7h-2v-7z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Google Sheets</h4>
                <p class="tool-description">Spreadsheet management</p>
              </div>

              <!-- ZeroBounce -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">ZeroBounce</h4>
                <p class="tool-description">Email verification</p>
              </div>

              <!-- NeverBounce -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">NeverBounce</h4>
                <p class="tool-description">Email list cleaning</p>
              </div>

              <!-- Clearbit -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2zm0-6h2v4h-2z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Clearbit</h4>
                <p class="tool-description">Data enrichment API</p>
              </div>

              <!-- FullContact -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">FullContact</h4>
                <p class="tool-description">Identity resolution</p>
              </div>

              <!-- Snov.io -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">Snov.io</h4>
                <p class="tool-description">Email finder & verifier</p>
              </div>

              <!-- EmailListVerify -->
              <div class="tool-card">
                <div class="tool-icon-wrapper">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"
                    />
                  </svg>
                </div>
                <h4 class="tool-name">EmailListVerify</h4>
                <p class="tool-description">Bulk verification</p>
              </div>
            </div>

            <!-- Show More Button -->
            <div class="text-center mt-8">
              <button
                onclick="toggleAllTools()"
                id="allToolsToggleBtn"
                class="btn-secondary inline-flex items-center gap-2"
              >
                <span>Show More</span>
                <svg
                  class="w-5 h-5 transition-transform duration-300"
                  id="allToolsIcon"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

  <!-- Who We Serve & Why Choose Us -->
  <section class="section-py">
    <div class="max-w-7xl mx-auto section-px">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        
        <div class="reveal-item">
          <h2 class="text-white mb-6">Who We Serve</h2>
          <div class="space-y-4">
            <p class="text-gray-300">• B2B Service Providers seeking reliable data infrastructure</p>
            <p class="text-gray-300">• Agencies & Consultancies demanding precision and quality</p>
            <p class="text-gray-300">• Startups & High-Growth Companies needing rapid market expansion</p>
            <p class="text-gray-300">• Recruiters & Sales Teams building targeted prospect lists</p>
          </div>
        </div>
        
        <div class="reveal-item">
          <h2 class="text-white mb-6">Why Partner with ZA Solutions?</h2>
          <div class="space-y-3">
            <div class="flex gap-4">
              <div class="text-2xl font-bold gradient-text">✓</div>
              <div>
                <p class="font-semibold text-white">Unwavering Accuracy</p>
                <p class="text-sm text-gray-400">Detail-oriented approach with rigorous verification protocols</p>
              </div>
            </div>
            <div class="flex gap-4">
              <div class="text-2xl font-bold gradient-text">✓</div>
              <div>
                <p class="font-semibold text-white">Proven Reliability</p>
                <p class="text-sm text-gray-400">13,000+ hours of successful project execution</p>
              </div>
            </div>
            <div class="flex gap-4">
              <div class="text-2xl font-bold gradient-text">✓</div>
              <div>
                <p class="font-semibold text-white">End-to-End Support</p>
                <p class="text-sm text-gray-400">From research to CRM integration and support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Client Reviews Marquee -->
  <section class="reviews-section">
    <div class="max-w-7xl mx-auto section-px relative z-10">
      <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 backdrop-blur-sm mb-6">
          <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <span class="text-cyan-300 text-sm font-medium">Client Testimonials</span>
        </div>
        
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
          What Our <span class="gradient-text">Clients Say</span>
        </h2>
        
        <p class="text-xl text-gray-400 max-w-2xl mx-auto">
          Real reviews from satisfied clients on Upwork
        </p>
      </div>
      
      <div class="swiper reviewsSwiper">
        <div class="swiper-wrapper" id="reviewsWrapper">
          <!-- Reviews will be loaded by JS -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section-py bg-gradient-to-r from-cyan-950/50 via-purple-950/50 to-cyan-950/50">
    <div class="max-w-5xl mx-auto section-px text-center">
      <div class="bg-gradient-to-br from-cyan-950/60 to-purple-950/60 rounded-3xl p-12 border border-cyan-500/30 backdrop-blur-sm">
        <h2 class="text-white mb-6">Ready to Transform Your Data Strategy?</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
          Join 100+ companies who trust ZA Solutions for accurate, high-quality data solutions that drive growth.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
          <a href="contact.php" class="btn-primary text-lg px-8 py-4">Start Your Project</a>
          <a href="services.php" class="btn-secondary text-lg px-8 py-4">Explore Services</a>
        </div>
      </div>
    </div>
  </section>

</div>

<?php 
  // Include Footer
  include './includes/footer.php'; 
?>