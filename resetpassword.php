<?php
include './database/db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password === $confirmPassword) {
        // Prepare and execute
        $stmt = $conn->prepare("UPDATE userdata SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $password, $email);

        if ($stmt->execute()) {
            $message = "Password updated successfully";
            $toastClass = "bg-success";
        } else {
            $message = "Error updating password";
            $toastClass = "bg-danger";
        }

        $stmt->close();
    } else {
        $message = "Passwords do not match";
        $toastClass = "bg-warning";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, 
                   initial-scale=1.0">
    <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" href=
"https://cdn-icons-png.flaticon.com/512/295/295128.png">
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src=
"https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Reset Password</title>
      <style>
             *{
            margin: 0;
            padding: 0;
            box-sizing: border-box  ;
        }
        body {
            overflow: hidden;
            height: 100vh;
            display: grid;
            place-items: center;
             background-color: black;
        }
  video#backgroundVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .form {
            height: auto;
            width: 520px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px,
                rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            border-radius: 10px;
            background-color: transparent;
            backdrop-filter: blur(4px);
            ;
        }

        .form .form-logo {
            border-radius: 50%;
        }

        .form .form-control,
        .btn {
            border-radius: 10px;
            margin-top: 5px;

        }

        .form label {
            color: white;
            font-size: 1.1rem;
          
        }
    </style>
</head>

<body>
  <video autoplay muted loop id="backgroundVideo" >
        <source src="./assets/img/Video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container p-5 d-flex flex-column align-items-center">
        <?php if ($message): ?>
            <div class="toast align-items-center text-white border-0" role="alert"
          aria-live="assertive" aria-atomic="true"
                style="background-color: <?php echo $toastClass === 'bg-success' ? 
                '#28a745' : ($toastClass === 'bg-danger' ? '#dc3545' :
                ($toastClass === 'bg-warning' ? '#ffc107' : '')); ?>">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo $message; ?>
                    </div>
                    <button type="button" class="btn-close 
                    btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        <?php endif; ?>
        <form action="" method="post" class="form-control form mt-5 p-4"">
            <div class="row">
                  <div class="col-md-5 mx-auto mt-2 text-center">
                    <img src="./assets/img/website-logo.jpeg" class="img-fluide form-logo" height="100px" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center">
                    <h5 class="p-4" style="font-weight: 600;color:white; letter-spacing:1px;">Change Your Password</h5>
                </div>
               
            </div>
            <div class="col-mb-3 position-relative">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" name="email" id="email" 
                  class="form-control" required>
                <span id="email-check" class="position-absolute"
                    style="right: 10px; top: 50%; transform: translateY(-50%);"></span>
            </div>
            <div class="col mb-3 mt-3">
                <label for="password"><i class="fa fa-lock"></i> 
                  Password</label>
                <input type="text" name="password"
                  id="password" class="form-control" required>
            </div>
            <div class="col mb-3 mt-3">
                <label for="confirm_password"><i 
                  class="fa fa-lock"></i> Confirm Password</label>
                <input type="text" name="confirm_password" 
                  id="confirm_password"
                  class="form-control" required>
            </div>
            <div class="col mb-3 mt-3">
                <button type="submit" class="btn bg-success  w-100" 
                  style="font-weight: 600; color:white;letter-spacing: 2px;" >
                  Reset Password</button>
            </div>
            <div class="col mb-2 mt-4">
                <p class="text-center" style="font-weight: 600;
                color: navy;"><a href="./register.php"
                        style="text-decoration: none;">
                  Create Account</a> OR <a href="./login.php"
                        style="text-decoration: none;">Login</a></p>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('#email').on('blur', function () {
                var email = $(this).val();
                if (email) {
                    $.ajax({
                        url: 'check_email.php',
                        type: 'POST',
                        data: { email: email },
                        success: function (response) {
                            if (response == 'exists') {
                                $('#email-check').html('<i class="fa fa-check text-success"></i>');
                            } else {
                                $('#email-check').html('<i class="fa fa-timestext-danger"></i>');
                            }
                        }
                    });
                } else {
                    $('#email-check').html('');
                }
            });

            let toastElList = [].slice.call(document.querySelectorAll('.toast'))
            let toastList = toastElList.map(function (toastEl) {
                return new bootstrap.Toast(toastEl, { delay: 3000 });
            });
            toastList.forEach(toast => toast.show());
        });
    </script>
</body>

</html>
