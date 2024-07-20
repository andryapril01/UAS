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
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="das.css">
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
            <h1 class="artis-h1">Wedding Aries</h1>
            <p class="description">Selamat Datang di Website Kami Jika Anda Tertarik Silahkan Klik Home Untuk Melihat Apa Saja Yang Bisa Kami Bantu dan Kalian Dapatkan Jika Kalian Berminat</p>
            <!-- Button Home di bagian bawah -->
            <div class="home-button-container">
                <a href="home.php" class="home-button">Home</a>
            </div>
        </div>

        

        
    </div>
    
    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->

    <script src="script.js"></script>
</body>
</html>
