<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="stylehalaman.css">
    <style>
        
        section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2em;
            color: #000;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.8;
            font-size: 1.1em;
            color: #555;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            font-size: 1.1em;
            margin: 10px 0;
            padding-left: 20px;
            position: relative;
        }

        ul li::before {
            content: "✔";
            color: #000;
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* Image and Text layout */
        .about-section {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 40px;
        }

        .about-section img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            flex: 1;
        }

        /* Button style */
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #000;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1.1em;
        }

        .cta-button:hover {
            background-color: #000;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            section {
                margin: 20px 10px;
                padding: 15px;
            }

            .about-section {
                flex-direction: column;
            }
        }
    </style>

<body>
    <header>
        <nav class="navigation">
            <a href="home.php" class="line">Beranda</a>
            <a href="tentang kami.php" style="border-bottom: 4px solid #fff; padding-bottom: 5px;">Tentang Kami</a>
            <a href="forumdiskusi.php" class="line">Forum Diskusi</a>
            <a href="halamanpemesanan.php" class="line">Pesanan</a>
            <button class= "btnlogin-popup" id="login-btn"><?php echo $user['name']; ?></button>
            <div class="dropdown" id="logout-dropdown">
                <button class="profil-btn">Profil</button>
                <button class="logout-btn">Logout</button>
            </div>
        </nav>
    </header>
    <section>
        <div class="about-section">
            <img src="boutus.jpg" alt="Layanan kami"> <!-- Ganti dengan URL gambar layanan -->
            <div class="about-text">
                <h1>Siapa Kami?</h1>
                <p>Kami adalah penyedia layanan <strong>home service</strong> profesional yang berkomitmen untuk
                    memberikan kemudahan dan kenyamanan bagi Anda. Dengan layanan yang mencakup bersih rumah, penitipan
                    hewan, panggilan dokter, dan berbagai kebutuhan rumah tangga lainnya, kami hadir untuk memastikan
                    kebutuhan Anda terpenuhi tanpa harus meninggalkan rumah.</p>
            </div>
        </div>

        <div class="about-section">
            <div class="about-text">
                <h1>Visi Kami</h1>
                <p>Menjadi layanan home service terbaik yang dipercaya oleh keluarga di seluruh Indonesia. Kami ingin
                    menciptakan solusi praktis yang dapat diandalkan untuk setiap kebutuhan rumah tangga, dengan standar
                    pelayanan yang profesional dan ramah lingkungan.</p>
            </div>
            <img src="siapakami.jpg" alt="Visi kami"> <!-- Ganti dengan URL gambar visi -->
        </div>

        <div class="about-section">
            <img src="misi.jpg" alt="Misi kami"> <!-- Ganti dengan URL gambar misi -->
            <div class="about-text">
                <h1>Misi Kami</h1>
                <ul>
                    <li>Menyediakan layanan home service yang berkualitas dan tepat waktu.</li>
                    <li>Memberikan pengalaman pelanggan yang luar biasa dengan standar tinggi.</li>
                    <li>Berkomitmen pada keberlanjutan lingkungan dalam setiap layanan yang kami berikan.</li>
                </ul>
            </div>
        </div>

        <h1>Kenapa Memilih Kami?</h1>
        <p>Kami menawarkan layanan yang cepat, aman, dan terpercaya dengan tenaga ahli yang berpengalaman di bidangnya.
            Baik untuk kebutuhan membersihkan rumah, merawat hewan peliharaan, atau mendapatkan layanan kesehatan
            langsung di rumah, kami siap membantu Anda dengan layanan yang dapat diandalkan.</p>

        <a href="https://wa.me/62859106516373" class="cta-button">Tanyakan Selengkapnya!</a>
    </section>
    <script src="script2.js"></script>
</body>