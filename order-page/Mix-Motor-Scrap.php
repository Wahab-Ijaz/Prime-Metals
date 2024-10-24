<?php
include 'submit_order.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Mix Motor Scrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #1D8014 100%);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
        }

        .order-container {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 20px;
        }
        .order-image img {
            width: 100%;
            height: 500px;
            border-radius: 50%;
            object-fit: cover;
        }

        .order-details h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .order-details label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .order-details input,
        .order-details button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .order-details button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px;
        }

        .order-details button:hover {
            background-color: #218838;
        }

        .content-section {
            margin-top: 15px;
            width: 100%;
            background-color: black;
            padding: 20px;
            text-align: center;
            border-radius: 20px;
        }

        .content-section h2 {
            color: white;
            font-size: 1.5rem;
            font-weight: bolder;
        }

        .content-section p {
            color: white;
            font-size: 1.2rem;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Order Container -->
        <div class="order-container row align-items-center">
            <!-- Image Section -->
            <div class="order-image col-md-6 mb-4 mb-md-0">
                <img src="../assets/img/motor.jpeg" alt="Mix Motor" class="img-fluid">
            </div>
            <!-- Details Section -->
            <div class="order-details col-md-6">
                <h2>Mix Motor Scrap</h2>
                <form method="POST" action="">
                    <label for="sale">Sale/Purchase</label>
                    <input type="text" id="sale" name="sale" placeholder="Enter sale amount">

                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter price">

                    <label for="order">Order Quantity</label>
                    <input type="number" id="order" name="order" placeholder="Enter order quantity">

                    <label for="sale-date">Sale/Purchase Date</label>
                    <input type="date" id="sale-date" name="sale-date">

                    <button type="submit">Order Now</button>
                </form>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <h2>Mix Motor Scrap</h2>
            <p>Our Mix Motor Scrap consists of various types of motor scrap, rich in copper content. At DYNAMIC METALS, we employ sophisticated recycling techniques to break down the motors, meticulously extracting copper, which is then processed into premium-grade copper ingots. These ingots are exported to meet the needs of our international clients.</p>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>