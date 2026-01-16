<?php 
require_once __DIR__ . '/../app/config/login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/asset/style/main.css">
    <link rel="stylesheet" href="../public/asset/style/index.css">
</head>
<body>
    <main>
        <div class="container active" id="active">
            <h1>Login</h1>
            <form method="post">
                <div class="input">
                    <div class="UserName">
                        <label>Username</label>
                        <input name="username" type="text" placeholder="Username" required>
                    </div>
                    <div class="Password">
                        <label>Password</label>
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" name="login_btn">Login</button>
                </div>
            </form>
            <div class="footer">
                <p>Don't have an account? <span id="GoToRegister">Sign up</span></p>
            </div>
        </div>
        <div class="container unactive" id="unactive">
            <h1>Register</h1>
            <form method="post">
                <div class="input">
                    <div class="User-email">
                        <label>Email</label>
                        <input name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="UserName">
                        <label>Username</label>
                        <input name="username" type="text" placeholder="Username" required>
                    </div>
                    <div class="Password">
                        <label>Password</label>
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="confirm-password">
                        <label>Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" name="register_btn">Register</button>
                </div>
            </form>
            <div class="footer">
                <p>Already have an account? <span id="GotoLogIn">Login</span></p>
            </div>
        </div>
    </main>
    <script src="../public/asset/script/index.js"></script>
</body>
</html>