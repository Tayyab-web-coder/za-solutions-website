<?php 
  // SEO Variables for Team Page
  $pageTitle = "Our Team - ZA Solutions | Meet Our Data Experts";
  $metaDescription = "Meet the ZA Solutions team: experienced data professionals delivering 13,000+ hours of expert lead generation, data entry, and CRM management services globally.";
  $keywords = "ZA Solutions team, data experts, lead generation specialists, data entry professionals, CRM management team";
  $canonicalUrl = "https://www.zasolutions.com/team";
  $activePage = "team";
  
  // Include Header
  include './includes/header.php'; 
?>

<!-- Team Page -->
<div id="team" class="page active">
  <section class="section-py">
    <div class="max-w-7xl mx-auto section-px">
      <div class="flex flex-col justify-center items-center">
        <h2 class="text-5xl font-bold text-white my-6">
          Our <span class="gradient-text">Team</span>
        </h2>
        <p class="text-center text-gray-400 mb-12 max-w-2xl reveal-item">
          Global Reach, Local Dedication: At ZA Solutions, we operate on a
          global scale to ensure round-the-clock productivity and diverse
          market understanding.
        </p>
      </div>

       <!-- Complete Team Cards Grid -->
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Maria Masood Card -->
            <div
              class="team-card-compact reveal-item"
              onclick="openTeamModal('maria')"
            >
              <div class="team-avatar">
                <span class="text-3xl font-bold text-cyan-400">M</span>
              </div>
              <h3 class="font-bold text-white text-lg mt-4">Maria Masood</h3>
              <p class="text-sm text-gray-400 mb-3">CEO & Founder</p>

              <p class="team-summary text-sm text-gray-300 mb-4 px-2">
                CEO with 100% Job Success Score, 13,000+ hours across 120+
                global projects
              </p>

              <div class="social-icons flex gap-3 justify-center mb-4">
                <a
                  href="mailto:mariamasood@zasolutions.co"
                  onclick="event.stopPropagation()"
                  aria-label="Email"
                >
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                  </svg>
                </a>
                <a
                  href="https://www.linkedin.com/in/maria-masood-7a3530382/"
                  target="_blank"
                  onclick="event.stopPropagation()"
                  aria-label="LinkedIn"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                    />
                  </svg>
                </a>
                <a
                  href="https://wa.me/923256294921"
                  target="_blank"
                  onclick="event.stopPropagation()"
                  aria-label="WhatsApp"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                    />
                  </svg>
                </a>
              </div>

              <button class="btn-primary-small w-full">
                View Full Profile
              </button>
            </div>

            <!-- Ali Raza Bukhari Card -->
            <div
              class="team-card-compact reveal-item"
              onclick="openTeamModal('ali')"
            >
              <div class="team-avatar">
                <span class="text-3xl font-bold text-cyan-400">A</span>
              </div>
              <h3 class="font-bold text-white text-lg mt-4">
                Ali Raza Bukhari
              </h3>
              <p class="text-sm text-gray-400 mb-3">Co-Founder & Director</p>

              <p class="team-summary text-sm text-gray-300 mb-4 px-2">
                4 years establishing data integrity standards and operational
                reliability for client success.
              </p>

              <div class="social-icons flex gap-3 justify-center mb-4">
                <a
                  href="mailto:alirazabukhari@zasolutions.co"
                  onclick="event.stopPropagation()"
                  aria-label="Email"
                >
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                  </svg>
                </a>
                <a
                  href="https://www.linkedin.com/in/ali-raza-bukhari-366b0257/"
                  target="_blank"
                  onclick="event.stopPropagation()"
                  aria-label="LinkedIn"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                    />
                  </svg>
                </a>
                <a
                  href="https://wa.me/923219688055"
                  target="_blank"
                  onclick="event.stopPropagation()"
                  aria-label="WhatsApp"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                    />
                  </svg>
                </a>
              </div>

              <button class="btn-primary-small w-full">
                View Full Profile
              </button>
            </div>

            <!-- Hanan Rashid Card -->
            <div
              class="team-card-compact reveal-item"
              onclick="openTeamModal('hanan')"
            >
              <div class="team-avatar">
                <span class="text-3xl font-bold text-cyan-400">H</span>
              </div>
              <h3 class="font-bold text-white text-lg mt-4">Hanan Rashid</h3>
              <p class="text-sm text-gray-400 mb-3">Client Liaison Officer</p>

              <p class="team-summary text-sm text-gray-300 mb-4 px-2">
                Provides dedicated support bridging clients and operations with
                transparent oversight.
              </p>

              <div class="social-icons flex gap-3 justify-center mb-4">
                <a
                  href="mailto:hananrashid@zasolutions.co"
                  onclick="event.stopPropagation()"
                  aria-label="Email"
                >
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                  </svg>
                </a>
                <a
                  href="https://www.linkedin.com/in/hanan-rashid-a28b5075/"
                  target="_blank"
                  onclick="event.stopPropagation()"
                  aria-label="LinkedIn"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                    />
                  </svg>
                </a>
                <a
                  href="https://wa.me/+61475029475"
                  target="_blank"
                  onclick="event.stopPropagation()"
                  aria-label="WhatsApp"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                    />
                  </svg>
                </a>
              </div>

              <button class="btn-primary-small w-full">
                View Full Profile
              </button>
            </div>

            <!-- Muhammad Rizwan Khan Card -->
            <div
              class="team-card-compact reveal-item"
              onclick="openTeamModal('rizwan')"
            >
              <div class="team-avatar">
                <span class="text-3xl font-bold text-cyan-400">M</span>
              </div>
              <h3 class="font-bold text-white text-lg mt-4">
                Muhammad Rizwan Khan
              </h3>
              <p class="text-sm text-gray-400 mb-3">
                Senior Lead Generation Specialist
              </p>

              <p class="team-summary text-sm text-gray-300 mb-4 px-2">
                3+ years in lead mining and data verification.
              </p>

              <div class="social-icons flex gap-3 justify-center mb-4">
                <a
                  href="mailto:muhammadrizwan@zasolutions.co"
                  onclick="event.stopPropagation()"
                  aria-label="Email"
                >
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                  </svg>
                </a>
                <a
                  href="#"
                  onclick="event.stopPropagation(); return false;"
                  aria-label="LinkedIn"
                  style="opacity: 0.3; cursor: not-allowed"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                    />
                  </svg>
                </a>
                <a
                  href="#"
                  onclick="event.stopPropagation(); return false;"
                  aria-label="WhatsApp"
                  style="opacity: 0.3; cursor: not-allowed"
                >
                  <svg
                    class="w-5 h-5"
                    fill="currentColor
        "
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                    />
                  </svg>
                </a>
              </div>
              <button class="btn-primary-small w-full">
                View Full Profile
              </button>
            </div>

            <!-- Ayesha Akhtar Card -->
            <div
              class="team-card-compact reveal-item"
              onclick="openTeamModal('ayesha')"
            >
              <div class="team-avatar">
                <span class="text-3xl font-bold text-cyan-400">A</span>
              </div>
              <h3 class="font-bold text-white text-lg mt-4">Ayesha Akhtar</h3>
              <p class="text-sm text-gray-400 mb-3">
                Senior Specialist, Data Accuracy
              </p>

              <p class="team-summary text-sm text-gray-300 mb-4 px-2">
                3 years delivering precise data solutions with 99% email
                deliverability.
              </p>

              <div class="social-icons flex gap-3 justify-center mb-4">
                <a
                  href="mailto:ayeshaakhtar@zasolutions.co"
                  onclick="event.stopPropagation()"
                  aria-label="Email"
                >
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                  </svg>
                </a>
                <a
                  href="#"
                  onclick="event.stopPropagation(); return false;"
                  aria-label="LinkedIn"
                  style="opacity: 0.3; cursor: not-allowed"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                    />
                  </svg>
                </a>
                <a
                  href="https://wa.me/61466946222"
                  target="_blank"
                  onclick="event.stopPropagation()"
                  aria-label="WhatsApp"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                    />
                  </svg>
                </a>
              </div>

              <button class="btn-primary-small w-full">
                View Full Profile
              </button>
            </div>

            <!-- Kiran Fatima Card -->
            <div
              class="team-card-compact reveal-item"
              onclick="openTeamModal('kiran')"
            >
              <div class="team-avatar">
                <span class="text-3xl font-bold text-cyan-400">K</span>
              </div>
              <h3 class="font-bold text-white text-lg mt-4">Kiran Fatima</h3>
              <p class="text-sm text-gray-400 mb-3">
                Senior Specialist, Data & Outreach
              </p>

              <p class="team-summary text-sm text-gray-300 mb-4 px-2">
                Top-Rated Freelancer with expertise in B2B lead generation and
                e-commerce support.
              </p>
              <div class="social-icons flex gap-3 justify-center mb-4">
                <a
                  href="mailto:kiranfatima@zasolutions.co"
                  onclick="event.stopPropagation()"
                  aria-label="Email"
                >
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                  </svg>
                </a>
                <a
                  href="#"
                  onclick="event.stopPropagation(); return false;"
                  aria-label="LinkedIn"
                  style="opacity: 0.3; cursor: not-allowed"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                    />
                  </svg>
                </a>
                <a
                  href="#"
                  onclick="event.stopPropagation(); return false;"
                  aria-label="WhatsApp"
                  style="opacity: 0.3; cursor: not-allowed"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                    />
                  </svg>
                </a>
              </div>

              <button class="btn-primary-small w-full">
                View Full Profile
              </button>
            </div>
          </div>

      <!-- IMPORTANT: Team Member Modal - THIS WAS MISSING! -->
      <div id="teamModal" class="team-modal hidden">
        <div class="modal-overlay" onclick="closeTeamModal()"></div>
        <div class="modal-content-team">
          <button class="modal-close" onclick="closeTeamModal()">✕</button>
          <div class="flex flex-col md:flex-row gap-6">
            <div class="text-center md:text-left md:w-1/3">
              <div class="modal-avatar mx-auto md:mx-0 mb-4">
                <span id="modalAvatar" class="text-5xl font-bold text-cyan-400">M</span>
              </div>
              <h2 id="modalName" class="text-2xl font-bold text-white mb-1"></h2>
              <p id="modalRole" class="text-cyan-400 text-sm mb-1"></p>
              <p id="modalLocation" class="text-xs text-gray-400 mb-4"></p>
              <div>
                <h4 class="text-sm font-semibold text-white mb-3">Connect</h4>
                <div id="modalSocials" class="flex gap-3 justify-center md:justify-start"></div>
              </div>
            </div>
            <div class="md:w-2/3">
              <p id="modalDescription" class="text-gray-300 text-sm leading-relaxed text-left"></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<?php 
  // Include Footer
  include './includes/footer.php'; 
?>