// Toggle all tools section expansion
function toggleAllTools() {
  const grid = document.getElementById("allToolsGrid");
  const btn = document.getElementById("allToolsToggleBtn");
  const icon = document.getElementById("allToolsIcon");
  const btnText = btn.querySelector("span");

  grid.classList.toggle("expanded");
  icon.classList.toggle("rotate-180");

  if (grid.classList.contains("expanded")) {
    btnText.textContent = "Show Less";
  } else {
    btnText.textContent = "Show More";
    // Scroll to section header smoothly
    document.querySelector(".tools-section").scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  }
}

// Reviews data
const reviews = [
  {
    title: "Virtual Assistant – Research & Data Entry",
    date: "Jun 10, 2025 - Aug 15, 2025",
    rating: 5,
    text: "Maria has consistently demonstrated exceptional professionalism, efficiency, and initiative. She communicates clearly, builds strong rapport and approaches every task with a solutions-oriented mindset. Highly recommend!",
    link: "https://www.upwork.com/freelancers/mariamasood",
  },
  {
    title: "Research & Data Entry: Collect Sponsor Info",
    date: "Jun 7, 2025 - Jun 10, 2025",
    rating: 5,
    text: "I would recommend! great detailed work!",
    link: "https://www.upwork.com/freelancers/mariamasood",
  },
  {
    title: "Data entry of online articles",
    date: "Mar 20, 2025 - Apr 8, 2025",
    rating: 5,
    text: "Maria is great to work with. Very responsive and ahead of schedule. I was very pleased with her work, and would definitely work with her again.",
    link: "https://www.upwork.com/freelancers/mariamasood",
  },
  {
    title: "Data Entry from Excel into DocketTrak",
    date: "Feb 8, 2025 - Mar 6, 2025",
    rating: 5,
    text: "Maria understood the various projects assigned and completed them efficiently and much quicker than expected. We will use her again if we need her help with future projects.",
    link: "https://www.upwork.com/freelancers/mariamasood",
  },
  {
    title: "Data Scraping for Bankruptcy Cases",
    date: "Nov 29, 2024 - Dec 4, 2024",
    rating: 5,
    text: "Maria did a great job scraping leads for us!",
    link: "https://www.upwork.com/freelancers/mariamasood",
  },
  {
    title: "Business Lookup Data Entry",
    date: "Oct 22, 2025 - Nov 12, 2025",
    rating: 5,
    text: "Ayesha was prompt with work and fair on pricing when some of the leads did not match our criteria.",
    link: "https://www.upwork.com/freelancers/ayeshaakhtar",
  },
  {
    title: "Extract images from Snapform to PowerPoint",
    date: "Mar 9, 2025 - Mar 11, 2025",
    rating: 5,
    text: "Sometimes you need a quality professional who can complete a project with minimum fuss and great speed. Ayesha is that type of person who I will definitely use again.",
    link: "https://www.upwork.com/freelancers/ayeshaakhtar",
  },
  {
    title: "Data Entry Specialist",
    date: "Nov 10, 2024 - Jan 18, 2025",
    rating: 5,
    text: "Ayesha was great to work with, perfect attention to detail and delivered on schedule every time. Highly recommend!",
    link: "https://www.upwork.com/freelancers/ayeshaakhtar",
  },
  {
    title: "LinkedIn Subscriber Management",
    date: "Dec 22, 2024 - Jan 18, 2025",
    rating: 5,
    text: "Working with Ayesha was an exemplary experience of professionalism and expertise. Her patience and clarity in communication helped us move smoothly through each project phase. Her attention to detail was of a premium standard.",
    link: "https://www.upwork.com/freelancers/ayeshaakhtar",
  },
  {
    title: "Australian Voice-Over Artist Recording",
    date: "Dec 4, 2024 - Dec 5, 2024",
    rating: 5,
    text: "Ayesha's voice was exactly what we were looking for - friendly, engaging, and with a clear Australian accent",
    link: "https://www.upwork.com/freelancers/ayeshaakhtar",
  },
  {
    title: "Email Addresses and Phone Numbers Scrape",
    date: "Feb 17, 2024 - Mar 1, 2024",
    rating: 5,
    text: "Kiran was an excellent contractor. She was very communicative and forthcoming. She was transparent and worked to the tight deadlines I asked of her! I would thoroughly recommend to anyone looking for data scraping",
    link: "https://www.upwork.com/freelancers/kiranfatima",
  },
  {
    title: "UK School Courses Project",
    date: "Nov 2, 2023 - Feb 16, 2024",
    rating: 5,
    text: "Kiran did a great job. Worked fast and accurately.",
    link: "https://www.upwork.com/freelancers/kiranfatima",
  },
  {
    title: "Data entry/data mining from research website",
    date: "Dec 15, 2023 - Jan 7, 2024",
    rating: 5,
    text: "Clean data mining in a timely manner. Will work with them again!",
    link: "https://www.upwork.com/freelancers/kiranfatima",
  },
  {
    title: "Web Scrapping of Products Listing",
    date: "Feb 24, 2023 - Feb 27, 2023",
    rating: 5,
    text: "It was a pleasure to work with Kiran, she is professional and delivers. I can recommend her to anybody that needs help with all sorts of Data Extraction Etc.",
    link: "https://www.upwork.com/freelancers/kiranfatima",
  },
  {
    title: "150 leads of CEOs/Founders of Knife Brands",
    date: "Jan 7, 2023 - Jan 7, 2023",
    rating: 5,
    text: "Very professional and quick! Extremely detailed research and provided me with I wanted. I will hire you again! Thanks again.",
    link: "https://www.upwork.com/freelancers/kiranfatima",
  },
  {
    title: "Decision Maker Contact Info - Web Scraping",
    date: "Jul 2, 2025 - Jul 7, 2025",
    rating: 5,
    text: "Muhammad did a great job and we will be working again in the near future! Thanks Muhammad!",
    link: "https://www.upwork.com/freelancers/muhammadrizwan",
  },
  {
    title: "Need 500 Leads of Interior Designing Firms",
    date: "May 26, 2025 - May 26, 2025",
    rating: 5,
    text: "Muhammad was fast and Accurate! I will use his services again in the future!",
    link: "https://www.upwork.com/freelancers/muhammadrizwan",
  },
  {
    title: "PDF to Word Conversion with Minor Edits",
    date: "Apr 12, 2025 - Apr 13, 2025",
    rating: 5,
    text: "Excellent work! Muhammad converted the PDF to Word quickly and accurately. I was very pleased with the result",
    link: "https://www.upwork.com/freelancers/muhammadrizwan",
  },
  {
    title: "Convert 1-Page PDF Form to Fillable PDF",
    date: "Apr 4, 2025 - Apr 5, 2025",
    rating: 5,
    text: "Very pleased with the results",
    link: "https://www.upwork.com/freelancers/muhammadrizwan",
  },
  {
    title: "WordPress/WooCommerce Development",
    date: "Jun 4, 2024 - Nov 16, 2024",
    rating: 5,
    text: "Muhammad did a brilliant job, will hire him again for future projects!",
    link: "https://www.upwork.com/freelancers/muhammadrizwan",
  },
  {
    title: "Real Estate Skip Tracing/Lead Analysis",
    date: "Aug 18, 2023 - Jan 24, 2024",
    rating: 5,
    text: "Ali Raza exceeded expectations in the recent project. His dedication, attention to detail, and timely delivery showcased exceptional professionalism. He demonstrated strong problem-solving skills and maintained effective communication throughout.",
    link: "https://www.upwork.com/freelancers/alirazabukhari",
  },
  {
    title: "LinkedIn + Email B2B appointment setting",
    date: "Sep 15, 2023 - Sep 18, 2023",
    rating: 5,
    text: "Timely delivery, clear communication, and quality work. A rewarding freelance experience.",
    link: "https://www.upwork.com/freelancers/alirazabukhari",
  },
  {
    title: "VA Lead Generation Expert for Online Store",
    date: "Nov 9, 2022 - Nov 9, 2022",
    rating: 5,
    text: "Brilliant work very well, dedicated, responsible and up to the mark recommended on Upwork.",
    link: "https://www.upwork.com/freelancers/alirazabukhari",
  },
  {
    title: "Lead Generation Expert for List Building",
    date: "Oct 12, 2022 - Oct 13, 2022",
    rating: 5,
    text: "Great work. You can rely on this freelancer if you have urgent task. Thanks for your help. I will hire you soon for next projects.",
    link: "https://www.upwork.com/freelancers/alirazabukhari",
  },
  {
    title: "B2B Database For Manufacturer Companies",
    date: "Oct 12, 2022 - Oct 13, 2022",
    rating: 5,
    text: "Great freelancer! Perfect execution of the project. Fast, accurate and great communication throughout the project. I will definitely hire you again.",
    link: "https://www.upwork.com/freelancers/alirazabukhari",
  },
];

// Initialize reviews when Swiper is loaded
function initializeReviews() {
  const reviewsWrapper = document.getElementById("reviewsWrapper");
  if (!reviewsWrapper) return;

  reviewsWrapper.innerHTML = reviews
    .map((review) => {
      const stars = "★".repeat(review.rating);
      return `
        <div class="swiper-slide">
          <div class="review-card" onclick="window.open('${
            review.link
          }', '_blank')">
            <div class="review-top">
              <div class="upwork-badge">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18.561 13.158c-1.102 0-2.135-.467-3.074-1.227l.228-1.076.008-.042c.207-1.143.849-3.06 2.839-3.06 1.492 0 2.703 1.212 2.703 2.703-.001 1.489-1.212 2.702-2.704 2.702zm0-8.14c-2.539 0-4.51 1.649-5.31 4.366-1.22-1.834-2.148-4.036-2.687-5.892H7.828v7.112c-.002 1.406-1.141 2.546-2.547 2.548-1.405-.002-2.543-1.143-2.545-2.548V3.492H0v7.112c0 2.914 2.37 5.303 5.281 5.303 2.913 0 5.283-2.389 5.283-5.303v-1.19c.529 1.107 1.182 2.229 1.974 3.221l-1.673 7.873h2.797l1.213-5.71c1.063.679 2.285 1.109 3.686 1.109 3 0 5.439-2.452 5.439-5.45 0-3-2.439-5.439-5.439-5.439z"/>
                </svg>
                Upwork
              </div>
              <div class="review-date">${review.date}</div>
            </div>
            <div class="review-header">
              <h3 class="review-title">${review.title}</h3>
            </div>
            <div class="rating-stars">
              ${stars
                .split("")
                .map(() => '<span class="star">★</span>')
                .join("")}
            </div>
            <p class="review-text">${review.text}</p>
          </div>
        </div>
      `;
    })
    .join("");

  // Initialize Swiper
  new Swiper(".reviewsSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    rewind: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    speed: 600,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
    },
  });
}

// Initialize reviews on page load
window.addEventListener("load", () => {
  initializeReviews();
});

// Mobile menu functions
function toggleMobileNav(event) {
  const hamburger = event.target.closest(".hamburger");
  const mobileNav = document.getElementById("mobileNav");
  hamburger.classList.toggle("active");
  mobileNav.classList.toggle("active");
}

function closeMobileNav() {
  const hamburger = document.querySelector(".hamburger");
  const mobileNav = document.getElementById("mobileNav");
  if (hamburger && mobileNav) {
    hamburger.classList.remove("active");
    mobileNav.classList.remove("active");
  }
}

// Scroll header shadow
window.addEventListener("scroll", () => {
  const header = document.querySelector(".header-sticky");
  if (header) {
    if (window.scrollY > 0) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  }
});

// IntersectionObserver for reveal animations
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("revealed");
    }
  });
}, observerOptions);

document.querySelectorAll(".reveal-item").forEach((item) => {
  observer.observe(item);
});

// Form submission (only if form exists on current page)
document.addEventListener("DOMContentLoaded", () => {
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      // Let Web3Forms handle the submission
      // The form will submit normally to their API
    });
  }
});

// Team member data
const teamData = {
  maria: {
    name: "Maria Masood",
    role: "CEO & Founder",
    location: "Pakistan",
    avatar: "M",
    education: "Master of Philosophy - Quaid-e-Azam University",
    description:
      "CEO and Founder of ZA Solutions with a 100% Job Success Score and 13,000+ hours of successful project delivery across 120+ global projects. Expert in B2B lead generation, data management, and executive support with strategic focus on cold email strategies and verified list building.",
    socials: [
      { icon: "email", link: "mailto:mariamasood@zasolutions.co" },
      {
        icon: "linkedin",
        link: "https://www.linkedin.com/in/maria-masood-7a3530382/",
      },
      {
        icon: "upwork",
        link: "https://www.upwork.com/freelancers/mariamasood",
      },
    ],
  },
  ali: {
    name: "Ali Raza Bukhari",
    role: "Co-Founder & Director of Data Operations",
    location: "Pakistan",
    avatar: "A",
    education: "N/A",
    description:
      "4 years of experience establishing high standards of data integrity and operational reliability. Oversees B2B prospecting methodologies, CRM management, and ensures foundational data accuracy for successful client campaigns.",
    socials: [
      { icon: "email", link: "mailto:alirazabukhari@zasolutions.co" },
      {
        icon: "linkedin",
        link: "https://www.linkedin.com/in/ali-raza-bukhari-366b0257/",
      },
    ],
  },
  ayesha: {
    name: "Ayesha Akhtar",
    role: "Senior Specialist, Data Accuracy & Research",
    location: "Australia",
    avatar: "A",
    skills: [
      "99% Email Deliverability",
      "100% Data Accuracy",
      "CRM Management",
    ],
    education: "N/A",
    description:
      "3 years of experience delivering administrative and data solutions with remarkable precision. Specializes in lead generation with 99% email deliverability guarantee and 100% data accuracy. Expert in B2B lead generation and CRM data entry.",
    socials: [{ icon: "email", link: "mailto:ayeshaakhtar@zasolutions.co" }],
  },
  kiran: {
    name: "Kiran Fatima",
    role: "Senior Specialist, Data & Digital Outreach",
    location: "Pakistan",
    avatar: "K",
    skills: [
      "B2B Lead Generation",
      "Content Writing",
      "E-commerce Support",
    ],
    education: "N/A",
    description:
      "Top-Rated Freelancer recognized for consistent delivery of accurate and timely results. Expertise in B2B lead generation, data research, digital marketing support, content writing, and e-commerce operations.",
    socials: [{ icon: "email", link: "mailto:kiranfatima@zasolutions.co" }],
  },
  rizwan: {
    name: "Muhammad Rizwan Khan",
    role: "Senior Lead Generation & Data Verification Specialist",
    location: "United States",
    avatar: "M",
    skills: [
      "Zero-Bounce Email Verification",
      "Real Estate Leads",
      "E-commerce Data",
    ],
    education: "N/A",
    description:
      "3+ years of specialized experience in lead mining and data management. Expert in zero-bounce lead generation and CRM data management across major platforms including HubSpot, Salesforce, and Pipedrive.",
    socials: [],
  },
  hadia: {
    name: "Hadia Khan",
    role: "Client Liaison Director",
    location: "Pakistan",
    avatar: "H",
    skills: [
      "Strategic Account Management",
      "Client Advocacy",
      "Success Planning",
    ],
    education: "N/A",
    description:
      "Primary strategic link between ZA Solutions and valued clients. Focuses on building deep, long-term partnerships, strategic relationship cultivation, and ensuring client objectives are exceeded through dedicated account management.",
    socials: [{ icon: "email", link: "mailto:hadiakhan@zasolutions.co" }],
  },
  hanan: {
    name: "Hanan Rashid",
    role: "Client Liaison Officer",
    location: "Australia",
    avatar: "H",
    skills: [
      "Time Zone Coordination",
      "Project Communication",
      "Client Relations",
    ],
    education: "N/A",
    description:
      "Critical link ensuring seamless communication across time zones. Provides dedicated support during extended hours, bridging gaps between clients and operations with transparent project oversight.",
    socials: [
      { icon: "email", link: "mailto:hananrashid@zasolutions.co" },
      {
        icon: "linkedin",
        link: "https://www.linkedin.com/in/hanan-rashid-a28b5075/",
      },
    ],
  },
};

// Team modal functions
function openTeamModal(memberId) {
  const member = teamData[memberId];
  if (!member) return;

  document.getElementById("modalName").textContent = member.name;
  document.getElementById("modalRole").textContent = member.role;
  document.getElementById("modalLocation").textContent = member.location;
  document.getElementById("modalAvatar").textContent = member.avatar;
  document.getElementById("modalDescription").textContent = member.description;

  // Socials with proper icons
  const iconSVGs = {
    email:
      '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
    linkedin:
      '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>',
    upwork:
      '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.561 13.158c-1.102 0-2.135-.467-3.074-1.227l.228-1.076.008-.042c.207-1.143.849-3.06 2.839-3.06 1.492 0 2.703 1.212 2.703 2.703-.001 1.489-1.212 2.702-2.704 2.702zm0-8.14c-2.539 0-4.51 1.649-5.31 4.366-1.22-1.834-2.148-4.036-2.687-5.892H7.828v7.112c-.002 1.406-1.141 2.546-2.547 2.548-1.405-.002-2.543-1.143-2.545-2.548V3.492H0v7.112c0 2.914 2.37 5.303 5.281 5.303 2.913 0 5.283-2.389 5.283-5.303v-1.19c.529 1.107 1.182 2.229 1.974 3.221l-1.673 7.873h2.797l1.213-5.71c1.063.679 2.285 1.109 3.686 1.109 3 0 5.439-2.452 5.439-5.45 0-3-2.439-5.439-5.439-5.439z"/></svg>',
  };

  const socialsHTML = member.socials
    .map(
      (social) =>
        `<a href="${social.link}" target="_blank" class="social-icon-modal">${
          iconSVGs[social.icon]
        }</a>`
    )
    .join("");
  document.getElementById("modalSocials").innerHTML = socialsHTML;

  document.getElementById("teamModal").classList.remove("hidden");
  document.body.style.overflow = "hidden";
}

function closeTeamModal() {
  document.getElementById("teamModal").classList.add("hidden");
  document.body.style.overflow = "auto";
}