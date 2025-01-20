<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian LAND CRUISER 2024</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        header {
            background-color: #4B4D4F;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .product-details {
            display: flex;
            margin-bottom: 20px;
        }

        .product-details img {
            max-width: 300px;
            margin-right: 20px;
        }

        .product-details div {
            flex: 1;
        }

        .form-container {
            margin-top: 20px;
        }

        .form-container label {
            display: block;
            margin: 10px 0 5px;
        }

        .form-container input, .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .submit-button {
            background-color: #4B4D4F;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #757575;
        }
    </style>
</head>
<body>

<header>
    <h1>Pembelian LAND CRUISER 2024</h1>
</header>

<div class="product-details">
    <img src="../assets/Toyota Land Cruiser[US] 2024.jpg" alt="LAND CRUISER 2024">
    <div>
        <h2>LAND CRUISER 2024</h2>
        <p>Harga: Rp 2,584,000,000</p>
        <p>Deskripsi: Mobil SUV yang kuat dan nyaman, cocok untuk segala medan.</p>
    </div>
</div>

<div class="form-container">
    <h2>Formulir Pembelian</h2>
    <form id="purchase-form" action="process_purchase.php" method="POST">
        <input type="hidden" name="product_name" value="LAND CRUISER 2024">
        
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Nomor Telepon:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Alamat Pengiriman:</label>
        <input type="text" id="address" name="address" required>

        <label for="payment-method">Metode Pembayaran:</label>
        <select id="payment-method" name="payment-method" required>
            <option value="bca">Bank Central Asia (BCA)</option>
            <option value="bni">Bank Negara Indonesia (BNI)</option>
            <option value="ovo">OVO</option>
            <option value="gopay">Gopay</option>
        </select>

        <button type="submit" class="submit-button">Selesaikan Pembelian</button>
    </form>
</div>
        </select>

        
    </form>
</div>

<script>
    document.getElementById('purchase-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman formulir secara default
        alert('Pembelian berhasil! Terima kasih telah membeli LAND CRUISER 2024.');
        // Di sini Anda bisa menambahkan logika untuk mengirim data ke server jika diperlukan
    });
</script>

</body>
</html>