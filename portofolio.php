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
    <title>Portfolio - Wedding Management</title>
    <link rel="stylesheet" href="portofolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <section class="header">
            <a href="home.php" class="logo">Wedding.</a>
        
            <nav class="navbar">    
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="portofolio.php">Portfolio</a>
                <a href="pricing.php">Pricing</a>
                <a href="contact.php">Contact</a>
            </nav>

            <form method="post" action="" style="display: inline;">
                <button type="submit" name="logout" class="logout-btn">Logout</button>
            </form>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>  

        <div class="center-container">
            <h1 class="artis-h1">Portfolio</h1>
            <p class="description">Check out our past weddings and events.</p>
            
            <div class="image-gallery">
                <div class="gallery-item">
                    <img src="portofolio/p1.jpg" alt="Wedding 1">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/p2.jpg" alt="Wedding 2">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/p3.jpg" alt="Wedding 3">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/p4.jpg" alt="Wedding 4">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/p5.jpg" alt="Wedding 5">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/p6.jpg" alt="Wedding 6">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/7.jpg" alt="Wedding 7">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/8.jpg" alt="Wedding 8">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/9.jpg" alt="Wedding 9">
                </div>
                <div class="gallery-item">
                    <img src="portofolio/10.jpg" alt="Wedding 10">
                </div>
                <!-- Add more gallery items as needed -->
            </div>
            
            <!-- Button Home di bagian bawah -->
            <div class="home-button-container">
                <a href="pricing.php" class="home-button">Pricing</a>
            </div>
        </div>
    </div>
    
    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->

    <script src="script.js"></script>
</body>
</html>
