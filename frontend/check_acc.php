<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
    // Jika sudah login, redirect ke halaman dashboard
    header("Location: shop.html");
    exit();
} else {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>