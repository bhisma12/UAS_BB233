<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/main-page.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('../assets/latar website.jpg') no-repeat center center fixed; /* Tambahkan gambar latar */
            background-size: cover; /* Gambar akan menutupi seluruh area */
            color: #fff; /* Teks berwarna putih untuk kontras */
        }

        header {
            background-color: rgba(0, 0, 0, 0.7); /* Warna latar transparan untuk header */
            color: #fff;
            padding: 10px 20px;
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar ul, .navbar-nav ul {
            list-style: none;
            display: flex;
            padding: 0;
            margin: 0;
        }

        .navbar ul li, .navbar-nav ul li {
            margin: 0 10px;
        }

        .navbar ul li a, .navbar-nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
        }

        .main-page {
            text-align: center;
            padding: 100px 20px;
        }

        .main-text h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .main-text h3 {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-buy button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-buy button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

   <header>
    <div class="navbar-container">
             <div class="logo-img">
                <a href="#"><img src="../assets/Logo.png" alt=""></a>
            </div>
            <div class="navbar">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Album</a>
                    </li>
                    <li>
                        <a href="#">contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav">
                <ul>
                    <li>
                        <a href="#"> <i data-feather="search"></i></a>
                       </li>
                    <li>
                   <a href="#" class="user"> <i data-feather="user"></i></a>
                    </li>
                </ul>
            </div>
    </div>
   </header> 
   <main>
    <div class="main-page">
        <div class="main-text">
            <h1>Used Cars</h1> <br>
            <h3>mewujudkan mobil impian anda dengan <br>harga terjangkau dengan dengan harga miring</h3>
        </div>
        <div class="btn-buy">
        <form method="POST" action="check_acc.php">
        <button type="submit">Akses Halaman Dashboard</button>
    </form>
        </div>
    </div>

   </main>
   <script>
      feather.replace();
    </script>
</body>
</html>