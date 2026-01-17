<?php foreach ($datas as $data): ?>
<div class="booking-card">
    <img src="<?= $data['image_path'] ?>"
        alt="Room Image">
    <div class="content">
        <div class="booking-details">
            <h2><?= $data['hotel_name'] ?></h2>
            <p>เลขห้อง: <span><?= $data['room_number'] ?></span></p>
            <p>ชื่อคนจอง: <span><?= $data['username'] ?></span></p>
            <p>เช็คอิน: <span><?= $data['check_in'] ?></span></p>
            <p>เช็คเอาท์: <span><?= $data['check_out'] ?></span></p>
        </div>
        <div class="booking-status">
            <div class="top">
                <span class="price">฿ 
                <?php
                    date_default_timezone_set('Asia/Bangkok');
                    $check_in = new DateTime($data['check_in']);
                    $check_out = new DateTime($data['check_out']);

                    $diff = $check_in->diff($check_out);

                    echo $data['room_price'] * $diff->days;
                ?>
                </span>
                <span class="bill-date">ออกบิลเมื่อ: <?= $data['book_date'] ?></span>
            </div>
            <span class="tag">รอการชำระเงิน</span>
        </div>
    </div>
</div>
<?php endforeach ?>