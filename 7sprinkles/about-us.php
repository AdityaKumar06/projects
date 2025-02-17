<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<style>
    /* About Us Page Styles */
.about-container {
  display: flex;
  gap: 40px; /* Space between text and image */
  margin-top: 20px;
}

.about-text {
  flex: 2; /* Takes 2/3 of the space */
}

.about-text h2 {
  margin-top: 20px;
  font-size: 24px;
  color: #333;
}

.about-text p {
  margin-top: 10px;
  font-size: 16px;
  line-height: 1.6;
  color: #555;
}

.about-image {
  flex: 1; /* Takes 1/3 of the space */
  display: flex;
  align-items: center; /* Center the image vertically */
}

.about-image img {
  max-width: 100%;
  height: auto;
  border-radius: 0px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Responsive Design */
@media (max-width: 768px) {
  .about-container {
    flex-direction: column; /* Stack text and image vertically on mobile */
  }

  .about-text,
  .about-image {
    width: 100%;
  }

  .about-image {
    margin-top: 20px;
  }
}
</style>

<!-- Main Content Section -->
<main id="main-content">
  <!-- Content for About Us -->
  <div id="about-us" class="content-section active">
    <h1>About Us</h1>
    <p>Learn more about our history, mission, and the team behind our success.</p>

    <!-- About Us Content and Image -->
    <div class="about-container">
      <!-- Text Content -->
      <div class="about-text">
        <h2>Our Story</h2>
        <p>
          Founded in 2010, our company has been dedicated to providing high-quality products and services to our customers. 
          With a passion for innovation and a commitment to excellence, we have grown from a small startup to a trusted name 
          in the industry. Our mission is to make a positive impact on the world by delivering solutions that meet the needs 
          of our clients and communities.
        </p>
        <h2>Our Mission</h2>
        <p>
          Our mission is to empower individuals and businesses through cutting-edge technology and exceptional customer service. 
          We believe in building long-lasting relationships with our clients by understanding their needs and delivering tailored 
          solutions that drive success.
        </p>
        <h2>Our Team</h2>
        <p>
          Our team is made up of passionate professionals who bring diverse skills and expertise to the table. From developers 
          and designers to marketers and support staff, we work together to achieve our goals and deliver outstanding results.
        </p>
      </div>

      <!-- Image -->
      <div class="about-image">
        <img src="about-us-image.jpg" alt="About Us Image">
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>