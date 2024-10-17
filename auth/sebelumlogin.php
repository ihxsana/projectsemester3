<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="stylehalaman.css">
</head>

<body>

<header>
    <nav class="navigation">
      <a href="#" style="border-bottom: 4px solid #fff; padding-bottom: 4px;">Beranda</a>
      <a href="tentang kami.php" class="line">Tentang Kami</a>
      <a href="forumdiskusi.php" class="line">Forum Diskusi</a>
      <a href="halamanpemesanan.php" class="line">Pesanan</a>
      <button class="btnlogin-popup">Login</button>
    </nav>
  </header>

  <main>
    <section class="hero">
      <div class="hero-content">
        <h1>Home Service Solusi untuk Rumah Anda</h1>
        <p> menyediakan layanan terbaik untuk Anda</p>
      </div>
      <div class="hero-background"></div>
    </section>
    <section class="services">
      <h2 class="service-title">Layanan Kami</h2>
      <div class="card-container">
        <div class="card">
          <img src="service-1.jpg" alt="Service 1">
          <h3>Serba Care</h3>
          <p>Layanan Kebutuhan Rumah dan Diri Anda</p>
          <div class="dropdown">
            <button class="dropbtn">Lihat Detail</button>
            <div class="dropdown-content">
              <a href="layanankebersihan.php">Paket Bersih Rumah</a>
              <a href="paketgrooming.php">Paket Grooming</a>
              <a href="paketlaundry.php">Paket Laundry</a>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="service-2.jpg" alt="Service 2">
          <h3>Serba Pet</h3>
          <p>Layanan perawatan hewan yang profesional</p>
          <div class="dropdown">
            <button class="dropbtn">Lihat Detail</button>
            <div class="dropdown-content">
              <a href="groominghewan.php">Grooming hewan</a>
              <a href="penitipanhewan.php">Antar Jemput Penitipan Hewan</a>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="service-3.jpg" alt="Service 3">
          <h3>Serba Health</h3>
          <p>Layanan kesehatan yang terbaik untuk Anda</p>
          <div class="dropdown">
            <button class="dropbtn">Lihat Detail</button>
            <div class="dropdown-content">
              <a href="panggildoktor.php">Pemeriksaan Kesehatan</a>
              <a href="mcuonline.php">Konsultasi Online </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials">
      <h2>Apa Kata Mereka</h2>
      <div class="testimonial">
        <img alt="Testimonial 1" height="50" src="tama.png" width="50" />
        <p>"Home Service adalah solusi terbaik untuk rumah saya. Mereka sangat profesional dan ramah." - Tama Ngab</p>
      </div>
      <div class="testimonial">
        <img alt="Testimonial 2" height="50" src="fafa.png" width="50" />
        <p>"Saya sangat puas dengan layanan Home Service. Mereka sangat cepat dan efisien." - Fafa Sigma</p>
      </div>
    </section>
  </main>
  <footer>
    <h2>Daftar Sekarang dan Dapatkan Layanan Terbaik</h2>
    <p>&copy; 2023 Serba Bisa.Project Pemrograman Website.</p>
    <a href="https://wa.me/62859106516373" target="_blank" class="whatsapp-float-btn">
      <button>Hubungi Kami</button>
    </a>
  </footer>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>