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
                echo "No rooms are available in this hotel.";
            }
        } else {
            header('Location: /hotel_booking/public/pages/hotel.php');
            exit;
        }
    }

    public function BookingCheck() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book_submit'])) {
            if (empty($_POST['checkin']) || empty($_POST['checkout']) || empty($_POST['room_id'])) {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            }

            $status = $this->rooms->Book($_POST['room_id'], $_POST['checkin'], $_POST['checkout']);
            if ($status) {
                header('Location: /hotel_booking/public/pages/booking.php');
                exit;
            } else {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            }
        }
    }

    public function ViewAllBookings() {
        $datas = $this->rooms->ViewBookedRoom();
        if ($datas) {
            require __DIR__ . '/../views/Rooms/bookingsCard.php';
        }
    }
}
?>