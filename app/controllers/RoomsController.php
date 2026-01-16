<?php 
require_once __DIR__ . '/../models/Rooms.php';
class RoomsController {
    private $rooms;

    public function __construct() {
        $r = new Rooms();
        $this->rooms = $r;
    }

    public function ViewAllRooms() {
        if ($_GET['id']) {
            $datas = $this->rooms->GetAllRooms($_GET['id']);
            if ($datas) {
                require __DIR__ . '/../views/Rooms/RoomCard.php';
            } else {
                echo "No rooms are in this hotel.";
            }
        } else {
            header('Location: /hotel_booking/public/pages/hotel.php');
        }
    }
}
?>