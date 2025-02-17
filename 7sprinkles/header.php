<!-- header.php -->
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
        @font-face {
            font-family: "Louda";
            src: url("https://popmenucloud.com/ltmdpewo/7b562703-101f-45ae-b97a-19f673c0649b.otf");
            font-display: swap;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Louda";

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
        /* Fixed Navbar Styles */
        nav.navbar {
            position: fixed;
            top: 100px;
            /* Adjust based on header height */
            left: 0;
            right: 0;
            z-index: 1000;
            /* Ensure it stays above other content */
            background-color: black;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
        }

        /* Adjust main content margin to account for fixed navbar */
        main {
            margin-top: 160px;
            /* Header height (100px) + Navbar height (60px) */
        }

        nav.navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 20px;
            border-radius: 0px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        nav.navbar a:hover {
            background-color: #444;
        }

        nav.navbar a.active {
            background-color: #b00f15;
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
                top: 317px;
                /* adjust as needed */
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
                background-color: #b00f15;
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
            margin-top: 160px;
            /* Adjust based on header and navbar height */
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: black;
            color: white;
            padding: 20px;
            min-height: calc(100vh - 160px);
            position: fixed;
            /* Fix sidebar to the left */
            left: 0;
            top: 160px;
            /* Adjust based on header and navbar height */
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
            gap: 20px;
            /* Increased gap between menu items */
            width: 100%;
            /* Ensure the menu takes full width */
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 15px 20px;
            /* Increased padding for better spacing */
            background-color: #333;
            border-radius: 0px;
            transition: background-color 0.3s ease;
            display: block;
            /* Ensure the link takes full width */
            text-align: center;
            /* Center the text */
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: #b00f15;
        }

        /* Main Content Styles */
        main {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            /* Push main content to the right of the sidebar */
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
                top: 317px;
                /* adjust as needed */
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
                background-color: #b00f15;
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
            justify-content: center;
            /* Vertically center the sidebar content */
            align-items: center;
            /* Horizontally center the sidebar content */
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
            gap: 20px;
            /* Increased gap between menu items */
            width: 100%;
            /* Ensure the menu takes full width */
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 15px 20px;
            /* Increased padding for better spacing */
            background-color: #333;
            border-radius: 0px;
            transition: background-color 0.3s ease;
            display: block;
            /* Ensure the link takes full width */
            text-align: center;
            /* Center the text */
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: #b00f15;
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

        html {
            scroll-behavior: smooth;
        }

        /* Smooth Scroll Behavior */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 180px;
            /* Header height (100px) + Navbar height (60px) */
        }

        /* Header Right Section */
        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
            /* Space between social icons, separator, and email */
        }

        /* Separator */
        .separator {
            width: 1px;
            height: 30px;
            background-color: white;
            margin: 0 10px;
        }

        /* Email Address */
        .email a {
            color: #b00f15;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .email a:hover {
            color: #ccc;
            /* Light gray on hover */
        }

        /* Daily Timings */
        .timings {
            color: #b00f15;
            font-size: 16px;
            font-weight: bold;
            margin-left: 20px;
            /* Space between logo and timings */
            white-space: nowrap;
            /* Prevent text from wrapping */
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <!-- Header Section -->
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
            <!-- Daily Timings -->
            <div class="timings">
                Daily: 12:00 noon to 4:00 am
            </div>
        </div>
        <div class="header-right">
            <div class="social-icons">
                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <!-- Separator -->
            <div class="separator"></div>
            <!-- Email Address -->
            <div class="email">
                <a href="mailto:info@example.com">info@example.com</a>
            </div>
        </div>
    </header>>

    <!-- Navbar Section -->
    <nav class="navbar" id="navbar">
        <a href="#pizzas" class="active" onclick="setActive(this)">Pizzas</a>
        <a href="#pastas" onclick="setActive(this)">Pastas</a>
        <a href="#desserts" onclick="setActive(this)">Desserts</a>
    </nav>

    <script>
        function setActive(element) {

            const links = document.querySelectorAll('.navbar a');
            links.forEach(link => link.classList.remove('active'));


            element.classList.add('active');


            const anchor = element.getAttribute('href');


            if (!window.location.href.includes('menu.php')) {

                window.location.href = "menu.php" + anchor;
            } else {

                const targetSection = document.querySelector(anchor);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        }

        function toggleMenu() {
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('show');
        }
    </script>