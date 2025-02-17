<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
// Include the menu data
$menu = include 'menu-data.php';
?>
<style>
    /* Menu Page Styles */
#menu {
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center; /* Center the menu cards */
}

.menu-section {
  margin-bottom: 40px;
  width: 100%;
  max-width: 800px; /* Limit the width of the menu section */
}

.menu-section h2 {
  font-size: 28px;
  color: #333;
  margin-bottom: 20px;
  border-bottom: 2px solid #b00f15;
  padding-bottom: 10px;
}

.menu-card {
  display: flex;
  align-items: center;
  background-color: white;
  border-radius: 0px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  width: 100%; /* Full width of the container */
  max-width: 1000px; /* Reduce the width of the card */
  height: 200px; /* Increase the height of the card */
}

.menu-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.menu-card img {
  width: 150px;
  height: 100%; /* Make the image take full height of the card */
  object-fit: cover;
  border-radius: 10px 0 0 10px;
}

.menu-description {
  flex: 1;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center; /* Center the content vertically */
}

.menu-description h3 {
  font-size: 22px;
  color: #333;
  margin-bottom: 10px;
}

.menu-description p {
  font-size: 16px;
  color: #555;
  margin-bottom: 10px;
}

.menu-description .price {
  font-size: 18px;
  font-weight: bold;
  color: #b00f15;
}

.add-to-cart {
  background-color: #b00f15;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 0px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  margin-right: 20px;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.add-to-cart:hover {
  background-color: darkred;
  transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
  .menu-card {
    flex-direction: column;
    align-items: flex-start;
    height: auto; /* Allow height to adjust on mobile */
  }

  .menu-card img {
    width: 100%;
    height: 200px; /* Fixed height for the image on mobile */
    border-radius: 10px 10px 0 0;
  }

  .menu-description {
    padding: 15px;
  }

  .add-to-cart {
    width: 100%;
    margin: 0;
    border-radius: 0 0 10px 10px;
  }
}

/* Pop-up Box Styles */
.popup {
  display: none; /* Hidden by default */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
  z-index: 1000; /* Ensure it's on top */
  justify-content: center;
  align-items: center;
}

.popup-content {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  width: 90%;
  max-width: 500px;
  position: relative;
}

.close-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  cursor: pointer;
  color: #333;
}

.popup-body {
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
}

.popup-image {
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 10px;
}

.popup-description {
  flex: 1;
}

.popup-description h3 {
  font-size: 22px;
  color: #333;
  margin-bottom: 10px;
}

.popup-description p {
  font-size: 16px;
  color: #555;
  margin-bottom: 10px;
}

.popup-description .price {
  font-size: 18px;
  font-weight: bold;
  color: #b00f15;
}

.quantity-controls {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  margin-bottom: 20px;
}

.quantity-controls button {
  background-color: #b00f15;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.quantity-controls input {
  width: 50px;
  text-align: center;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 5px;
}

.add-btn {
  background-color: #b00f15;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  display: block;
  margin-left: auto; /* Align to the right */
}

.add-btn:hover {
  background-color: darkred;
}
</style>

<!-- Main Content Section -->
<main id="main-content">
  <div id="menu" class="content-section active">
    <h1>Our Menu</h1>
    <p>Explore our delicious offerings and find your next favorite dish.</p>

    <?php foreach ($menu as $section => $items): ?>
      <div class="menu-section" id="<?php echo $section; ?>">
        <h2><?php echo ucfirst($section); ?></h2>
        <?php foreach ($items as $item): ?>
          <div class="menu-card">
            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
            <div class="menu-description">
              <h3><?php echo $item['title']; ?></h3>
              <p><?php echo $item['description']; ?></p>
              <p class="price"><?php echo $item['price']; ?></p>
            </div>
            <button class="add-to-cart" 
                    data-image="<?php echo $item['image']; ?>" 
                    data-title="<?php echo $item['title']; ?>" 
                    data-description="<?php echo $item['description']; ?>" 
                    data-price="<?php echo $item['price']; ?>">
              Add to Cart
            </button>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- Pop-up Box -->
<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close-btn" onclick="closePopup()">&times;</span>
    <div class="popup-body">
      <img src="" alt="Item Image" class="popup-image">
      <div class="popup-description">
        <h3></h3>
        <p></p>
        <p class="price"></p>
      </div>
    </div>
    <div class="quantity-controls">
      <button onclick="decrementQuantity()">-</button>
      <input type="number" id="quantity" value="1" min="1">
      <button onclick="incrementQuantity()">+</button>
    </div>
    <button class="add-btn" onclick="addToCart()">Add</button>
  </div>
</div>
</main>

   <script>
// Function to show the pop-up
function showPopup(imageSrc, title, description, price) {
  const popup = document.getElementById('popup');
  const popupImage = popup.querySelector('.popup-image');
  const popupTitle = popup.querySelector('.popup-description h3');
  const popupDescription = popup.querySelector('.popup-description p');
  const popupPrice = popup.querySelector('.popup-description .price');

  // Update pop-up content
  popupImage.src = imageSrc;
  popupTitle.textContent = title;
  popupDescription.textContent = description;
  popupPrice.textContent = price;

  // Reset quantity to 1
  document.getElementById('quantity').value = 1;

  // Show the pop-up
  popup.style.display = 'flex';
}

// Function to close the pop-up
function closePopup() {
  const popup = document.getElementById('popup');
  popup.style.display = 'none';
}

// Function to increment quantity
function incrementQuantity() {
  const quantityInput = document.getElementById('quantity');
  quantityInput.value = parseInt(quantityInput.value) + 1;
}

// Function to decrement quantity
function decrementQuantity() {
  const quantityInput = document.getElementById('quantity');
  if (quantityInput.value > 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
}

// Function to handle "Add to Cart"
function addToCart() {
  const quantity = document.getElementById('quantity').value;
  const title = document.querySelector('.popup-description h3').textContent;
  const price = document.querySelector('.popup-description .price').textContent;

  alert(`Added ${quantity} x ${title} (${price}) to cart!`);
  closePopup();
}

// Event delegation for "Add to Cart" buttons
document.getElementById('menu').addEventListener('click', (event) => {
  if (event.target.classList.contains('add-to-cart')) {
    const button = event.target;
    const imageSrc = button.getAttribute('data-image');
    const title = button.getAttribute('data-title');
    const description = button.getAttribute('data-description');
    const price = button.getAttribute('data-price');

    showPopup(imageSrc, title, description, price);
  }
});

</script>
<?php include 'footer.php'; ?>