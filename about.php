<?php
require_once("header.php");
?>
<!-- About 7 - Bootstrap Brain Component -->

<section class="py-3 py-md-5 py-xl-8 about " style="    background-image: url(./assets/img/parallax-2.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;">
    <div class="container mt-5">
        <div class="row justify-content-md-center mt-5">
            <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10 mt-5" data-aos="zoom-in-down" data-aos-duration="1000">
                <h2 class="mb-4 display-5 text-center mt-3">About Us</h2>
                <p class=" mb-5 text-center lead fs-4">We believe in the power of teamwork and collaboration. Our diverse experts work tirelessly to deliver innovative solutions tailored to our clients' needs.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>
</section>
<section class="card-section">
    <div class="container py-5">
        <div class="row" data-aos="zoom-in-up" data-aos-duration="1500">
            <h2 class="text-center ">About Us</h2>
            <div class="col-md-12 d-flex justify-content-center">
                <span></span>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 col-xxl-12 mx-auto d-flex justify-content-lg-center align-item-cente mt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="about-text p-4">
                    <p class="text-center "> DYNAMIC METALS (PRIVATE) LIMITED is one of Pakistan's fastest-growing companies in the field of metal manufacturing and recycling. With a robust workforce comprising hundreds of skilled professionals and a deep reservoir of technical expertise, we are committed to delivering products that meet the highest international standards. Our raw materials are meticulously sourced from trusted suppliers across the globe, including the United States, Europe, and China, ensuring consistent quality and excellence in our output.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once("footer.php");
?>
<!-- <?php
// Database connection details
$host = 'localhost';
$db = 'orders_db'; // Database name
$user = 'root';    // MySQL username
$pass = '';        // MySQL password (use your own password)

try {
    // Create a connection to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $sale = $_POST['sale'];
        $price = $_POST['price'];
        $order_quantity = $_POST['order'];
        $sale_date = $_POST['sale-date'];
        
        // SQL query to insert the order details into the database
        $sql = "INSERT INTO orders (sale, price, order_quantity, sale_date) VALUES (:sale, :price, :order_quantity, :sale_date)";
        
        // Prepare the SQL statement
        $stmt = $pdo->prepare($sql);
        
        // Bind the parameters to the SQL query
        $stmt->bindParam(':sale', $sale);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':order_quantity', $order_quantity);
        $stmt->bindParam(':sale_date', $sale_date);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Order successfully saved!";
        } else {
            echo "Failed to save the order.";
        }
    }
} catch (PDOException $e) {
    // If there's an error connecting to the database, show the error
    echo "Database error: " . $e->getMessage();
}
?>
 -->