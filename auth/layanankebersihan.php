<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kebersihan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #B5F1F5;
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
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <p class="text-gray-600 mb-2">temui tim kebersihan terbaik</p>
                    <h1 class="text-4xl lg:text-5xl font-bold mb-4">SERBA CLEAN</h1>
                    <button class="contact-button">Berbenah dengan Perasaan 🧹</button>
                </div>
                <div class="lg:w-1/2 relative">
                    <img src="cs.jpg" alt="Hero Image" class="building-image w-full object-cover">
                </div>
            </div>

            <div class="absolute bottom-4 right-4 bg-white p-4 rounded-lg">
                <p class="font-bold">10k+</p>
                <p>Pelanggan Terpuaskan</p>
            </div>
        </section>

        <section class="mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Layanan Kebersihan Terbaik</h2>
                    <p class="text-gray-600 mb-4">Tim profesional</p>
                    <p class="mb-4">SerbaClean adalah penyedia jasa kebersihan profesional yang berdedikasi untuk
                        menciptakan lingkungan bersih, sehat, dan nyaman bagi klien kami. Dengan pengalaman lebih dari
                        10 tahun di industri ini, kami menawarkan layanan pembersihan berkualitas tinggi untuk rumah,
                        kantor, dan berbagai jenis properti lainnya.</p>
                    <button id="openPopup" class="bg-black text-white px-6 py-2 rounded">Pilih Paket</button>
                </div>
                <div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">Paket Dasar 🫧 </h3>
                        <p class="text-gray-600">2 jam pembersihan
                            Cocok untuk apartemen atau rumah kecil
                            Termasuk pembersihan umum dan menyapu/mengepel.</p>
                    </div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">Paket Standar 🧼 </h3>
                        <p class="text-gray-600">4 jam pembersihan
                            Ideal untuk rumah sedang
                            Termasuk semua layanan paket dasar plus pembersihan kamar mandi dan dapur.</p>
                    </div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">Paket Premium 🧽 </h3>
                        <p class="text-gray-600">6-8 jam pembersihan
                            Sempurna untuk rumah besar atau deep cleaning
                            Mencakup semua layanan dengan tambahan pembersihan jendela dan poles lantai</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="packageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"
        style="display: none;">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <h3 class="text-lg font-bold mb-4">Pilih Paket Layanan</h3>
            <div id="packageOptions">
            </div>
            <div class="text-right mt-4">
                <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 text-black rounded">Tutup</button>
            </div>
        </div>
    </div>

    <div id="popupOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg">
            <h3 class="text-2xl font-bold mb-4">Pilihan Paket</h3>
            <div class="space-y-4">
                <button onclick="addToOrder('Paket Dasar', 25000)" class="w-full bg-gray-200 p-4 rounded text-left">
                    <span class="font-bold">Paket Dasar 🫧</span>
                    <span class="float-right">Rp 25.000</span>
                </button>
                <button onclick="addToOrder('Paket Standar', 50000)" class="w-full bg-gray-200 p-4 rounded text-left">
                    <span class="font-bold">Paket Standar 🧼</span>
                    <span class="float-right">Rp 50.000</span>
                </button>
                <button onclick="addToOrder('Paket Premium', 80000)" class="w-full bg-gray-200 p-4 rounded text-left">
                    <span class="font-bold">Paket Premium 🧽</span>
                    <span class="float-right">Rp 80.000</span>
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
            order.push({name: itemName, price: price});
            localStorage.setItem('order', JSON.stringify(order));
            alert(itemName + ' telah ditambahkan ke pesanan Anda.');
            popupOverlay.classList.add('hidden');
        }
    </script>
</body>

</html>
