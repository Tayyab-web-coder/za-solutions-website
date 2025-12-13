<?php 
  // SEO Variables for Services Page
  $pageTitle = "Our Services - ZA Solutions | Data & Operations Excellence";
  $metaDescription = "Explore ZA Solutions' comprehensive services: Lead Generation, Data Entry, CRM Management, Email Marketing, and more. Expert data solutions for business growth.";
  $keywords = "data services, lead generation services, data entry, CRM management, email marketing, virtual assistance";
  $canonicalUrl = "https://www.zasolutions.com/services";
  $activePage = "services";
  
  // Include Header
  include './includes/header.php'; 
?>

    <!-- Services Page -->
    <div id="services" class="page">
      <section class="section-py">
        <!-- style="background: linear-gradient(to bottom, #0a0e27, #0f1629)" -->
        <div class="max-w-7xl mx-auto section-px">
          <div class="flex flex-col justify-center items-center">
            <h2 class="text-5xl font-bold text-white my-6">
              Our <span class="gradient-text">Specializations</span>
            </h2>
            <p class="text-center text-gray-400 mb-12 max-w-2xl reveal-item">
              At ZA Solutions, we specialise in providing the data
              infrastructure and operational support necessary for businesses to
              achieve rapid, scalable growth.
            </p>
          </div>
          <div
            class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6 mb-12"
          >
            <!-- 1. Lead Generation -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13 7H7v6h6V7z"></path>
                  <path
                    fill-rule="evenodd"
                    d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2V2a1 1 0 112 0v1a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2v1a1 1 0 11-2 0v-1h-2v1a1 1 0 11-2 0v-1a2 2 0 01-2-2v-2H3a1 1 0 110-2h1V9H3a1 1 0 110-2h1V5a2 2 0 012-2v-1z"
                    clip-rule="evenodd"
                  ></path>
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
                  <path
                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                  ></path>
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
                  <path
                    fill-rule="evenodd"
                    d="M4 5a2 2 0 012-2 1 1 0 000-2H2a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2h-2a1 1 0 000 2 2 2 0 012 2v11H4V5z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Microsoft Office Services
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Word Document Creation</li>
                <li>• Excel Spreadsheet Development</li>
                <li>• PowerPoint Presentation Design</li>
                <li>• Data Visualization (Charts/Graphs)</li>
                <li>• Document Editing & Formatting</li>
                <li>• Report Creation</li>
              </ul>
            </div>

            <!-- 4. CRM Management -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">CRM Management</h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• CRM Setup (HubSpot, Zoho, Salesforce)</li>
                <li>• Lead Uploading & Tagging</li>
                <li>• Pipeline Management</li>
                <li>• CRM Cleanup & Optimization</li>
                <li>• Contact Segmentation</li>
                <li>• Automation Setup</li>
              </ul>
            </div>

            <!-- 5. Email Marketing & Outreach -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                  ></path>
                  <path
                    d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Email Marketing & Outreach
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Cold Email Outreach</li>
                <li>• Email Marketing Campaigns</li>
                <li>• Follow-Up Email Sequences</li>
                <li>• Email Copywriting</li>
                <li>• List Segmentation</li>
                <li>• Deliverability Optimization</li>
              </ul>
            </div>

            <!-- 6. Data Scraping & Extraction -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Data Scraping & Extraction
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Website Scraping</li>
                <li>• Social Media Scraping</li>
                <li>• Email/Phone Extraction</li>
                <li>• PDF/Data Extraction</li>
                <li>• Automated Scraping</li>
                <li>• Competitor Data Scraping</li>
              </ul>
            </div>

            <!-- 7. Influencer Research & Outreach -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Influencer Research & Outreach
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Influencer Identification</li>
                <li>• Niche-Based Influencer Lists</li>
                <li>• Sponsored Campaign Lead Lists</li>
                <li>• Outreach Message Writing</li>
                <li>• Engagement & Performance Research</li>
                <li>• Social Media Influencer Mapping</li>
              </ul>
            </div>

            <!-- 8. Social Media Management -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"
                  ></path>
                  <path
                    d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Social Media Management
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Content Scheduling</li>
                <li>• Profile Optimization</li>
                <li>• Captions & Posting</li>
                <li>• Community Engagement</li>
                <li>• Insights & Analytics</li>
                <li>• Social Media Templates</li>
              </ul>
            </div>

            <!-- 9. Graphic Designing -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Graphic Designing (Canva)
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Logo Design</li>
                <li>• Social Media Designs</li>
                <li>• Canva Designs (Posts, Videos)</li>
                <li>• Website Graphics</li>
                <li>• Flyers, Posters & Brochures</li>
                <li>• YouTube/Instagram Thumbnails</li>
                <li>• Presentation Design</li>
              </ul>
            </div>

            <!-- 10. Virtual Assistance -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Virtual Assistance
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Administrative Support</li>
                <li>• Email Inbox Management</li>
                <li>• Calendar & Appointment Scheduling</li>
                <li>• Online Research</li>
                <li>• Task/Project Management</li>
                <li>• Data Handling & Documentation</li>
              </ul>
            </div>

            <!-- 11. PDF Services -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">PDF Services</h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• PDF to Word/Excel Conversion</li>
                <li>• PDF Editing & Cleanup</li>
                <li>• Fillable PDF Creation</li>
                <li>• PDF Formatting</li>
                <li>• Extracting Tables & Text</li>
                <li>• Merging/Splitting PDFs</li>
              </ul>
            </div>

            <!-- 12. Research Services -->
            <div class="service-card reveal-item">
              <div class="icon-circle mb-4">
                <svg fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z"></path>
                  <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <h3 class="text-white mb-3 font-bold text-lg">
                Research Services
              </h3>
              <ul class="text-xs text-gray-400 space-y-1.5">
                <li>• Market Research</li>
                <li>• Competitor Research</li>
                <li>• Product Research</li>
                <li>• Company Background Research</li>
                <li>• Niche-Specific Research</li>
                <li>• Contact Verification Research</li>
              </ul>
            </div>
          </div>

          <div
            class="bg-cyan-950/30 border border-cyan-500/20 rounded-lg p-8 reveal-item"
          >
            <h3 class="text-xl font-bold text-white mb-4">
              Let's Work Together
            </h3>
            <p class="text-gray-300 mb-6">
              Whether you're looking to build targeted prospect lists, clean up
              your CRM, or free up valuable time on repetitive administrative
              work, ZA Solutions has you covered.
            </p>
            <button onclick="showPage('contact')" class="btn-primary">
              Get in Touch
            </button>
          </div>
        </div>
      </section>
    </div>
<?php 
  // Include Footer
  include './includes/footer.php'; 
?>