<?php 
require __DIR__ . '/../../app/config/multipages.php';
require __DIR__ . '/../../app/config/hotel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/asset/style/main.css">
    <link rel="stylesheet" href="../../public/asset/style/hotel.css">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="left">
                <div class="logo">
                    <h2>
                        <span>OnTop</span>.hotel
                    </h2>
                </div>
                <div class="menu">
                    <div class="hotle">
                        <a href="hotel.php" class="ts">โรงแรมทั้งหมด</a>
                    </div>
                    <div class="book">
                        <a href="booking.php">การจองของฉัน</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <form method="post" class="logout">
                    <button type="submit" name="logout_btn">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div class="hero">
            <div class="text">
                <h2>โรงแรมทั้งหมด</h2>
                <p>ค้นหาโรงแรมที่คุณต้องการ</p>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <?php $hotelController->ViewAllHotels() ?>
            </div>
        </div>
    </main>
    <footer>
        <span>© 2023 Hotel. All rights reserved.</span>
    </footer>
</body>
</html>