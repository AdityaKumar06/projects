<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<style>
    /* Franchise Page Styles */
#franchise {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh; /* Full viewport height */
  padding: 20px;
  background-color: #f5f5f5; /* Light background */
}

.franchise-header {
  text-align: center;
  margin-bottom: 40px;
  animation: fadeIn 1.5s ease-in-out;
}

.franchise-header h1 {
  font-size: 36px;
  color: #333;
  margin-bottom: 10px;
}

.franchise-header p {
  font-size: 18px;
  color: #555;
}

.franchise-form-container {
  max-width: 600px;
  width: 100%;
  padding: 30px;
  background-color: white;
  border-radius: 0px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  animation: slideUp 1s ease-in-out;
}

.franchise-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group label {
  font-size: 16px;
  font-weight: bold;
  color: #333;
  margin-bottom: 8px;
}

.form-group input,
.form-group textarea {
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 0px;
  font-size: 16px;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
  border-color: #b00f15;
  box-shadow: 0 0 8px rgba(255, 0, 0, 0.2);
  outline: none;
}

.form-group textarea {
  resize: vertical;
  min-height: 120px;
}

.submit-btn {
  background-color: #b00f15;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 0px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.submit-btn:hover {
  background-color: darkred;
  transform: translateY(-3px);
}

/* Animations */
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes slideUp {
  from {
    transform: translateY(20px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Responsive Design */
@media (max-width: 768px) {
  .franchise-header h1 {
    font-size: 28px;
  }

  .franchise-header p {
    font-size: 16px;
  }

  .franchise-form-container {
    padding: 20px;
  }

  .form-group label {
    font-size: 14px;
  }

  .form-group input,
  .form-group textarea {
    font-size: 14px;
  }

  .submit-btn {
    font-size: 14px;
  }
}
</style>

<!-- Main Content Section -->
<main id="main-content">
  <!-- Content for Franchise -->
  <div id="franchise" class="content-section active">
    <div class="franchise-header">
      <h1>Franchise Opportunities</h1>
      <p>Interested in joining our family? Learn more about our franchise opportunities.</p>
    </div>

    <!-- Franchise Enquiry Form -->
    <div class="franchise-form-container">
      <form action="submit_franchise.php" method="POST" class="franchise-form">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="location">Preferred Location:</label>
          <input type="text" id="location" name="location" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Submit Enquiry</button>
      </form>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>