<?php 
    session_start();
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Wedding Management</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <section class="header">
            <a href="home.php" class="logo">Wedding.</a>
        
            <nav class="navbar">    
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="portfolio.php">Portfolio</a>
                <a href="pricing.php">Pricing</a>
                <a href="contact.php" class="active">Contact</a>
            </nav>

            <form method="post" action="" style="display: inline;">
                <button type="submit" name="logout" class="logout-btn">Logout</button>
            </form>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>  

        <div class="center-container">
            <h1 class="artis-h1">Contact Us</h1>
            <p class="description">Get in touch with us for inquiries and more.</p>
            
            <!-- Contact Form -->
            <form action="#" method="POST" class="contact-form">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

        <!-- Back to Pricing Button -->
        <div class="home-button-container">
            <a href="dasboard.php" class="home-button">Back to Home</a>
        </div>
    </div>

    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->

    <script src="script.js"></script>
</body>
</html>
