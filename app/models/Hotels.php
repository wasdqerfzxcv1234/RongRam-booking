<?php 
require_once __DIR__ . '/../core/Database.php';
class Hotels {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->Connect();
    }

    public function GetAllHotel() {
        $stmt = $this->conn->prepare('SELECT * FROM hotel ORDER BY hotel_id DESC');
        try {
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function GetHotelInfo($hotel_id) {
        $stmt = $this->conn->prepare('SELECT * FROM hotel WHERE hotel_id=:hotel_id');
        try {
            $stmt->execute([':hotel_id' => $hotel_id]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            return $res;
        } catch(PDOException $e) {
            return false;
        }
    }
}
?>