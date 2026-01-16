<?php 
require_once __DIR__ . '/../models/Hotels.php';
class HotelController {
    private $hotels;

    public function __construct() {
        $h = new Hotels();
        $this->hotels = $h;
    }

    public function ViewAllHotels() {
        $datas = $this->hotels->GetAllHotel();

        require __DIR__ . '/../views/Hotels/HotelCard.php';
    }

    public function ViewRooms() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['view_room'])) {
            header("Location: /hotel_booking/public/pages/detail.php?id=" . $_POST['hotel_id']);
        }
    }

    public function ViewHotelInfo() {
        if ($_GET['id']) {
            $status = $this->hotels->GetHotelInfo($_GET['id']);

            if ($status) {
                require __DIR__ . '/../views/Rooms/Hero.php';
            } else {
                require __DIR__ . '/../views/Rooms/WrongHero.php';
            }
        }
    }
}
?>