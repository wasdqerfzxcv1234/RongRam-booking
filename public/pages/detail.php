<?php 
require __DIR__ . '/../../app/config/multipages.php';
require __DIR__ . '/../../app/config/detail.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/main.css">
    <link rel="stylesheet" href="../asset/style/detail.css">
    <title>Document</title>
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
                    <div>
                        <a href="hotel.php" class="ts">โรงแรมทั้งหมด</a>
                    </div>
                    <div>
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
            <?php $hotelController->ViewHotelInfo() ?>
        </div>
        <div class="header">
            <div class="text">
                <h2>เลือกห้องพัก</h2>
            </div>
        </div>
        <div class="info">
            <div class="room-select">
                <?php $roomsController->ViewAllRooms() ?>
            </div>
        </div>
    </main>

    <!-- book popup -->
    <div class="bookPopup unactive" id="bookPopup">
        <div class="Popupcontainer">
            <div class="header">
                <h2>จองห้องพัก</h2>
            </div>
            <div class="body">
                <form>
                    <div class="day">
                        <div class="checkin">
                            <label>เลือกวันเข้าพัก</label>
                            <input type="date" id="checkin">
                        </div>
                        <div class="checkout">
                            <label>เลือกวันออกพัก</label>
                            <input type="date" id="checkout">
                        </div>
                    </div>
                    <div class="conclu">
                        <div class="price">
                            <label>ราคารวม</label>
                            <input type="text" id="totalPrice" readonly>
                        </div>
                        <div class="btn">
                            <button>ยกเลิก</button>
                            <button>ยืนยัน</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <span>© 2023 Hotel. All rights reserved.</span>
    </footer>
    <script src="../asset/script/detail.js"></script>
</body>
</html>