TYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color:rgb(3, 31, 131);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 80px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .status {
            text-align: center;
            font-weight: bold;
            color: #28a745;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Laporan Pembayaran</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Pembeli</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Produk</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Metode Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "laporan_pembayaran";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Periksa koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Ambil data dari tabel
            $sql = "SELECT * FROM pembayaran";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data per baris
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['nama_pembeli'] ?? 'Tidak ada') . "</td>
                            <td>" . htmlspecialchars($row['email'] ?? 'Tidak ada') . "</td>
                            <td>" . htmlspecialchars($row['nomor_telepon'] ?? 'Tidak ada') . "</td>
                            <td>" . htmlspecialchars($row['alamat_pengiriman'] ?? 'Tidak ada') . "</td>
                            <td>" . htmlspecialchars($row['produk'] ?? 'Tidak ada') . "</td>
                            <td>" . htmlspecialchars($row['merek'] ?? 'Tidak ada') . "</td>
                            <td>Rp " . number_format($row['harga'] ?? 0, 0, ',', '.') . "</td>
                            <td>" . htmlspecialchars($row['metode_pembayaran'] ?? 'Tidak ada') . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>Tidak ada data</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
