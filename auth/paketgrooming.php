<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Grooming</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #b5c4f5;
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
                    <p class="text-gray-600 mb-2">temui tim Grooming Terbaik Kami</p>
                    <h1 class="text-4xl lg:text-5xl font-bold mb-4">SERBA GROW</h1>
                    <button class="contact-button">Tampil dengan Mengesankan 👱</button>
                </div>
                <div class="lg:w-1/2 relative">
                    <img src="salon.jpg" alt="Hero Image" class="building-image w-full object-cover">
                </div>
            </div>

            <div class="absolute bottom-4 right-4 bg-white p-4 rounded-lg">
                <p class="font-bold">10k+</p>
                <p>Tertampankan dan Tercantikkan</p>
            </div>
        </section>

        <section class="mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Layanan Grooming Terbaik</h2>
                    <p class="text-gray-600 mb-4">Tim profesional</p>
                    <p class="mb-4">Ubah penampilan Anda dengan potongan rambut yang sesuai dengan gaya dan kepribadian
                        Anda. Tim stylist kami yang berpengalaman akan memberikan konsultasi personal untuk menemukan
                        gaya yang sempurna. Serta Tampil memukau di setiap kesempatan dengan layanan hair styling kami
                    </p>
                    <button id="openPopup" class="bg-black text-white px-6 py-2 rounded">Pilih Paket</button>
                </div>
                <div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">Paket Potong 💇 </h3>
                        <p class="text-gray-600">Konsultasi gratis
                            Pencucian rambut dengan produk premium
                            Pijatan kepala yang menenangkan
                            Styling akhir untuk hasil sempurna.</p>
                    </div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">Paket Styling 🪮 </h3>
                        <p class="text-gray-600">Blow dry dengan berbagai teknik untuk volume dan tekstur
                            Catok untuk rambut lurus berkilau atau curly yang sempurna
                            Styling cepat untuk tampilan profesional.</p>
                    </div>
                    <div class="service-card">
                        <h3 class="font-bold mb-2">Paket Lengkap 💈 </h3>
                        <p class="text-gray-600">Dapatkan semua layanan yang tersedia.</p>
                    </div>
                </div>
            </div>
        </section>

        <div id="popupOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Pilihan Paket</h3>
                <div class="space-y-4">
                    <button onclick="addToOrder('Paket Potong', 45000)"
                        class="w-full bg-gray-200 p-4 rounded text-left">
                        <span class="font-bold">Paket Potong 💇</span>
                        <span class="float-right">Rp 45.000</span>
                    </button>
                    <button onclick="addToOrder('Paket Styling', 60000)"
                        class="w-full bg-gray-200 p-4 rounded text-left">
                        <span class="font-bold">Paket Styling 🪮</span>
                        <span class="float-right">Rp 60.000</span>
                    </button>
                    <button onclick="addToOrder('Paket Lengkap', 90000)"
                        class="w-full bg-gray-200 p-4 rounded text-left">
                        <span class="font-bold">Paket Lengkap 💈</span>
                        <span class="float-right">Rp 90.000</span>
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
    </div>

</body>

</html>