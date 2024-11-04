<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Real Estate PHP">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- Css Link -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Title -->
    <title>Real Estate PHP</title>
</head>

<body>

    <!--	Page Loader -->
    <!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> -->

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <!--	Banner   --->
            <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>About US</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
            <!--	Banner   --->

            <!--	About Our Company -->
            <div class="full-row">
                <div class="container">


                    <?php

                    $query = mysqli_query($con, "SELECT * FROM about");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?php echo $row['1']; ?></h3>
                            </div>
                        </div>
                        <div class="row about-company">
                            <div class="col-md-12 col-lg-7">
                                <div class="about-content">
                                    <p>Welcome to our Website, your trusted partner in real estate. Whether you’re looking to buy, sell, or invest, we are here to make your real estate journey smooth and successful. With years of experience and a deep understanding of the market, we specialize in connecting people with their dream homes and lucrative investment opportunities.</p><br>
                                    <h3>Who We Are</h3>
                                    <p> we are more than just real estate agents—we are advisors, negotiators, and advocates for your best interests. Our team is made up of seasoned professionals with expertise across residential, commercial, and rental properties. From first-time homebuyers to seasoned investors, we work closely with our clients to understand their unique needs and deliver results that exceed expectations.</p><br>
                                    <h3>What We Do</h3>
                                    <p>We offer a full suite of real estate services, including:

                                        Buying & Selling: Whether you're buying your first home or selling a property, we guide you through every step, from market analysis to closing deals.
                                        Property Management: We manage rental properties for landlords, ensuring your property is maintained and your tenants are satisfied.
                                        Investment Consultation: Looking to grow your real estate portfolio? We provide insights and opportunities that align with your financial goals.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-5 mt-5">
                                <div class="about-img"> <img src="admin/upload/<?php echo $row['3']; ?>" alt="about image"> </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
            <!--	About Our Company -->

            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->

            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>