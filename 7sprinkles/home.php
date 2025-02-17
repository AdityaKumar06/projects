<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* Home Page Styles */
    #home {
        position: relative;
        height: 100vh; /* Full viewport height */
        overflow: hidden;
    }

    .home-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('pizza-background.jpg'); /* Replace with your image */
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .welcome-message {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
        padding: 20px 40px;
        border-radius: 0px;
        animation: fadeIn 2s ease-in-out;
    }

    .welcome-message h1 {
        font-size: 48px;
        color: white;
        margin: 0;
    }

    .auth-buttons {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        gap: 10px;
    }

    .auth-button {
        background-color: #b00f15;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 0px;
        font-size: 16px;
        font-weight: bold;
        transition: transform 0.3s ease, background-color 0.3s ease;
        animation: slideIn 1s ease-in-out;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px; /* Space between icon and text */
    }

    .auth-button:hover {
        background-color: darkred;
        transform: scale(1.1);
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .modal-content {
        background-color: #b00f15; /* Red background */
        padding: 40px; /* Increased padding for larger size */
        width: 400px; /* Increased width */
        text-align: center;
        position: relative;
        border-radius: 0; /* No border radius */
        color: white; /* White text color */
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
        color: white; /* White close button */
    }

    .modal-content h2 {
        margin-bottom: 20px;
        color: white; /* White heading */
    }

    .modal-content input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 0; /* No border radius */
        background-color: white; /* White input background */
        color: black; /* Black text for inputs */
    }

    .modal-content button {
        background-color: white; /* White button background */
        color: #b00f15; /* Red text for button */
        padding: 10px 20px;
        border: none;
        border-radius: 0; /* No border radius */
        cursor: pointer;
        font-weight: bold;
        margin-top: 10px;
    }

    .modal-content button:hover {
        background-color: #f0f0f0; /* Light gray on hover */
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

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

<!-- Main Content Section -->
<main id="main-content">
    <!-- Content for Home -->
    <div id="home" class="content-section active">
        <!-- Background Image -->
        <div class="home-background">
            <!-- Welcome Message -->
            <div class="welcome-message">
                <h1>Welcome to Pizza Bank</h1>
            </div>

            <!-- Sign In / Sign Up Buttons -->
            <div class="auth-buttons">
                <a href="#" class="auth-button" id="signInButton">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </a>
                <a href="#" class="auth-button" id="signUpButton">
                    <i class="fas fa-user-plus"></i> Sign Up
                </a>
            </div>
        </div>
    </div>
</main>

<!-- Sign In Modal -->
<div id="signInModal" class="modal">
    <div class="modal-content">
        <span class="close-button" id="closeSignIn">&times;</span>
        <h2>Sign In</h2>
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button>Sign In</button>
    </div>
</div>

<!-- Sign Up Modal -->
<div id="signUpModal" class="modal">
    <div class="modal-content">
        <span class="close-button" id="closeSignUp">&times;</span>
        <h2>Sign Up</h2>
        <input type="text" placeholder="Username">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Sign Up</button>
    </div>
</div>


<script>
    // Get the modal elements
    const signInModal = document.getElementById('signInModal');
    const signUpModal = document.getElementById('signUpModal');

    // Get the buttons that open the modals
    const signInButton = document.getElementById('signInButton');
    const signUpButton = document.getElementById('signUpButton');

    // Get the elements that close the modals
    const closeSignIn = document.getElementById('closeSignIn');
    const closeSignUp = document.getElementById('closeSignUp');

    // When the user clicks the Sign In button, open the Sign In modal
    signInButton.onclick = function() {
        signInModal.style.display = 'flex';
    }

    // When the user clicks the Sign Up button, open the Sign Up modal
    signUpButton.onclick = function() {
        signUpModal.style.display = 'flex';
    }

    // When the user clicks on the close button, close the Sign In modal
    closeSignIn.onclick = function() {
        signInModal.style.display = 'none';
    }

    // When the user clicks on the close button, close the Sign Up modal
    closeSignUp.onclick = function() {
        signUpModal.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == signInModal) {
            signInModal.style.display = 'none';
        }
        if (event.target == signUpModal) {
            signUpModal.style.display = 'none';
        }
    }
</script>
<?php include 'footer.php'; ?>