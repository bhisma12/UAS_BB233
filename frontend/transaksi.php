<?php
// Konfigurasi database
$host = 'localhost'; // Ganti dengan host database Anda
$db = 'nama_database'; // Ganti dengan nama database Anda
$user = 'username'; // Ganti dengan username database Anda
$pass = 'password'; // Ganti dengan password database Anda

// Buat koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$payment_method = $_POST['payment-method'];
$product_name = $_POST['product_name'];

// Siapkan dan bind
$stmt = $conn->prepare("INSERT INTO purchases (name, email, phone, address, payment_method, product_name) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $phone, $address, $payment_method, $product_name);

// Eksekusi pernyataan
if ($stmt->execute()) {
    echo "Pembelian berhasil! Terima kasih telah membeli " . htmlspecialchars($product_name) . ".";
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi
$stmt->close();
$conn->close();
?>