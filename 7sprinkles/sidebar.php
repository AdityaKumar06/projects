<!-- sidebar.php -->
 <!-- <style>

  .sidebar {
            width: 250px;
            background-color: #222;
            color: white;
            padding: 20px;
            min-height: 100%;
            position: fixed;
         
            left: 0;
           
          
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
           
            width: 100%;
            
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 15px 20px;
          
            background-color: #333;
            border-radius: 0px;
            transition: background-color 0.3s ease;
            display: block;
        
            text-align: center;
          
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: #b00f15;
        }

       
        main {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
           
        }
 </style> -->
<aside class="sidebar">
  <!-- Logo placed at the top of the sidebar -->
  <div class="sidebar-logo">
    <a href="#">
      <img src="your-logo.png" alt="Sidebar Logo">
    </a>
  </div>
  <!-- Vertical menu options -->
  <ul class="sidebar-menu">
    <li><a href="home.php" <?php if (basename($_SERVER['PHP_SELF']) == 'home.php') echo 'class="active"'; ?>>Home</a></li>
    <li><a href="location.php" <?php if (basename($_SERVER['PHP_SELF']) == 'location.php') echo 'class="active"'; ?>>Location</a></li>
    <li><a href="about-us.php" <?php if (basename($_SERVER['PHP_SELF']) == 'about-us.php') echo 'class="active"'; ?>>About Us</a></li>
    <li><a href="menu.php" <?php if (basename($_SERVER['PHP_SELF']) == 'menu.php') echo 'class="active"'; ?>>Menu</a></li>
    <li><a href="contact-us.php" <?php if (basename($_SERVER['PHP_SELF']) == 'contact-us.php') echo 'class="active"'; ?>>Contact Us</a></li>
    <li><a href="franchise.php" <?php if (basename($_SERVER['PHP_SELF']) == 'franchise.php') echo 'class="active"'; ?>>Franchise</a></li>
  </ul>
</aside>