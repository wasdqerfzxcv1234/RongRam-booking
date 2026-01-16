<?php 
class Database {
    private $conn;
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '12345678';
    private $dbname = 'hotel_booking';

    public function __construct() {
        try {
            $db = new PDO(
                "mysql:host=$this->hostname;dbname=$this->dbname",
                $this->username,
                $this->password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die("Error connecting to db : " . $e->getMessage());
        }
        $this->conn = $db;
    }

    public function Connect() {
        return $this->conn;
    }
}
?>