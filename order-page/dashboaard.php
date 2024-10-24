<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orders_db";  // Modify this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if delete request is made
if (isset($_POST['delete_order'])) {
    $orderId = $_POST['order_id'];

    // Delete order query
    $deleteSql = "DELETE FROM orders WHERE id = $orderId";
    if ($conn->query($deleteSql) === TRUE) {
        echo "<script>alert('Order deleted successfully!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve all orders
$sql = "SELECT * FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f8fa;
            font-family: 'Poppins', sans-serif;
        }

        .dashboard-container {
            margin: 50px auto;
            padding: 30px;
            max-width: 1200px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #1D8014;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .status {
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }

        .status.completed {
            background-color: #28a745;
            color: white;
        }

        .status.pending {
            background-color: #ffc107;
            color: white;
        }

        .status.cancelled {
            background-color: #dc3545;
            color: white;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 20px;
            }

            th, td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

<div class="dashboard-container">
    <h1>Client Order Dashboard</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Sale Type</th>
                <th>Price</th>
                <th>Order Quantity</th>
                <th>Sale Date</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['sale'] . "</td>";
                    echo "<td>$" . $row['price'] . "</td>";
                    echo "<td>" . $row['order_quantity'] . "</td>";
                    echo "<td>" . $row['sale_date'] . "</td>";
                    echo "<td>" . $row['order_date'] . "</td>";
                    
                    // Add a sample status (you can adjust based on actual order statuses)
                    $status = "Pending"; // Default status
                    if ($row['order_quantity'] >= 100) {
                        $status = "Completed";
                    } elseif ($row['order_quantity'] < 10) {
                        $status = "Cancelled";
                    }
                    
                    $statusClass = strtolower($status);
                    echo "<td><span class='status $statusClass'>$status</span></td>";
                    
                    // Add a Delete button
                    echo "<td>
                            <form method='POST' action=''>
                                <input type='hidden' name='order_id' value='" . $row['id'] . "'>
                                <button type='submit' name='delete_order' class='btn btn-danger'>Delete</button>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='text-center'>No orders found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php
$conn->close();
?>
