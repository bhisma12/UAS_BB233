<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Jika pengguna sudah login, redirect ke halaman yang diinginkan
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Proses login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan pengecekan ke database (ini hanya contoh, sesuaikan dengan database Anda)
    // Misalnya, kita anggap username adalah 'admin' dan password adalah 'password'
    if ($username == 'admin' && $password == 'password') {
        // Jika login berhasil, simpan informasi pengguna di session
        $_SESSION['user_id'] = $username; // Anda bisa menyimpan ID pengguna yang sebenarnya
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #E4E4E5;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 400px;
    background-color: #545454;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 4px 8px #3D3D3D
}

.login-box {
    width: 100%;
    text-align: center;
    
}

.logo img {
    width: 60px;
    margin-bottom: 10px;
}

.logo h1 {
    font-size: 18px;
    color: #e94560;
    margin-bottom: 5px;
}

.logo p {
    font-size: 12px;
    color: #d8d8d8;
}

h2 { margin: 15px 0;
font-size: 15px;}

form {
    width: 100%;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    font-size: 14px;
    margin-bottom: 5px;
    display: block;
}

.input-wrapper {
    position: relative;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #f4f4f4;
    border-radius: 4px;
    background-color: #F4F2EC;
    color: #1C1C1C;
}

input::placeholder {
    color: #d8d8d8;
}

button.toggle-password {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #1C1C1C;
    cursor: pointer;
}

.login-btn {
    width: 100%;
    padding: 10px;
    background-color: #e94560;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

.login-btn:hover {
    background-color: #ffffff;
}


</style>
<body>
    
 <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="logo mobil.png" alt="used car">
                <h1>Used Car Dealersip</h1>
                <p>Dijamin Murah Dan Aman</p>
            </div>
            <h2>Welcome to Used Car admin</h2>
            <form action="#" method="post">
                <div class="input-group">
                    <label for="username">User Admin</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="username" placeholder="user admin" required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" placeholder="password" required>
                        <button type="button" class="toggle-password">👁️</button>
                    </div>
                    
                    </div>
                
                <button type="submit" class="login-btn">LOGIN</button>
            </form>
        </div>
    </div>
</body>
</html>
