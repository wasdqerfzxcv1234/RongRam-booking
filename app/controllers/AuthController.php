<?php 
require_once __DIR__ . '/../models/Users.php';
class AuthController {
    private $users;

    public function __construct() {
        $u = new Users();
        $this->users = $u;
    }

    public function CheckLoggedIn() {
        $status = $this->users->IsLoggedIn();
        if (!$status) {
            header('Location: /hotel_booking/public/index.php');
            exit;
        }
    }

    public function CheckLoggedInLoginPage() {
        $status = $this->users->IsLoggedIn();
        if ($status) {
            header('Location: /hotel_booking/public/pages/hotel.php');
            exit;
        }
    }

    public function RegisterDetect() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_btn'])) {
            if (empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])) {
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            }

            $status = $this->users->Register($_POST['email'], $_POST['username'], $_POST['password']);
            if ($status) {
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            } else {
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            }
        }
    }

    public function LoginDetect() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_btn'])) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            }

            $status = $this->users->Login($_POST['username'], $_POST['password']);
            if ($status) {
                header('Location: /hotel_booking/public/pages/hotel.php');
                exit;
            } else {
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            }
        } 
    }

    public function LogoutDetect() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout_btn'])) {
            $this->users->Logout();
            header('Location: /hotel_booking/public/index.php');
            exit;
        }
    }
}
?>