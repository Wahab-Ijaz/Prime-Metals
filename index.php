
<?php
require_once("header.php");
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- First Slide with Video Background -->
        <div class="carousel-item active">
            <section class="video-background-section">
                <video autoplay muted loop>
                    <source src="./assets/img/Video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
        </div>

        <!-- Second Slide with Background Image -->
        <div class="carousel-item" style="background-image: linear-gradient(#00000038, black), url('./assets/img/pexels-alex-tepetidis-3531434-5279317.jpg');">
            <div class="row h-100 align-items-center">
                <div class=" col-md-7 mx-auto text-center">
                    <h1 class="banner_heading">DYNAMIC METALS PRIVATE LIMITED</h1>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn carousel-btn ">EXPLORE</button>
                        <a href="./contact.php"> <button class="btn carousel-btn" style="background-color: black; color: white;">CONTACT</button></a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Third Slide with Background Image -->
        <div class="carousel-item" style="background-image: linear-gradient(#00000038, black), url('./assets/img/pexels-franziska-leimkuhler-154791744-10628555.jpg');">
            <div class="row h-100 align-items-center">
                <div class="col-md-7 mx-auto text-center">
                    <h1 class="banner_heading">DYNAMIC METALS PRIVATE LIMITED</h1>
                    <p class="banner_paragraph mt-3">Buyers and Exporters of Scrap Iron and Metals.</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <button class="btn carousel-btn ">EXPLORE</button>
                        <a href="./contact.php"> <button class="btn carousel-btn" style="background-color: black; color: white;">CONTACT</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- ==================== cards ==================== -->

<section class="card-section" data-aos="zoom-in-dwon" data-aos-duration="1000">
    <div class="container py-5">
        <div class="row " data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="text-center ">Our Services</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4  mb-4" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="card-3d">
    <div class="card-inner">
        <div class="card-front">
            <img src="./assets/img/aluminum-cable.jpeg" class="img-fluid" alt="Front Image 5">
        </div>
        <div class="card-back">
            <h2 class="card-h2-cable">Aluminum Cable Cutting Scrap</h2>
            <p>Aluminium Cable Cutting Scrap is a key raw material in our recycling operations. DYNAMIC METALS utilizes advanced methods to separate aluminium from the plastic insulation. The recovered aluminium is then processed into
                ingots of superior quality, which are highly sought after in international markets.</p>
            <button class="order-btn" style=" margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;" onclick="window.location.href='./order-page/Aluminum-Cable.php'" >Order Now</button>
        </div>
    </div>
</div>


            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="card-3d">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="./assets/img/Aluminium Ingot.webp" class="img-fluid" alt="Front Image 2">
                        </div>
                        <div class="card-back">
                            <h2>Aluminium Ingot</h2>
                            <p>Our Aluminium Ingots at DYNAMIC METALS are produced through the efficient recycling of Aluminium Cable Cutting Scrap and Sandwich Sheet Scrap. The extracted aluminium undergoes a rigorous refining process, resulting in ingots
                                of exceptional purity and quality. These ingots are prized in the international market for their lightweight properties, corrosion resistance, and versatility in various manufacturing sectors. By transforming scrap
                                into high-quality aluminium ingots, we not only contribute to resource conservation but also provide our global clients with reliable, premium-grade materials.</p>
                                <button onclick="window.location.href='./order-page/Aluminium-ingot.php'"style=" margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;" class="order-btn">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="card-3d">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="./assets/img/compressor.jpeg" class="img-fluid" alt="Front Image 3">
                        </div>
                        <div class="card-back">
                            <h2>Compressor Scrap</h2>
                            <p>At DYNAMIC METALS (Pvt) Limited, our Copper Ingots are the result of a meticulous recycling process. Derived primarily from Compressor Scrap and Mix Motor Scrap, the copper is expertly extracted, melted, and refined to produce
                                ingots of the highest purity. These ingots are crafted to meet international standards and are highly valued for their superior conductivity, making them ideal for a wide range of industrial applications. Our Copper
                                Ingots are a testament to our commitment to quality and sustainability, ensuring that every piece contributes to the global demand for top-grade copper products.</p>
            <button onclick="window.location.href='./order-page/Compressor-Scrap.php'"style=" margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;" class="order-btn">Order Now</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="card-3d">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="./assets/img/motor.jpeg" class="img-fluid" alt="Front Image 4">
                        </div>
                        <div class="card-back">
                            <h2>Mix Motor Scrap</h2>
                            <p>Our Mix Motor Scrap consists of various types of motor scrap, rich in copper content. At DYNAMIC METALS, we employ sophisticated recycling techniques to break down the motors, meticulously extracting copper, which is then
                                processed into premium-grade copper ingots. These ingots are exported to meet the needs of our international clients.</p>
                                    <button onclick="window.location.href='./order-page/Mix-Motor-Scrap.php'"style=" margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;" class="order-btn">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="card-3d">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="./assets/img/Copper Ingot.jpeg" class="img-fluid" alt="Front Image 1">
                        </div>
                        <div class="card-back">
                            <h2>Copper Ingot</h2>
                            <p>Guaranteeing your electrical infrastructure is powered by high-quality, expertly installed transformers for peak performance</p>
                                <button onclick="window.location.href='./order-page/Copper-Ingot.php'"style=" margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;" class="order-btn">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>
<!-- ==================== content-section ==================== -->

<section class="text-wraper" style="    background-image: url(./assets/img/parallax-2.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-12 col-md-10 col-lg-6 mx-auto text-center mt-5 p-5" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="wpb_wrapper d-flex align-items-center  mt-3 ">
                    <h3 style="font-size: 1.5rem; font-family:Montserrat;">TOP QUALITY WITH PERSONAL ATTENTION TO YOUR NEEDS<br> EXPLORE ALL YOUR IDEAS</h3>
                </div>
                <div class="col-11 col-md-7 col-lg-8 col-xl-7 mx-auto mt-2">
                    <a href="./contact.php"> <button class="btn w-75 p-2  wrapper-btn">Contact Us</button></a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ==================== form ==================== -->
<?php
require_once("footer.php");
?>