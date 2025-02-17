<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<style>
    /* Contact Us Page Styles */
.contact-container {
  display: flex;
  gap: 20px;
  margin-top: 20px;
}

.contact-form {
  flex: 1;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 0px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.contact-form h2,
.contact-map h2 {
  margin-bottom: 20px;
  font-size: 24px;
  color: #333;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #555;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 16px;
}

.form-group textarea {
  resize: vertical;
}

.submit-btn {
  background-color: #b00f15;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 0px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background-color: darkred;
}

.contact-map {
  flex: 1;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 0px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Responsive Design */
@media (max-width: 768px) {
  .contact-container {
    flex-direction: column;
  }

  .contact-form,
  .contact-map {
    width: 100%;
  }
}
</style>
<!-- Main Content Section -->
<main id="main-content">
  <!-- Content for Contact Us -->
  <div id="contact-us" class="content-section active">
    <h1>Contact Us</h1>
    <p>Get in touch with us for any inquiries or feedback. We'd love to hear from you!</p>

    <!-- Contact Form and Map Container -->
    <div class="contact-container">
      <!-- Contact Form -->
      <div class="contact-form">
        <h2>Send Us a Message</h2>
        <form action="submit_contact.php" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="submit-btn">Send Message</button>
        </form>
      </div>

      <!-- Embedded Google Map -->
      <div class="contact-map">
        <h2>Our Location</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093747!2d144.9537353153166!3d-37.816279742021665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d6a32f4c0c8!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1622549402991!5m2!1sen!2sus"
          width="100%"
          height="400"
          style="border:0;"
          allowfullscreen=""
          loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>