<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GroomConnect</title>
  <style>
    :root {
      --primary: #1f1f1f;
      --accent: #ffb400;
      --bg: #f5f5f5;
      --white: #fff;
    }

    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: var(--bg);
      color: #333;
    }

    header {
      background: var(--primary);
      color: var(--white);
      text-align: center;
      padding: 2rem 1rem;
    }

    header h1 {
      font-size: 2.5rem;
      color: var(--accent);
    }

    header p {
      font-size: 1.1rem;
      margin-top: 0.5rem;
    }

    section {
      max-width: 1000px;
      margin: 2rem auto;
      background: var(--white);
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    h2 {
      margin-bottom: 1rem;
      color: var(--primary);
      font-size: 1.6rem;
    }

    form input, form button {
      width: 100%;
      max-width: 500px;
      padding: 0.75rem;
      margin: 0.5rem 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }

    form button {
      background: var(--primary);
      color: var(--white);
      font-weight: bold;
      border: none;
      transition: background 0.3s;
      cursor: pointer;
    }

    form button:hover {
      background: #333;
    }

    .product-list {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: space-between;
    }

    .product {
      background: var(--bg);
      padding: 1rem;
      border-radius: 10px;
      flex: 1 1 calc(50% - 1rem);
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .product h3 {
      color: var(--primary);
      margin-bottom: 0.5rem;
    }

    .product p {
      font-size: 1.1rem;
      color: #666;
    }

    .success {
      background: #d4edda;
      color: #155724;
      padding: 1rem;
      border-left: 6px solid #28a745;
      margin-top: 1rem;
      border-radius: 6px;
    }

    .contact a {
      display: inline-block;
      background: #25d366;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
    }

    footer {
      text-align: center;
      padding: 1.5rem;
      background: var(--primary);
      color: var(--white);
      margin-top: 2rem;
    }

    @media (max-width: 600px) {
      .product-list {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

<header>
  <h1>GroomConnect</h1>
  <p>Reservasi Barbershop & Produk Grooming Pria Modern</p>
</header>

<section>
  <h2>Reservasi Booking Online</h2>
  <form method="post">
    <input type="text" name="name" placeholder="Nama Lengkap" required>
    <input type="date" name="date" required>
    <input type="time" name="time" required>
    <button type="submit" name="book">Booking Sekarang</button>
  </form>

  <?php
    if (isset($_POST['book'])) {
      $name = htmlspecialchars($_POST['name']);
      $date = $_POST['date'];
      $time = $_POST['time'];
      echo "<div class='success'>
        Reservasi berhasil!<br>
        Terima kasih, <strong>$name</strong>.<br>
        Booking Anda: <strong>$date</strong> jam <strong>$time</strong>.
      </div>";
    }
  ?>
</section>

<section>
  <h2>Produk Grooming Unggulan</h2>
  <div class="product-list">
    <div class="product">
      <h3>Pomade Strong Hold</h3>
      <p>Rp75.000</p>
    </div>
    <div class="product">
      <h3>Hair Powder Matte Look</h3>
      <p>Rp60.000</p>
    </div>
    <div class="product">
      <h3>Beard Oil Fresh Scent</h3>
      <p>Rp85.000</p>
    </div>
    <div class="product">
      <h3>Hair Tonic Herbal Boost</h3>
      <p>Rp70.000</p>
    </div>
  </div>
</section>

<section class="contact">
  <h2>Hubungi Kami via WhatsApp</h2>
  <a href="https://wa.me/08565015752" target="_blank">WhatsApp Sekarang</a>
</section>

<section>
  <h2>Data Diri Developer</h2>
  <p><strong>Nama:</strong> Zaidannur Muzanni</p>
  <p><strong>Email:</strong> zydancukcukku@gmail.com</p>
  <p><strong>Instagram:</strong> @ham_barbershop</p>
  <p><strong>Lokasi:</strong> Jl.Sukaramai, Martapura</p>
</section>

<footer>
  &copy; 2025 HamBarbershop. All rights reserved.
</footer>

</body>
</html>
