<!-- Footer Section -->
 <style>
  /* Footer Styles */
footer {
  background-color: black;
  color: white;
  padding: 40px 20px;
  font-family: "Louda", Arial, sans-serif;
  margin-left: 250px; /* Match sidebar width */
  width: calc(100% - 250px); /* Adjust width to account for sidebar */
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-section {
  flex: 1;
  min-width: 200px;
  margin-bottom: 20px;
}

.footer-section h3 {
  font-size: 20px;
  margin-bottom: 15px;
  color: #b00f15;
}

.footer-section p {
  font-size: 14px;
  margin: 10px 0;
  display: flex;
  align-items: center;
}

.footer-section p i {
  margin-right: 10px;
  color: #b00f15;
}

.social-icons {
  display: flex;
  gap: 15px;
}

.social-icons a {
  color: white;
  font-size: 20px;
  transition: color 0.3s ease;
}

.social-icons a:hover {
  color: #b00f15;
}

.opening-hours {
  list-style: none;
  padding: 0;
  margin: 0;
}

.opening-hours li {
  font-size: 14px;
  margin: 10px 0;
  display: flex;
  align-items: center;
}

.opening-hours li i {
  margin-right: 10px;
  color: #b00f15;
}

.footer-image {
  width: 150px; /* Adjust size as needed */
  height: 150px; /* Make it square */
  object-fit: cover; /* Ensure the image fits well */
  border-radius: 10px; /* Optional: Add rounded corners */
}

.footer-bottom {
  text-align: center;
  margin-top: 20px;
  padding-top: 20px;
  border-top: 1px solid #444;
  font-size: 14px;
}

/* Responsive Design */
@media (max-width: 768px) {
  footer {
    margin-left: 0; /* Remove sidebar margin on mobile */
    width: 100%; /* Full width on mobile */
  }

  .footer-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .footer-section p {
    justify-content: center;
  }

  .social-icons {
    justify-content: center;
  }

  .footer-image {
    margin-top: 20px; /* Add space above the image on mobile */
  }
}
 </style>
<footer>
  <div class="footer-container">
    <!-- Contact Information -->
    <div class="footer-section">
      <h3>Contact Us</h3>
      <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, City, Country</p>
      <p><i class="fas fa-phone"></i> +1 (123) 456-7890</p>
      <p><i class="fas fa-envelope"></i> info@restaurant.com</p>
    </div>

    <!-- Opening Hours -->
    <div class="footer-section">
      <h3>Opening Hours</h3>
      <ul class="opening-hours">
        <li><i class="fas fa-clock"></i> Monday: 12:00 AM - 2:00 PM</li>
        <li><i class="fas fa-clock"></i> Tuesday: 12:00 AM - 2:00 PM</li>
        <li><i class="fas fa-clock"></i> Wednesday: 12:00 AM - 2:00 PM</li>
        <li><i class="fas fa-clock"></i> Thursday: 12:00 AM - 2:00 PM</li>
        <li><i class="fas fa-clock"></i> Friday: 12:00 AM - 2:00 PM</li>
        <li><i class="fas fa-clock"></i> Saturday: 12:00 AM - 4:00 AM</li>
        <li><i class="fas fa-clock"></i> Sunday: 12:00 AM - 4:00 AM</li>
      </ul>
    </div>

    <!-- Social Media -->
    <div class="footer-section">
      <h3>Follow Us</h3>
      <div class="social-icons">
        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- Square Image -->
    <div class="footer-section">
      <img src="footer-image.jpg" alt="Footer Image" class="footer-image">
    </div>
  </div>

  <!-- Copyright Notice -->
  <div class="footer-bottom">
    <p>&copy; 2023 Restaurant Name. All Rights Reserved.</p>
  </div>
</footer>