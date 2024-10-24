<?php
session_start();
include 'db.php'; // Include database connection

// Handle forgot password form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset_password'])) {
    $email = trim($_POST['email']);

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(50)); // Generate a unique token
        $expire_time = date("Y-m-d H:i:s", strtotime('+1 hour')); // Token valid for 1 hour

        // Insert token into database
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token, expire_time) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $token, $expire_time);

        if ($stmt->execute()) {
            // Send the reset email (configure this part as needed)
            $reset_link = "http://yourwebsite.com/reset_password.php?token=" . $token;
            $subject = "Password Reset Request";
            $message = "Click the following link to reset your password: " . $reset_link;
            $headers = "From: no-reply@yourwebsite.com";

            if (mail($email, $subject, $message, $headers)) {
                $success = "A password reset link has been sent to your email.";
            } else {
                $error = "Failed to send the email.";
            }
        } else {
            // Display SQL error
            $error = "Error: " . $conn->error;
        }
    } else {
        $error = "No account found with this email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #1D8014 100%);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 400px;
            padding: 20px;
            height: 300px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }

        h2 {
            color: #1D8014;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        form input {
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        form input:focus {
            box-shadow: 0 0 5px rgba(81, 203, 238, 1);
            border-color: rgba(81, 203, 238, 1);
        }

        button {
            background-color: #5b9bd5;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        button:hover {
            background-color: #4a89d5;
        }

        .alert {
            margin-bottom: 15px;
        }

        .input-group-text {
            background-color: #5b9bd5;
            color: white;
        }

        .input-group-text i {
            font-size: 1.2rem;
        }

        .form-label {
            color: #4a4a4a;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Forgot Password</h2>
        <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } elseif (isset($success)) { ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php } ?>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Please enter a valid email.</div>
                </div>
            </div>
            <button type="submit" name="reset_password" class="btn btn-primary">Reset Password</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>