<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- SEO: Dynamic Title per Page -->
  <title><?php echo $pageTitle ?? 'ZA Solutions - Data Intelligence & Operations'; ?></title>
  
  <!-- SEO: Dynamic Meta Description per Page -->
  <meta name="description" content="<?php echo $metaDescription ?? 'ZA Solutions provides expert data intelligence and operations services to help businesses make data-driven decisions.'; ?>" />
  
  <!-- SEO: Keywords -->
  <meta name="keywords" content="<?php echo $keywords ?? 'data intelligence, business operations, lead generation, data entry, ZA Solutions'; ?>" />
  
  <!-- Open Graph for Social Media -->
  <meta property="og:title" content="<?php echo $pageTitle ?? 'ZA Solutions'; ?>" />
  <meta property="og:description" content="<?php echo $metaDescription ?? 'Data Intelligence & Operations'; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $canonicalUrl ?? 'https://www.zasolutions.com'; ?>" />
  <meta property="og:image" content="https://www.zasolutions.com/public/image.png" />
  
  <!-- SEO: Canonical URL -->
  <link rel="canonical" href="<?php echo $canonicalUrl ?? 'https://www.zasolutions.com'; ?>" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="./public/fav.png" />
  
  <!-- Stylesheets -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
  
  <!-- Header -->
  <header class="header-sticky">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between relative" role="navigation">
      <a href="index.php" class="flex items-center gap-3 z-10" aria-label="ZA Solutions Home">
        <img src="./public/image.png" alt="ZA Solutions Logo" class="logo-img" />
      </a>

      <div class="desktop-nav hidden md:flex items-center gap-8">
        <a href="index.php" class="nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">Home</a>
        <a href="about.php" class="nav-link <?php echo ($activePage == 'about') ? 'active' : ''; ?>">About</a>
        <a href="services.php" class="nav-link <?php echo ($activePage == 'services') ? 'active' : ''; ?>">Services</a>
        <a href="team.php" class="nav-link <?php echo ($activePage == 'team') ? 'active' : ''; ?>">Team</a>
        <a href="contact.php" class="nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
      </div>

      <a href="contact.php" class="btn-primary hidden md:block">Get Started</a>

      <button class="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobileNav" onclick="toggleMobileNav(event)">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </nav>

    <div class="mobile-nav" id="mobileNav">
      <a href="index.php" class="nav-link" onclick="closeMobileNav();">Home</a>
      <a href="about.php" class="nav-link" onclick="closeMobileNav();">About</a>
      <a href="services.php" class="nav-link" onclick="closeMobileNav();">Services</a>
      <a href="team.php" class="nav-link" onclick="closeMobileNav();">Team</a>
      <a href="contact.php" class="nav-link" onclick="closeMobileNav();">Contact</a>
    </div>
  </header>

  <!-- Main Content Starts Below -->