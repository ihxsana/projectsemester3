<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panggildoktor</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #f59a9a;
            min-height: 500px;
        }

        .building-image {
            border-radius: 20px;
            overflow: hidden;
        }

        .service-card {
            border: 1px solid #E5E7EB;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-button {
            background-color: #1E293B;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 25px;
        }
    </style>
</head>

<body>
    <div class="absolute top-0 left-0 p-4">
        <a href="home.php" class="contact-button">
            < Kembali</a>
    </div>
    <div class="container mx-auto px-4">
        <section class="hero-section rounded-3xl p-8 relative mb-16">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 relative">
                    <img src="mcu.jpg" alt="Hero Image" class="building-image w-full object-cover">
                </div>
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:text-right">
                    <p class="text-gray-600 mb-2">temui tim Kesehatan Terbaik Kami</p>
                    <h1 class="text-4xl lg:text-5xl font-bold mb-4">SERBA CHECKUP</h1>
                    <button class="contact-button">Dokter Berpengalaman & Penuh Kasih 💖</button>
                </div>
            </div>
            <div class="absolute bottom-4 right-4 bg-white p-4 rounded-lg">
                <p class="font-bold">10k+</p>
                <p>Pasien Kami Layani</p>
            </div>
        </section>
        <section class="mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Layanan Medical CheckUp Terbaik</h2>
                    <p class="text-gray-600 mb-4">Tim profesional</p>
                    <p class="mb-4">Dapatkan pemeriksaan kesehatan berkualitas rumah sakit tanpa perlu meninggalkan
                        kenyamanan rumah Anda..</p>
                    <button id="openPopup" class="bg-black text-white px-6 py-2 rounded">Pilih Paket</button>
                </div>
                <div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">🩺 Paket Umum</h3>
                        <p class="text-gray-600">Mencakup Pemeriksaan fisik lengkap,
                            Pengukuran tekanan darah,
                            Pemeriksaan detak jantung dan paru-paru,
                            Cek gula darah,
                            dan Cek kolesterol.</p>
                    </div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">💉 Paket Diagnostik</h3>
                        <p class="text-gray-600"> Proses EKG (elektrokardiogram),
                            Pengambilan sampel darah,
                            Tes urin,
                            dan Rontgen portable (untuk kasus tertentu).</p>
                    </div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">❗ Paket Darurat</h3>
                        <p class="text-gray-600">Perawatan luka,
                            Terapi infus,
                            Injeksi obat,
                            hingga Fisioterapi.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="popupOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg">
            <h3 class="text-2xl font-bold mb-4">Pilihan Paket</h3>
            <div class="space-y-4">
                <button onclick="addToOrder('Paket Umum', 55000)" class="w-full bg-gray-200 p-4 rounded text-left">
                    <span class="font-bold">Paket Umum 🩺</span>
                    <span class="float-right">Rp 55.000</span>
                </button>
                <button onclick="addToOrder('Paket Diagnostik', 85000)"
                    class="w-full bg-gray-200 p-4 rounded text-left">
                    <span class="font-bold">Paket Diagnostik 💉</span>
                    <span class="float-right">Rp 85.000</span>
                </button>
                <button onclick="addToOrder('Paket Darurat', 120000)" class="w-full bg-gray-200 p-4 rounded text-left">
                    <span class="font-bold">Paket Darurat ❗</span>
                    <span class="float-right">Rp 120.000</span>
                </button>
            </div>
            <button id="closePopup" class="mt-4 bg-black text-white px-6 py-2 rounded">Tutup</button>
        </div>
    </div>

    <script>
        const openPopup = document.getElementById('openPopup');
        const closePopup = document.getElementById('closePopup');
        const popupOverlay = document.getElementById('popupOverlay');

        openPopup.addEventListener('click', () => {
            popupOverlay.classList.remove('hidden');
        });

        closePopup.addEventListener('click', () => {
            popupOverlay.classList.add('hidden');
        });

        function addToOrder(itemName, price) {
            let order = JSON.parse(localStorage.getItem('order')) || [];
            order.push({ name: itemName, price: price });
            localStorage.setItem('order', JSON.stringify(order));
            alert(itemName + ' telah ditambahkan ke pesanan Anda.');
            popupOverlay.classList.add('hidden');
        }
    </script>
</body>

</html>