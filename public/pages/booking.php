<?php 
require __DIR__ . '/../../app/config/multipages.php';
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
                <!-- Sample Booking 1 -->
                <div class="booking-card">
                    <img src="https://assets.doodecoapp.com/official-website/blog/modern-bedroom-design-ideas-1.jpg"
                        alt="Room Image">
                    <div class="content">
                        <div class="booking-details">
                            <h2>พยอมบอย Hotel</h2>
                            <p>เลขห้อง: <span>D1</span></p>
                            <p>ชื่อคนจอง: <span>User Name</span></p>
                            <p>เช็คอิน: <span>20 ม.ค. 2026</span></p>
                            <p>เช็คเอาท์: <span>22 ม.ค. 2026</span></p>
                        </div>
                        <div class="booking-status">
                            <div class="top">
                                <span class="price">฿9,000</span>
                                <span class="bill-date">ออกบิลเมื่อ: 16 ม.ค. 2026</span>
                            </div>
                            <span class="tag">ชำระเงินแล้ว</span>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </main>

    <footer>
        <span>© 2023 Hotel. All rights reserved.</span>
    </footer>
</body>

</html>