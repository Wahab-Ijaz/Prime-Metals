<?php
include 'submit_order.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Aluminum Cable</title>
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
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            margin-top: 10px;
        }
        .order-image img {
            width: 100%;
            height: 500px;
            border-radius: 50%;
            object-fit: cover;
        }

        .order-content {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #f9f9f9;
        }

        .order-details h2 {
            margin-bottom: 20px;
            color: #333;
            font-weight: 900;
        }

        .order-details label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .order-details input,
        .order-details button {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .order-details button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            padding: 15px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .order-details button:hover {
            background-color: #218838;
        }

        .content-section {
            width: 100%;
            padding: 20px;
            background-color: black;
            text-align: center;
            margin-top: 10px;
            border-radius: 20px;
        }

        .content-section h2 {
            color: white;
            font-size: 2rem;
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
            <div class="order-image col-md-6">
                <img src="../assets/img/aluminum-cable.jpeg" alt="Aluminum Cable" class="img-fluid">
            </div>
            <!-- Content Section -->
            <div class="order-content col-md-6">
                <div class="order-details">
                    <h2>Order Aluminum Cable Cutting Scrap</h2>
                    <form method="POST" action="">
                        <label for="sale">Sale/Purchase Amount</label>
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
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <h2>Aluminum Cable Cutting Scrap</h2>
            <p>
                Aluminium Cable Cutting Scrap is a key raw material in our recycling operations.
                DYNAMIC METALS utilizes advanced methods to separate aluminium from the plastic insulation.
                The recovered aluminium is then processed into ingots of superior quality, which are highly sought after
                in international markets.
            </p>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>