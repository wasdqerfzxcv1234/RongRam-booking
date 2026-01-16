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
}
?>