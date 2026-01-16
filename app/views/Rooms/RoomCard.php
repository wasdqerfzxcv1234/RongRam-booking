<?php foreach ($datas as $data): ?>
<div class="room">
    <img src="<?= $data['image_path'] ?>" alt="" width="250px">
    <div class="content">
        <div class="left">
            <h2><?= $data['room_name'] ?></h2>
            <p>เลขห้อง: <?= $data['room_number'] ?></p>
            <p><?= $data['room_desc'] ?></p>

        </div>
        <div class="right">
            <p><span>฿<?= $data['room_price'] ?></span>/คืน</p>
            <button type="button" id="book">จอง</button>
        </div>
    </div>
</div>
<?php endforeach ?>