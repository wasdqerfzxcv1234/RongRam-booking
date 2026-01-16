<div class="text">
    <p>
        <?php for ($i = 0; $i < $status['hotel_stars']; $i++): ?>
            ⭐
        <?php endfor ?>
        ( <?= $status['hotel_stars'] ?> stars )
    </p>
    <h2 style="margin-top: 15px;"><?=  $status['hotel_name'] ?></h2>
    <h3 style="font-weight: 100; color: #bbbbbb;"><?= $status['hotel_desc'] ?></h3>
    <h4><?= $status['hotel_location'] ?></h4>
</div>