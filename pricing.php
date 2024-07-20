<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - Wedding Packages</title>
    <link rel="stylesheet" href="pricing.css">
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

        <section class="pricing">
            <h1 class="heading">Wedding Packages</h1>
            <div class="packages">
                <div class="package">
                    <h2>Basic Package</h2>
                    <p class="price">Rp. 25.000.000</p>
                    <ul>
                        <li>Dekorasi Tempat</li>
                        <li>Makan Untuk 50 Tamu</li>
                        <li>Photography</li>
                    </ul>
                    <button class="book-now">Pesan Sekarang</button>
                </div>
                <div class="package">
                    <h2>Standard Package</h2>
                    <p class="price">Rp. 50.000.000</p>
                    <ul>
                        <li>Dekorasi Tempat</li>
                        <li>Makan Untuk 100 Tamu</li>
                        <li>Photography and Videography</li>
                    </ul>
                    <button class="book-now">Pesan Sekarang</button>
                </div>
                <div class="package">
                    <h2>Premium Package</h2>
                    <p class="price">Rp. 100.000.000</p>
                    <ul>
                        <li>Dekorasi paling Murah</li>
                        <li>Makan Untuk 200 Tamu</li>
                        <li>Photography, Videography, and Album</li>
                    </ul>
                    <button class="book-now">Pesan Sekarang</button>
                </div>
            </div>
        </section>
    </div>

    <div id="payment-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Payment Details</h2>
            <form id="payment-form">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="package">Package:</label>
                <input type="text" id="package" name="package" readonly>
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card-number" required>
                <label for="expiry-date">Tanggal Kadulawarsa:</label>
                <input type="text" id="expiry-date" name="expiry-date" required>
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
                <button type="submit" class="submit-btn">Bayar Sekarang</button>
            </form>
        </div>
    </div>

    <script src="pricing.js"></script>
</body>
</html>
