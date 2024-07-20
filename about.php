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
    <link rel="stylesheet" href="about.css">
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
            <h1 class="artis-h1">About </h1>
            <p class="description"> 
            Selamat datang di WeddingAries!

            Kami adalah tim yang berdedikasi untuk membuat momen pernikahan Anda menjadi tak terlupakan. Dengan pengalaman bertahun-tahun dalam industri ini, kami mengerti betapa pentingnya setiap detail untuk menciptakan pernikahan impian Anda.

            Di WeddingAries, kami percaya bahwa setiap pasangan memiliki cerita unik mereka sendiri, dan kami berkomitmen untuk menghadirkan pernikahan yang mencerminkan kepribadian dan visi Anda. Dari perencanaan hingga pelaksanaan, kami akan mendampingi setiap langkah perjalanan Anda dengan keahlian dan perhatian penuh.

            Kami tidak hanya menyediakan layanan perencanaan pernikahan yang komprehensif, tetapi juga menjaga setiap aspek agar sesuai dengan harapan Anda. Dengan sentuhan kreatif dan profesionalisme, kami akan mengubah impian pernikahan Anda menjadi kenyataan.

            Mari bersama-sama menciptakan momen yang indah dan tak terlupakan. Hubungi kami hari ini untuk memulai perjalanan menuju pernikahan yang sempurna.
            </p>
            <!-- Button Home di bagian bawah -->
            <div class="home-button-container">
                <a href="portofolio.php" class="home-button">Portofolio</a>
            </div>
        </div>

        

        
    </div>
    
    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->

    <script src="script.js"></script>
</body>
</html>
