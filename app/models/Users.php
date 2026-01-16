<?php 
require_once __DIR__ . '/../core/Database.php';
class Users {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->Connect();
    }

    public function IsLoggedIn() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['user_id']);
    }

    public function Register($email, $username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        date_default_timezone_set("Asia/Bangkok");
        $created_date = date("Y-m-d");
        $stmt = $this->conn->prepare(
            "INSERT INTO users (email, username, password_, created_date) 
            VALUES (:email, :username, :password_, :created_date)"
        );

        try {
            $stmt->execute([
                ':email' => $email,
                ':username' => $username,
                ':password_' => $hashedPassword,
                ':created_date' => $created_date
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function Login($username, $password) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $stmt = $this->conn->prepare(
            "SELECT * FROM users WHERE username=:username LIMIT 1"
        );
        $stmt->execute([':username' => $username]);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($res) {
            if (password_verify($password, $res['password_'])) {
                $_SESSION['user_id'] = $res['user_id'];
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function Logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_unset();
        session_destroy();
    }
}
?>