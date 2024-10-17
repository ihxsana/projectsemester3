<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #b5e8f5;
            min-height: 300px;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
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

        .edit-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            cursor: pointer;
        }

        .save-button {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            cursor: pointer;
        }

        .logout-button {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="absolute top-0 left-0 p-4">
        <a href="halamanutama.html" class="contact-button">
            < Kembali</a>
    </div>
    <div class="container mx-auto px-4">
        <section class="hero-section rounded-3xl p-8 relative mb-16">
            <div class="flex flex-col items-center">
                <img id="profileImage" src="default-profile.jpg" alt="Foto Profil" class="profile-image mb-4">
                <h1 id="profileName" class="text-4xl font-bold mb-2">Nama Pengguna</h1>
                <p id="profileEmail" class="text-xl text-gray-600">email@example.com</p>
            </div>
        </section>

        <section class="mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Informasi Pribadi</h2>
                    <div id="personalInfo">
                        <p><strong>Tanggal Lahir:</strong> <span id="birthDate">01/01/1990</span></p>
                        <p><strong>Jenis Kelamin:</strong> <span id="gender">Laki-laki</span></p>
                        <p><strong>Nomor Telepon:</strong> <span id="phoneNumber">081234567890</span></p>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6">Alamat</h2>
                    <div id="addressInfo">
                        <p><strong>Alamat:</strong> <span id="address">Jl. Contoh No. 123</span></p>
                        <p><strong>Kota:</strong> <span id="city">Jakarta</span></p>
                        <p><strong>Provinsi:</strong> <span id="province">DKI Jakarta</span></p>
                        <p><strong>Kode Pos:</strong> <span id="postalCode">12345</span></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex justify-center space-x-4">
            <button id="editButton" class="edit-button">Edit Profil</button>
            <button id="saveButton" class="save-button hidden">Simpan Perubahan</button>
            <button id="logoutButton" class="logout-button">Logout</button>
        </div>
    </div>

    <script>
        const profileImage = document.getElementById('profileImage');
        const profileName = document.getElementById('profileName');
        const profileEmail = document.getElementById('profileEmail');
        const personalInfo = document.getElementById('personalInfo');
        const addressInfo = document.getElementById('addressInfo');
        const editButton = document.getElementById('editButton');
        const saveButton = document.getElementById('saveButton');
        const logoutButton = document.getElementById('logoutButton');

        function loadProfile() {
            const profile = JSON.parse(localStorage.getItem('userProfile')) || {};
            profileImage.src = profile.image || 'default-profile.jpg';
            profileName.textContent = profile.name || 'Nama Pengguna';
            profileEmail.textContent = profile.email || 'email@example.com';
            document.getElementById('birthDate').textContent = profile.birthDate || '01/01/1990';
            document.getElementById('gender').textContent = profile.gender || 'Laki-laki';
            document.getElementById('phoneNumber').textContent = profile.phoneNumber || '081234567890';
            document.getElementById('address').textContent = profile.address || 'Jl. Contoh No. 123';
            document.getElementById('city').textContent = profile.city || 'Jakarta';
            document.getElementById('province').textContent = profile.province || 'DKI Jakarta';
            document.getElementById('postalCode').textContent = profile.postalCode || '12345';
        }

        function editProfile() {
            const fields = ['name', 'email', 'birthDate', 'gender', 'phoneNumber', 'address', 'city', 'province', 'postalCode'];
            fields.forEach(field => {
                const element = document.getElementById(field);
                const value = element.textContent;
                element.innerHTML = `<input type="text" id="${field}Input" value="${value}" class="w-full p-2 border rounded">`;
            });

            profileImage.insertAdjacentHTML('afterend', '<input type="file" id="imageInput" accept="image/*" class="mt-2">');
            editButton.classList.add('hidden');
            saveButton.classList.remove('hidden');
        }

        function saveProfile() {
            const profile = {};
            const fields = ['name', 'email', 'birthDate', 'gender', 'phoneNumber', 'address', 'city', 'province', 'postalCode'];
            fields.forEach(field => {
                const input = document.getElementById(`${field}Input`);
                profile[field] = input.value;
                document.getElementById(field).textContent = input.value;
            });

            const imageInput = document.getElementById('imageInput');
            if (imageInput && imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profileImage.src = e.target.result;
                    profile.image = e.target.result;
                };
                reader.readAsDataURL(imageInput.files[0]);
            }

            localStorage.setItem('userProfile', JSON.stringify(profile));
            editButton.classList.remove('hidden');
            saveButton.classList.add('hidden');
            loadProfile();
        }

        function logout() {
            localStorage.removeItem('userProfile');
            window.location.href = 'home.php';
        }

        editButton.addEventListener('click', editProfile);
        saveButton.addEventListener('click', saveProfile);
        logoutButton.addEventListener('click', logout);

        loadProfile();
    </script>
</body>

</html>

