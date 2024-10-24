<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$companyName = $_POST['companyName'];
$companyLocation = $_POST['companyLocation'];
$message = $_POST['message'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contacts (username, email, phone, companyName, companyLocation, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $username, $email, $phone, $companyName, $companyLocation, $message);

// Execute the statement
if ($stmt->execute()) {
    // Redirect after successful submission
    header("Location:index.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
