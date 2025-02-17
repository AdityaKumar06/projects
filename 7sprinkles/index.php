<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Layout with Dynamic Main Content</title>
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Global Reset */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    /* Fixed Header Styles */
    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 100px;
      background-color: black;
      border-bottom: 1px solid white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      z-index: 1000;
    }
    /* Header Left: Hamburger + Logo */
    .header-left {
      display: flex;
      align-items: center;
    }
    /* Hamburger Icon (visible on mobile) */
    .hamburger {
      display: none;
      font-size: 28px;
      margin-right: 15px;
      cursor: pointer;
      color: white;
    }
    /* Header Logo */
    .logo img {
      height: 80px;
      width: auto;
    }
    
    /* Social Icons on Right */
    .social-icons a {
      color: white;
      font-size: 20px;
      margin-left: 15px;
      text-decoration: none;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    .social-icons a:hover {
      transform: scale(1.2);
      color: #ccc;
    }
    
    /* Desktop Navbar */
    nav.navbar {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: black;
      height: 60px;
      margin-top: 100px; /* pushes navbar below fixed header */
    }
    nav.navbar a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    nav.navbar a:hover {
      background-color: #444;
    }
    nav.navbar a.active {
      background-color: red;
    }
    
    /* Mobile Styles */
    @media (max-width: 768px) {
      /* Show hamburger icon */
      .hamburger {
        display: block;
      }
      /* Hide desktop navbar by default on mobile */
      nav.navbar {
        display: none;
        flex-direction: column;
        align-items: stretch;
        position: fixed;
        top: 317px; /* adjust as needed */
        left: 0;
        right: 0;
        background-color: black;
        z-index: 999;
        margin: 0;
        padding: 0;
      }
      /* Display mobile navbar when toggled */
      nav.navbar.show {
        display: flex;
      }
      nav.navbar a {
        margin: 0;
        padding: 15px 20px;
        border-bottom: 1px solid #444;
        text-align: center;
        background-color: black;
        width: 100%;
      }
      nav.navbar a:hover {
        background-color: red;
      }
      /* Sidebar: stack content for mobile */
      .content-wrapper {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
        min-height: auto;
      }
    }
    
    /* Content Wrapper: Contains Sidebar and Main Content */
    .content-wrapper {
      display: flex;
    }
    
    /* Sidebar Styles */
    .sidebar {
      width: 250px;
      background-color: #222;
      color: white;
      padding: 20px;
      min-height: calc(100vh - 160px);
      display: flex;
      flex-direction: column;
      justify-content: center; /* Vertically center the sidebar content */
      align-items: center; /* Horizontally center the sidebar content */
      gap: 20px;
    }
    .sidebar-logo img {
      max-width: 100%;
      height: auto;
    }
    .sidebar-menu {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 20px; /* Increased gap between menu items */
      width: 100%; /* Ensure the menu takes full width */
    }
    .sidebar-menu li a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      padding: 15px 20px; /* Increased padding for better spacing */
      background-color: #333;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      display: block; /* Ensure the link takes full width */
      text-align: center; /* Center the text */
    }
    .sidebar-menu li a:hover,
    .sidebar-menu li a.active {
      background-color: red;
    }
    
    /* Main Content Styles */
    main {
      flex: 1;
      padding: 20px;
    }
    /* Content Sections in Main */
    .content-section {
      display: none;
    }
    .content-section.active {
      display: block;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="header-left">
      <!-- Hamburger icon (visible on mobile) -->
      <span class="hamburger" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
      </span>
      <!-- Logo in Header -->
      <a href="#" class="logo">
        <img src="your-logo.png" alt="Header Logo">
      </a>
    </div>
    <div class="social-icons">
      <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </header>
  
  <!-- Navbar Section -->
  <nav class="navbar" id="navbar">
    <a href="#" class="active" onclick="setActive(this)">Option 1</a>
    <a href="#" onclick="setActive(this)">Option 2</a>
    <a href="#" onclick="setActive(this)">Option 3</a>
    <a href="#" onclick="setActive(this)">Option 4</a>
    <a href="#" onclick="setActive(this)">Option 5</a>
    <a href="#" onclick="setActive(this)">Option 6</a>
    <a href="#" onclick="setActive(this)">Option 7</a>
    <a href="#" onclick="setActive(this)">Option 8</a>
    <a href="#" onclick="setActive(this)">Option 9</a>
    <a href="#" onclick="setActive(this)">Option 10</a>
  </nav>
  
  <!-- Content Wrapper: Sidebar and Main Content -->
  <div class="content-wrapper">
    <!-- Sidebar Section -->
    <aside class="sidebar">
      <!-- Logo placed at the top of the sidebar -->
      <div class="sidebar-logo">
        <a href="#">
          <img src="your-logo.png" alt="Sidebar Logo">
        </a>
      </div>
      <!-- Vertical menu options -->
      <ul class="sidebar-menu">
        <li><a href="#" data-content="home" onclick="showContent(event, 'home')">Home</a></li>
        <li><a href="#" data-content="location" onclick="showContent(event, 'location')">Location</a></li>
        <li><a href="#" data-content="about-us" onclick="showContent(event, 'about-us')">About Us</a></li>
        <li><a href="#" data-content="menu" onclick="showContent(event, 'menu')">Menu</a></li>
        <li><a href="#" data-content="contact-us" onclick="showContent(event, 'contact-us')">Contact Us</a></li>
        <li><a href="#" data-content="franchise" onclick="showContent(event, 'franchise')">Franchise</a></li>
      </ul>
    </aside>
    
    <!-- Main Content Section -->
    <main id="main-content">
      <!-- Content for Home -->
      <div id="home" class="content-section active">
        <h1>Welcome to Our Website</h1>
        <p>This is the home section. Here you can find an overview of our services and offerings.</p>
      </div>
      <!-- Content for Location -->
      <div id="location" class="content-section">
        <h1>Our Locations</h1>
        <p>Find our branches near you. We are expanding and would love to serve you better.</p>
      </div>
      <!-- Content for About Us -->
      <div id="about-us" class="content-section">
        <h1>About Us</h1>
        <p>Learn more about our history, mission, and the team behind our success.</p>
      </div>
      <!-- Content for Menu -->
      <div id="menu" class="content-section">
        <h1>Our Menu</h1>
        <p>Explore our delicious offerings and find your next favorite dish.</p>
      </div>
      <!-- Content for Contact Us -->
      <div id="contact-us" class="content-section">
        <h1>Contact Us</h1>
        <p>Get in touch with us for any inquiries or feedback. We'd love to hear from you!</p>
      </div>
      <!-- Content for Franchise -->
      <div id="franchise" class="content-section">
        <h1>Franchise Opportunities</h1>
        <p>Interested in joining our family? Learn more about our franchise opportunities.</p>
      </div>
    </main>
  </div>
  
  <script>
    // Toggle the mobile navbar menu
    function toggleMenu() {
      document.getElementById('navbar').classList.toggle('show');
    }
    // Set active state on clicked navbar menu item
    function setActive(element) {
      var links = document.querySelectorAll('nav.navbar a');
      links.forEach(function(link) {
        link.classList.remove('active');
      });
      element.classList.add('active');
    }
    // Show content in main area based on sidebar option clicked
    function showContent(event, optionId) {
      event.preventDefault();
      // Hide all content sections
      var sections = document.querySelectorAll('.content-section');
      sections.forEach(function(section) {
        section.classList.remove('active');
      });
      // Show the selected content section
      var activeSection = document.getElementById(optionId);
      if (activeSection) {
        activeSection.classList.add('active');
      }
      // Update active state on sidebar menu items
      var sidebarLinks = document.querySelectorAll('.sidebar-menu a');
      sidebarLinks.forEach(function(link) {
        link.classList.remove('active');
      });
      event.currentTarget.classList.add('active');
    }
  </script>
</body>
</html>