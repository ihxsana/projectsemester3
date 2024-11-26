<?php 
session_start();

?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Dashboard
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #fff7f0;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #fff3e6;
            padding: 20px;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar img {
            width: 50px;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: #333;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #ff7f50;
            color: #fff;
        }

        .sidebar .logout {
            margin-top: 20px;
            color: #ff7f50;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .header .user-info {
            display: flex;
            align-items: center;
        }

        .header .user-info img {
            width: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h3 {
            margin: 0 0 10px;
        }

        .card .stats {
            display: flex;
            justify-content: space-between;
        }

        .card .stats div {
            text-align: center;
        }

        .card .stats div i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .chart-container {
            height: 200px;
            background-color: #f9f9f9;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f9f9f9;
        }

        .pagination {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .pagination a {
            padding: 5px 10px;
            margin: 0 5px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .pagination a.active {
            background-color: #ff7f50;
            color: #fff;
        }

        .profile-list {
            list-style: none;
            padding: 0;
        }

        .profile-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .profile-list li img {
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-list li .info {
            flex: 1;
        }

        .profile-list li .info span {
            display: block;
        }

        .profile-list li .info span.name {
            font-weight: bold;
        }

        .profile-list li .info span.country {
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img alt="Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/Sx87aQIFRObIIxaVvLp4LTYucQuS6fsHJ7mHeBaueWbnXconA.jpg"
                width="50" />
            <a class="active" href="#">
                <i class="fas fa-home">
                </i>
                Home
            </a>
            <a href="services-crud.html">
                <i class="fas fa-shopping-cart">
                </i>
                Ecommerce
            </a>
            <a href="#">
                <i class="fas fa-bell">
                </i>
                Notification
            </a>
            <a class="logout" href="#">
                <i class="fas fa-sign-out-alt">
                </i>
                Log out
            </a>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>
                    Dashboard
                </h1>
                <input placeholder="Search..." type="text" />
            </div>
            <div class="card">
                <div class="stats">
                    <div>
                        <i class="fas fa-tag">
                        </i>
                        <h3>
                            penjualan
                        </h3>
                        <p>
                            Rp. 1.500.000
                        </p>
                        <p>
                            <span style="color: green;">
                                +65%
                            </span>
                            last month
                        </p>
                    </div>
                    <div>
                        <i class="fas fa-users">
                        </i>
                        <h3>
                            pembeli
                        </h3>
                        <p>
                            + 120
                        </p>
                        <p>
                            <span style="color: red;">
                                +12%
                            </span>
                            last month
                        </p>
                    </div>
                    <div>
                        <i class="fas fa-dollar-sign">
                        </i>
                        <h3>
                            rata-rata keuntungan
                        </h3>
                        <p>
                            ⨦Rp. 550.000
                        </p>
                        <p>
                            <span style="color: red;">
                                +10%
                            </span>
                            last month
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3>
                    keuntungan
                </h3>
                <div class="chart-container">
                    <canvas id="revenueChart">
                    </canvas>
                </div>
            </div>
            <div class="card">
                <h3>
                    produk paling laris
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Orders
                            </th>
                            <th>
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                jasa bersih rumah
                            </td>
                            <td>
                                40
                            </td>
                            <td>
                                Rp. 35.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                jasa petcare
                            </td>
                            <td>
                                50
                            </td>
                            <td>
                                Rp. 25.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                jasa laundry
                            </td>
                            <td>
                                39
                            </td>
                            <td>
                                Rp. 40.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                jasa konsultasi kesehatan online
                            </td>
                            <td>
                                20
                            </td>
                            <td>
                                Rp. 50.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                jasa jaga rumah
                            </td>
                            <td>
                                15
                            </td>
                            <td>
                                Rp. 40.000
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <span>
                        Showing 1 - 5 of 10 Products
                    </span>
                    <a href="#">
                        Prev
                    </a>
                    <a class="active" href="#">
                        1
                    </a>
                    <a href="#">
                        2
                    </a>
                    <a href="#">
                        Next
                    </a>
                </div>
            </div>
            <div class="card">
                <h3>
                    pengunjung website
                </h3>
                <div class="chart-container">
                    <canvas id="visitorsChart">
                    </canvas>
                </div>
            </div>
            <div class="card">
                <h3>
                    New Customers
                </h3>
                <ul class="profile-list">
                    <li>
                        <img alt="Roselle Ehrman" height="40"
                            src="https://storage.googleapis.com/a1aa/image/gAOCVyJ4HaK1IdHgHd1eAlYC3uOqUkY7VMAufGeonXDpXconA.jpg"
                            width="40" />
                        <div class="info">
                            <span class="name">
                                Roselle Ehrman
                            </span>
                            <span class="country">
                                Brazil
                            </span>
                        </div>
                    </li>
                    <li>
                        <img alt="Jane Smith" height="40"
                            src="https://storage.googleapis.com/a1aa/image/sWneeoW6B7hgvUe2KBZH3Saetu3Glefq4A50WCDMBha46iD9E.jpg"
                            width="40" />
                        <div class="info">
                            <span class="name">
                                Jane Smith
                            </span>
                            <span class="country">
                                Australia
                            </span>
                        </div>
                    </li>
                    <li>
                        <img alt="Darron Handler" height="40"
                            src="https://storage.googleapis.com/a1aa/image/dN8no5CUdYpRJZPXYITKlHLbmF6bEgIr84uxbmaiu4S8iD9E.jpg"
                            width="40" />
                        <div class="info">
                            <span class="name">
                                Darron Handler
                            </span>
                            <span class="country">
                                Pakistan
                            </span>
                        </div>
                    </li>
                    <li>
                        <img alt="Leatrice Kulik" height="40"
                            src="https://storage.googleapis.com/a1aa/image/0tdelt6XLywWU6blN1OJrSeeLiEofXwNW35PcZYUcEbedxheE.jpg"
                            width="40" />
                        <div class="info">
                            <span class="name">
                                Leatrice Kulik
                            </span>
                            <span class="country">
                                Moscow
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card">
                <h3>
                    profile pembeli
                </h3>
                <div class="chart-container">
                    <canvas id="buyersProfileChart">
                    </canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="jsadmin.js"></script>
    <script>
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'serba care',
                    data: [100, 200, 300, 200, 250, 300, 350],
                    borderColor: 'green',
                    fill: false
                }, {
                    label: 'serba pet',
                    data: [50, 100, 150, 100, 150, 200, 250],
                    borderColor: 'orange',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        const visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
        const visitorsChart = new Chart(visitorsCtx, {
            type: 'doughnut',
            data: {
                labels: ['pelanggan', 'pekerja layanan', 'bukan pelanggan'],
                datasets: [{
                    data: [38, 22, 12, 28],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffce56',]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        const buyersProfileCtx = document.getElementById('buyersProfileChart').getContext('2d');
        const buyersProfileChart = new Chart(buyersProfileCtx, {
            type: 'doughnut',
            data: {
                labels: ['Male', 'Female', 'Others'],
                datasets: [{
                    data: [50, 35, 15],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>

</html>