<?php 
require __DIR__ . '/../../app/config/multipages.php';
require __DIR__ . '/../../app/config/booking.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/main.css">
    <link rel="stylesheet" href="../asset/style/booking.css">
    <title>การจองของฉัน - OnTop Hotel</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="left">
                <div class="logo" onclick="window.location.href='../index.html'">
                    <h2>
                        <span>OnTop</span>.hotel
                    </h2>
                </div>
                <div class="menu">
                    <div>
                        <a href="hotel.php">โรงแรมทั้งหมด</a>
                    </div>
                    <div>
                        <a href="booking.php" class="ts">การจองของฉัน</a>
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
        <div class="header">
            <div class="text">
                <h2>ประวัติการจองห้องพัก</h2>
            </div>
        </div>

        <div class="info">
            <div class="booking-list">
                <?php $roomController->ViewAllBookings() ?> 
            </div>
        </div>
    </main>

    <footer>
        <span>© 2023 Hotel. All rights reserved.</span>
    </footer>
</body>

</html>