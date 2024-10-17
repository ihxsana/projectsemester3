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
<html lang="id">

<head>
    <title>
        halamanpemesanan
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="stylehalaman.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9f7;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left,
        .right {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .left {
            width: 60%;
        }

        .right {
            width: 35%;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .section input,
        .section select,
        .section textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        .section .toggle {
            display: flex;
            align-items: center;
        }

        .section .toggle input {
            margin-right: 10px;
        }

        .order-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .order-summary {
            border-top: 1px solid #e0e0e0;
            padding-top: 20px;
        }

        #order-summary {
            margin-bottom: 20px;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .order-summary .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .item-name {
            font-weight: bold;
        }

        .item-price {
            color: #666;
        }

        .remove-btn {
            background-color: #ff4444;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .remove-btn:hover {
            background-color: #cc0000;
        }

        #total {
            font-size: 1.2em;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 2px solid #333;
        }

        .order-summary .item .details {
            flex: 1;
        }

        .order-summary .item .quantity {
            display: flex;
            align-items: center;
        }

        .order-summary .item .quantity button {
            background-color: #f0f0f0;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .order-summary .item .quantity input {
            width: 30px;
            text-align: center;
            border: 1px solid #e0e0e0;
            margin: 0 5px;
        }

        .order-summary .total {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            margin-top: 20px;
        }

        .order-summary .confirm {
            background-color: #2d2d2d;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        .payment-method {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .payment-method label {
            display: flex;
            align-items: center;
        }

        .payment-method input {
            margin-right: 10px;
        }

        .payment-section {
            margin-top: 30px;
        }

        .payment-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            background-color: #f8f8f8;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .payment-option:hover {
            border-color: #2d2d2d;
        }

        .payment-option input[type="radio"] {
            display: none;
        }

        .checkmark {
            width: 20px;
            height: 20px;
            border: 2px solid #2d2d2d;
            border-radius: 50%;
            margin-right: 15px;
            position: relative;
        }

        .payment-option input[type="radio"]:checked+.checkmark::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 12px;
            height: 12px;
            background-color: #2d2d2d;
            border-radius: 50%;
        }

        .payment-icon {
            font-size: 24px;
            margin-right: 15px;
            color: #2d2d2d;
        }

        .payment-text {
            font-weight: 600;
            font-size: 16px;
        }

        .payment-details {
            margin-left: auto;
            font-size: 14px;
            color: #666;
        }

        .show-receipt-btn {
            background-color: #2d2d2d;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            border: none;
            width: 100%;
            font-size: 16px;
        }

        .show-receipt-btn:hover {
            background-color: #444;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .confirm-order-btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            border: none;
            width: 100%;
            font-size: 16px;
        }

        .confirm-order-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navigation">
            <a href="home.php" class="line">Beranda</a>
            <a href="tentang kami.php" class="line">Tentang Kami</a>
            <a href="forumdiskusi.php" class="line">Forum Diskusi</a>
            <a href="halamanpemesanan.php" style="border-bottom: 4px solid #fff; padding-bottom: 4px;">Pesanan</a>
            <button class= "btnlogin-popup" id="login-btn"><?php echo $user['name']; ?></button>
            <div class="dropdown" id="logout-dropdown">
                <button class="profil-btn">Profil</button>
                <button class="logout-btn">Logout</button>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="left">
            <div class="section">
                <h2>
                    Informasi Pengiriman
                </h2>
                <input placeholder="Name" type="text" value="" />
                <input placeholder="Mobile Number" type="number" value="" />
                <input placeholder="Email" type="email" value="" />
                <input placeholder="City" type="text" value="" />
                <input placeholder="State" type="text" value="" />
                <input placeholder="ZIP" type="text" value="" />
                <input placeholder="Address" type="text" value="" />
            </div>
            <div class="section">
                <h2>
                    Jadwal Pengiriman
                </h2>
                <input placeholder="Dates" type="date" value="" />
                <textarea placeholder="type your note"></textarea>
            </div>
            <div class="section payment-section">
                <h2>Metode Pembayaran</h2>
                <div class="payment-options">
                    <label class="payment-option">
                        <input type="radio" name="payment" value="online">
                        <span class="checkmark"></span>
                        <span class="payment-icon"><i class="fas fa-credit-card"></i></span>
                        <span class="payment-text">Online Payment</span>
                        <span class="payment-details">(transfer to BCA 7104077892)</span>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment" value="cash" checked>
                        <span class="checkmark"></span>
                        <span class="payment-icon"><i class="fas fa-money-bill-wave"></i></span>
                        <span class="payment-text">Cash on Delivery</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="order-container">
                <h2>
                    Ringkasan Pemesanan
                </h2>
                <div id="order-summary"></div>
                <div id="total"></div>
                <!-- Add the new button here -->
                <button id="show-receipt" class="show-receipt-btn">Checkout</button>
            </div>
            <!-- Add the modal for the receipt -->
            <div id="receipt-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Detail Pesanan</h2>
                    <div id="receipt-content"></div>
                </div>
            </div>
        </div>
        <script>

const loginBtn = document.querySelector('.btnlogin-popup');
const loginPopup = document.querySelector('.login-popup');
const logoutDropdown = document.getElementById('logout-dropdown');
const logoutBtn = document.querySelector('.logout-btn');
const profilBtn = document.querySelector('.profil-btn');

document.querySelector('.btnlogin-popup').addEventListener('click', function() {
  this.classList.toggle('active');
});

profilBtn.addEventListener('click', () => {
  window.location.href = "halamanprofile.php";
});

loginBtn.addEventListener('click', () => {
  logoutDropdown.classList.toggle('show');
});

logoutBtn.addEventListener('click', () => {
  window.location.href = "logout.php";
});

            function displayOrder() {
                let order = JSON.parse(localStorage.getItem('order')) || [];
                let orderSummary = document.getElementById('order-summary');
                let total = document.getElementById('total');
                let totalPrice = 0;

                orderSummary.innerHTML = '';
                order.forEach((item, index) => {
                    orderSummary.innerHTML += `
                    <div class="order-item">
                        <span class="item-name">${item.name}</span>
                        <span class="item-price">Rp${item.price.toLocaleString()}</span>
                        <button class="remove-btn" onclick="removeItem(${index})">Hapus</button>
                    </div>
                `;
                    totalPrice += item.price;
                });

                total.innerHTML = `Total: Rp${totalPrice.toLocaleString()}`;
            }

            function removeItem(index) {
                let order = JSON.parse(localStorage.getItem('order')) || [];
                order.splice(index, 1);
                localStorage.setItem('order', JSON.stringify(order));
                displayOrder();
            }

            displayOrder();

            // Add new JavaScript for the receipt functionality
            document.getElementById('show-receipt').addEventListener('click', showReceipt);

            function showReceipt() {
                let receiptContent = document.getElementById('receipt-content');
                let modal = document.getElementById('receipt-modal');

                // Gather information
                let name = document.querySelector('input[placeholder="Name"]').value;
                let mobile = document.querySelector('input[placeholder="Mobile Number"]').value;
                let email = document.querySelector('input[placeholder="Email"]').value;
                let city = document.querySelector('input[placeholder="City"]').value;
                let state = document.querySelector('input[placeholder="State"]').value;
                let zip = document.querySelector('input[placeholder="ZIP"]').value;
                let address = document.querySelector('input[placeholder="Address"]').value;
                let date = document.querySelector('input[placeholder="Dates"]').value;
                let note = document.querySelector('textarea[placeholder="type your note"]').value;
                let paymentMethod = document.querySelector('input[name="payment"]:checked').value;

                // Create receipt HTML
                let receiptHTML = `
                    <h3>Delivery Information</h3>
                    <p>Name: ${name}</p>
                    <p>Mobile: ${mobile}</p>
                    <p>Email: ${email}</p>
                    <p>Address: ${address}, ${city}, ${state} ${zip}</p>
                    
                    <h3>Schedule Delivery</h3>
                    <p>Date: ${date}</p>
                    <p>Note: ${note}</p>
                    
                    <h3>Payment Method</h3>
                    <p>${paymentMethod === 'online' ? 'Online Payment' : 'Cash on Delivery'}</p>
                    
                    <h3>Order Summary</h3>
                    ${generateOrderSummaryWithoutDeleteButtons()}
                    ${document.getElementById('total').innerHTML}
                    
                    <button id="confirm-order" class="confirm-order-btn">Confirm Order</button>
                `;

                receiptContent.innerHTML = receiptHTML;
                modal.style.display = "block";

                // Add event listener to the confirm order button
                document.getElementById('confirm-order').addEventListener('click', confirmOrder);
            }

            function generateOrderSummaryWithoutDeleteButtons() {
                let order = JSON.parse(localStorage.getItem('order')) || [];
                let summaryHTML = '';

                order.forEach((item) => {
                    summaryHTML += `
                    <div class="order-item">
                        <span class="item-name">${item.name}</span>
                        <span class="item-price">Rp${item.price.toLocaleString()}</span>
                    </div>
                    `;
                });

                return summaryHTML;
            }

            function confirmOrder() {
                alert("Kami akan segera memproses pesanan kamu");
                document.getElementById('receipt-modal').style.display = "none";
                // Here you can add code to send the order to your backend or perform any other necessary actions
            }

            // Close modal when clicking on X
            document.querySelector('.close').onclick = function () {
                document.getElementById('receipt-modal').style.display = "none";
            }

            // Close modal when clicking outside of it
            window.onclick = function (event) {
                let modal = document.getElementById('receipt-modal');
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
</body>

</html>