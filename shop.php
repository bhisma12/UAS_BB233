<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Used Car Dealersip</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
      }

      header {
        background-color: #4B4D4F;
        color: white;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      header img {
        height: 40px;
      }

      header .search-bar {
        flex: 1;
        margin: 0 20px;
      }

      header .search-bar input {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
      }

      header .cart-profile {
        display: flex;
        gap: 15px;
        align-items: center;
      }

      header .cart-profile img {
        height: 30px;
      }

      .banner {
        text-align: center;
        padding: 20px;
        background-color: #f2f2f2;
      }

      .banner img {
        max-width: 100%;
        height: auto;
      }

      .categories {
        padding: 20px;
      }

      .categories h2 {
        margin-bottom: 15px;
      }

      .products {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
      }

      .product {
        flex: 1 1 calc(25% - 20px);
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        text-align: center;
      }

      .product img {
        max-width: 100%;
        height: auto;
      }

      .product h3 {
        padding: 10px;
        font-size: 16px;
      }

      .product p {
        padding: 5px 10px;
      }

      .product button {
        background-color: #f2f2f2;
        padding: 10px 20px;
        color: #000000;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .product button:hover {
        background-color: #757575;
        transition: 0.3s;
      }

      .footer {
        background-color: #4B4D4F;
        color: white;
        padding: 25px;
        text-align: center;
      }

      .footer .payment-options img {
        height: 30px;
        margin: 0 10px;
      }

      .footer .shipping-options img{
        height: 40px;
      }
    </style>
    </style>
  </head>
  <script src="https://unpkg.com/feather-icons"></script>
  <body>
    <header>
      <img src="../assets/Logo.png" alt="Used Car Daelership" />
      <div class="search-bar">
        <input type="text" placeholder="Cari Produk" />
      </div>
      <div class="cart-profile">
        <i data-feather="shopping-cart"></i>
        <i data-feather="user"></i>
      </div>
   <!-- Dropdown component -->
<div class="dropdown">
  <!-- Dropdown toggle button -->
  <button>
    class="btn btn-secondary dropdown-toggle" 
    type="button" 
    data-bs-toggle="dropdown" 
    aria-expanded="false"
  >
    Dropdown button
  </button>
  
  <!-- Dropdown menu -->
  <ul class="dropdown-menu">
    <!-- Dropdown menu items -->
    <li>
      <a class="dropdown-item" href="#">Action</a>
    </li>
    <li>
      <a class="dropdown-item" href="#">Another action</a>
    </li>
    <li>
      <a class="dropdown-item" href="#">Something else here</a>
    </li>
  </ul>
</div>
    </header>

    <div class="banner">
      <img src="../assets/bnnr.jpg" alt="Aero Street Sepatu Unisex" />
    </div>

    <div class="categories">
      <h2>Kategori</h2>
      <div class="products">
        <div class="product">
          <a href=""></a>
          <img src="../assets/Toyota Land Cruiser[US] 2024.jpg" alt="MOBIL 1" />
          <h3>LAND CRUISER 2024</h3>
          <p>Rp 2,584,000,000</p>
          <a href="halaman-detail-land-cruiser.html" class="buy-button">
          <button>Beli Sekarang</button>
        </div>
        <div class="product">
          <img src="../assets/2022 Lexus LX 600 F.jpg" alt="MOBIL 2" />
          <h3>LEXUS LX 600</h3>
          <p>Rp 3,059,000,000</p>
          <a href="halaman-detail-lexus-lx600.html" class="buy-button">
          <button>Beli Sekarang</button>
        </div>
        <div class="product">
          <img src="../assets/TOYOTA GR YARIS.jpg" alt="MOBIL 3" />
          <h3>TOYOTA GR YARIS 2025</h3>
          <p>Rp 1,198,000,000</p>
          <a href="halaman-detail-toyota-gr-yaris.html" class="buy-button">
          <button>Beli Sekarang</button>
        </div>
        <div class="product">
          <img src="../assets/MCLAREN.jpg" alt="MOBIL 4" />
          <h3>MCLAREN 720S</h3>
          <p>Rp 3,428,000,000</p>
          <a href="halaman-detail-toyota-gr-yaris.html" class="buy-button">
          <button>Beli Sekarang</button>
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>Pembayaran:</p>
      <div class="payment-options">
        <img src="../assets/Bank_Central_Asia.svg.png" alt="BCA" />
        <img src="../assets/BNI_logo.svg.png" alt="BNI" />
        <img src="../assets/Logo_ovo_purple.svg (1).png" alt="OVO" />
        <img src="../assets/logo-gopay.png" alt="Gopay" />
      </div>
      <p>Pengiriman:</p>
      <div class="shipping-options">
        <img src="../assets/New_Logo_JNE.png" alt="JNE" />
        <img src="../assets/J&T_Express_logo.svg.png" alt="JNT" />
      </div>
      <div class="testimonials">
  <h2>Apa Kata Mereka?</h2>
  <p>"Pengalaman membeli mobil di sini sangat memuaskan!"</p>
  <p>"Pelayanan yang ramah dan cepat!"</p>
</div>
    </footer>
    <script>
      feather.replace();
    </script>
  </body>
</html>
