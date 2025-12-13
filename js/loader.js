// Load HTML components
async function loadComponent(id, file) {
  try {
    const response = await fetch(file);
    const html = await response.text();
    document.getElementById(id).innerHTML = html;
  } catch (error) {
    console.error(`Error loading ${file}:`, error);
  }
}

// Load all components on page load
document.addEventListener('DOMContentLoaded', async function() {
  // Load header, footer, and modal
  await loadComponent('header-placeholder', './components/header.html');
  await loadComponent('footer-placeholder', './components/footer.html');
  await loadComponent('modal-placeholder', './components/team-modal.html');
  
  // Load the correct page based on URL
  loadPageFromURL();
});

// Load page based on URL path
async function loadPageFromURL() {
  const path = window.location.pathname.slice(1) || 'home';
  const validPages = ['home', 'about', 'services', 'team', 'contact'];
  const page = validPages.includes(path) ? path : 'home';
  
  await loadComponent('page-content', `./pages/${page}.html`);
  
  // Initialize page-specific scripts
  if (typeof initializePage === 'function') {
    initializePage(page);
  }
}

// Update showPage function to work with new structure
window.showPage = async function(pageId) {
  await loadComponent('page-content', `./pages/${pageId}.html`);
  
  // Update URL without reload
  const newUrl = pageId === 'home' ? '/' : `/${pageId}`;
  history.pushState({ page: pageId }, '', newUrl);
  
  // Update active nav links
  updateActiveNavLinks(pageId);
  
  window.scrollTo(0, 0);
  closeMobileNav();
  
  // Initialize page-specific features
  if (pageId === 'home' && typeof initializeReviews === 'function') {
    initializeReviews();
  }
};

// Handle browser back/forward
window.addEventListener('popstate', () => {
  loadPageFromURL();
});