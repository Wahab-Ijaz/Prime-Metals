<?php
session_start();
// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/website-logo.jpeg" type="image/x-icon">
    <title>DYNAMIC METALS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <button class="top-btn"><i class="fa-solid fa-angle-up fa-beat fa-lg" style="color: #ffffff;"></i></button>
    <a href="https://wa.me/+923228425431"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" id="scrollTopBtn" alt="WhatsApp Logo" class="whatsapp-logo"></a>
    <section class="top_header p-2 d-none d-lg-block ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 text-right">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-3">
                            <div class="text-center">
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                        </div>
                        <div class="col-md-4 col-6 text-center">
                            <i class="fas fa-envelope me-1"></i> <span class="text-light">Email:</span> <a href="mailto:wahabijaz051@gmail.com" style="   color: white; 
            text-decoration: none;">wahabijaz051@gmail.com</a>
                        </div>
                        <div class="col-md-3 col-6 text-center ">
                            <i class="fas fa-phone me-1"></i> <span>Mobile: 0092 322 8425431</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Section -->
    <section class="header">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between align-items-center p-2">
                <div class="col-6 col-md-2 col-lg-2 text-center">
                    <a href="./index.php"><img src="./assets/img/website-logo.jpeg" alt="logo" class="img-fluid rounded-circle" height="100px" width="100px" /></a>
                </div>
                <div class="col-md-9 col-lg-8 mx-auto d-none d-lg-block">
                    <ul class="heads-list">
                        <li><a href="./index.php"><i class="fas fa-home me-1"></i> Home</a></li>
                        <li><a href="about.php"><i class="fas fa-user me-1"></i> About</a></li>
                        <li><a href="./contact.php"><i class="fas fa-envelope me-1"></i> Contact Us</a></li>
                        <li><a href="./gallery.php"><i class="fas fa-images me-1"></i> Gallery</a></li>
                        <li class="dropdown">
                            <a class="dropbtn "><i class="fas fa-concierge-bell"></i> Services</a>
                            <div class="dropdown-content">
                                <a href="./order-page/Aluminum-Cable.php">Aluminum Cable Cutting Scrap</a>
                                <a href="./order-page/Aluminium-ingot.php">Aluminium Ingot</a>
                                <a href="./order-page/Compressor-Scrap.php">Compressor Scrap</a>
                                <a href="./order-page/Mix-Motor-Scrap.php">Mix Motor Scrap</a>
                                <a href="./order-page/Copper-Ingot.php">Copper Ingot</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1 col-lg-2 d-none d-lg-block text-center">
                    <a href="./logout.php" class="btn btn-danger">Logout</a>
                </div>
                <div class="col-6 col-md-2 d-block d-lg-none text-center">
                    <span><i class="fa-solid fa-bars" onclick="toggleContent()" id="show-icon" style="color: white;font-size:40px"></i></span>
                    <span><i class="fa-solid fa-xmark" onclick="toggleContent()" id="hide-icon" style="display:none; color: white; font-size:45px;"></i></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Slidebar Section -->
    <section class="slide-bar" id="slideshow" style="display:none;">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-3 text-left">
                                <div class="col-12">
                                    <a href="logout.php" class="btn btn-danger">Logout</a>
                                </div>
                            </div>
                            <div class="row text-left mt-3">
                                <div class="col-12">
                                    <ul class="heads-lists">
                                        <li><a href="./index.php"><i class="fas fa-home me-1"></i> Home</a></li>
                                        <li><a href="./about.php"><i class="fas fa-user me-1"></i> About</a></li>
                                        <li><a href="./contact.php"><i class="fas fa-envelope me-1"></i> Contact Us</a></li>
                                        <li><a href="./gallery.php"><i class="fas fa-images me-1"></i> Gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>