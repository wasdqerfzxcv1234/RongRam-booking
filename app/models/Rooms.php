<?php 
require_once __DIR__ . '/../core/Database.php';
class Rooms {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->Connect();
    }

    public function GetAllRooms($hotel_id) {
        $stmt = $this->conn->prepare('SELECT * FROM rooms WHERE hotel_id=:hotel_id');
        try {
            $stmt->execute([':hotel_id' => $hotel_id]);
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function Book($room_id, $checkin, $checkout) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        date_default_timezone_set("Asia/Bangkok");
        $bookDate = date("Y-m-d");
        $stmt = $this->conn->prepare(
            'INSERT INTO bookings (user_id, room_id, book_date, check_in, check_out)
            VALUES (:user_id, :room_id, :book_date, :check_in, :check_out)'
        );
        try {
            $stmt->execute(
                [
                    ":user_id" => $_SESSION['user_id'],
                    ":room_id" => $room_id,
                    ":book_date" => $bookDate,
                    ":check_in" => $checkin,
                    ":check_out" => $checkout
                ]
            );
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function ViewBookedRoom() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $stmt = $this->conn->prepare("
        SELECT 
            b.book_date,
            b.room_id AS booking_room_id,
            b.user_id,
            b.check_in,
            b.check_out,

            r.room_id AS room_id,
            r.room_number,
            r.room_price,
            r.image_path,

            h.hotel_id,
            h.hotel_name,

            u.user_id AS user_id,
            u.username

        FROM bookings b
        INNER JOIN rooms r ON r.room_id = b.room_id
        INNER JOIN hotel h ON h.hotel_id = r.hotel_id
        INNER JOIN users u ON u.user_id = b.user_id
        WHERE u.user_id=:user_id
        ");

        try {
            $stmt->execute([
                ':user_id' => $_SESSION['user_id']
            ]);
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>