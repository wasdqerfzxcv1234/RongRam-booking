<?php if (count($datas) > 0): ?>
<?php foreach($datas as $data): ?>
<div class="item">
    <img src="<?= $data['image_path'] ?>" alt="">
    <div class="hotel-content">
        <div class="reveiw">
            <?php for($i=0; $i<$data['hotel_stars']; $i++): ?>
                ⭐
            <?php endfor ?>
        </div>
        <div class="detail">
            <div class="name">
                <h2><?= $data['hotel_name'] ?></h2>
            </div>
            <div class="location">
                <?= $data['hotel_location'] ?>
            </div>
            <div class="description">
                <?= $data['hotel_desc'] ?>
            </div>
        </div>
        <div class="buy">
            <form method="post" class="booking">
                <input type="hidden" name="hotel_id" value="<?= $data['hotel_id'] ?>">
                <button type="submit" name="view_room">ดูห้องพัก</button> <!--Go To detail.php-->
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>
<?php endif ?>