<?php
// Database connection details
$host = 'localhost';
$db = 'orders_db'; // Desired database name
$user = 'root';    // MySQL username
$pass = '';        // MySQL password

try {
    // Connect to MySQL server
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 1: Create Database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $db");
    echo "";

    // Step 2: Connect to the newly created database
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // Step 4: Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $sale = $_POST['sale'];
        $price = $_POST['price'];
        $order_quantity = $_POST['order'];
        $sale_date = $_POST['sale-date'];

        // Step 5: Insert the order details into the 'orders' table
        $sql = "INSERT INTO orders (sale, price, order_quantity, sale_date) VALUES (:sale, :price, :order_quantity, :sale_date)";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters to the SQL query
        $stmt->bindParam(':sale', $sale);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':order_quantity', $order_quantity);
        $stmt->bindParam(':sale_date', $sale_date);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Thanks for your order!');</script>";
        } else {
            echo "Failed to save the order.";
        }
    }
} catch (PDOException $e) {
    // Display error if any
    echo "Database error: " . $e->getMessage();
}
?>