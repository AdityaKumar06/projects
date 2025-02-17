<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<style>
    /* Location Page Styles */
.location-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive grid */
  gap: 20px; /* Space between cards */
  margin-top: 20px;
}

.location-card {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.location-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.location-card h2 {
  margin-bottom: 15px;
  font-size: 22px;
  color: #333;
}

.location-card p {
  margin: 10px 0;
  font-size: 16px;
  color: #555;
}

.location-card .map-link {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 20px;
  background-color: #b00f15;
  color: white;
  text-decoration: none;
  border-radius: 0px;
  transition: background-color 0.3s ease;
}

.location-card .map-link:hover {
  background-color: darkred;
}

/* Responsive Design */
@media (max-width: 768px) {
  .location-grid {
    grid-template-columns: 1fr; /* Single column on mobile */
  }
}
</style>

<!-- Main Content Section -->
<main id="main-content">
  <!-- Content for Location -->
  <div id="location" class="content-section active">
    <h1>Our Locations</h1>
    <p>Find our branches near you. We are expanding and would love to serve you better.</p>

    <!-- Location Grid -->
    <div class="location-grid">
      <!-- Location 1 -->
      <div class="location-card">
        <h2>New York City</h2>
        <p><strong>Address:</strong> 123 Main Street, New York, NY 10001</p>
        <p><strong>Phone:</strong> +1 (212) 555-1234</p>
        <a href="https://maps.google.com/?q=123+Main+Street+New+York+NY+10001" target="_blank" class="map-link">View on Map</a>
      </div>

      <!-- Location 2 -->
      <div class="location-card">
        <h2>Los Angeles</h2>
        <p><strong>Address:</strong> 456 Sunset Boulevard, Los Angeles, CA 90001</p>
        <p><strong>Phone:</strong> +1 (213) 555-5678</p>
        <a href="https://maps.google.com/?q=456+Sunset+Boulevard+Los+Angeles+CA+90001" target="_blank" class="map-link">View on Map</a>
      </div>

      <!-- Location 3 -->
      <div class="location-card">
        <h2>Chicago</h2>
        <p><strong>Address:</strong> 789 Lake Shore Drive, Chicago, IL 60601</p>
        <p><strong>Phone:</strong> +1 (312) 555-9101</p>
        <a href="https://maps.google.com/?q=789+Lake+Shore+Drive+Chicago+IL+60601" target="_blank" class="map-link">View on Map</a>
      </div>

      <!-- Location 4 -->
      <div class="location-card">
        <h2>Miami</h2>
        <p><strong>Address:</strong> 101 Ocean Drive, Miami, FL 33101</p>
        <p><strong>Phone:</strong> +1 (305) 555-1122</p>
        <a href="https://maps.google.com/?q=101+Ocean+Drive+Miami+FL+33101" target="_blank" class="map-link">View on Map</a>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>