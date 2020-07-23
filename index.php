<!DOCTYPE>
<?php include "includes/db.php"; ?>
<head>
    <meta charset="UTF-8html">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lynk|Us</title>
    <link rel="shortcut icon" type="" href="dash_new/img/lynkus.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
    .con{
        margin-top: 15px;
        margin-left: 150px; 
        padding-left: -300px;
    }

</style>
</head>

<body>
    <!-- Page Preloder -->
    <?php 
    session_start();
    session_destroy();
    ?>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        
        <nav class="main-menu">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="dash_new/login.php">login</a></li>
                                <li><a href="dash_new/signup.php">Signup</a></li>

                            </ul>
                        </nav>
        <div class="nav-logo-right">
            <ul>
                <li>
                    <i class="icon_phone"></i>
                    <div class="info-text">
                        <span>Phone:</span>
                        <p>(+234) 8173058460</p>
                    </div>
                </li>
                 <li>
                    <i class="icon_map"></i>
                        <div class="info-text">
                            <span>Address:</span>
                                <p>CPTS, Abeokuta <!-- <span>NY</span> --></p>
                        </div>
                    </li>
                <li>
                    <i class="icon_mail"></i>
                    <div class="info-text">
                        <span>Email:</span>
                        <p>info@complanettechnologies.com.ng</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
   
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <nav class="main-menu">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="dash_new/login.php">login</a></li>
                                <li><a href="dash_new/signup.php">Signup</a></li>

                            </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="nav-logo">
            <div class="container">
                <div class="row">
                    <div style="margin-right:;">
                        <div class="logo">
                            <a href="index.php" style="color:black; font-size:40px; font-weight:bold;">Lynk|Us</a>
                        </div>
                    </div>
                    <div class="con" style="height: 100px;">
                        <div class="nav-logo-right">

                            <ul>
                                <li style="">
                                    <i class="icon_mail"></i>
                                    <div class="info-text">
                                        <span>Email:</span>
                                        <p>info@complanettechnolgies.com.ng</p>
                                    </div>
                                </li>
                                <li style="">
                                    <i class="icon_phone"></i>
                                    <div class="info-text">
                                        <span>Phone:</span>
                                        <p>(+234) 8173058460</p>
                                    </div>
                                </li>
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text" >
                                <p class="room-location"><i class="icon_pin"></i> 185, Olabisi Onabanjo Way, Iyana Mortuary, Abeokuta</p>
                                <h2>THIS IS WHERE YOU GET LINKED!</h2>
                            
                                <ul class="room-features">
                                    <li>
                                        <!-- <i class="fa fa-arrows"></i> -->
                                        <p>Get Room</p>
                                    </li>
                                    <li>
                                        <!-- <i class="fa fa-bed"></i> -->
                                        <p>Lease Room</p>
                                    </li>
                                    <li>
                                        <!-- <i class="fa fa-bath"></i> -->
                                        <p>Get Partner</p>
                                    </li>
                                    <li>
                                        <!-- <i class="fa fa-car"></i> -->
                                        <p>Easy!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
<div class="hero-text" >
                                <p class="room-location"><i class="icon_pin"></i> 185, Olabisi Onabanjo Way, Iyana Mortuary, Abeokuta</p>
                                <h2>THIS IS WHERE YOU GET LINKED!</h2>
                    
                                <ul class="room-features">
                                    <li>
                                        <!-- <i class="fa fa-arrows"></i> -->
                                        <p>Get Room</p>
                                    </li>
                                    <li>
                                        <!-- <i class="fa fa-bed"></i> -->
                                        <p>Lease Room</p>
                                    </li>
                                    <li>
                                        <!-- <i class="fa fa-bath"></i> -->
                                        <p>Get Partner</p>
                                    </li>
                                    <li>
                                        <!-- <i class="fa fa-car"></i> -->
                                        <p>Easy!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/hero/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text">
                                <p class="room-location"><i class="icon_pin"></i> 154, Olabisi Onabanjo Way, Iyana Mortuary, Abeokuta</p>
                                <h2>THIS IS WHERE YOU GET LINKED!</h2>
                                
                                <ul class="room-features">
                                    <li>
                                       <p>Get Room</p>
                                    </li>
                                    <li>
                                
                                        <p>Lease Room</p>
                                    </li>
                                    <li>
                                        <p>Get Partner</p>
                                    </li>
                                    <li>
                                        <p>Easy!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumbnail-pic">
            <div class="thumbs owl-carousel">
                <div class="item">
                    <img src="img/hero/dot-1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/hero/dot-2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/hero/dot-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Search Form Section Begin -->
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <a href="dash_new/login.php"> <div class="search-text">
                        <i class="fa fa-home"></i>
                            get a house
                        </div>
                    </a>
                    <a href="dash_new/login.php">
                        <div class="home-text">
                            Find A Partner
                        </div>
                    </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 
    <section class="howit-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Find The best Partner, find the best room</span>
                        <h2>How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-works-1.png" alt="">
                        <h4>Search & Find Apartment</h4>
                        <p>This ends your struggles! Explore our site and galleries to find the most suitable apartment for yourself</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-works-2.png" alt="">
                        <h4>Find Your Room</h4>
                        <p>You are probably looking for a single room. Relax! it is just at your finger tips</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-works-3.png" alt="">
                        <h4>Connect To Partner</h4>
                        <p>Are you tired of staying alone and you need a partner? Find a room mate now..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Video Section Begin -->
    <div class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Find The Perfect</h2>
                        <h2> Apartment for <b>YOU<b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="top-properties-section spad">
   
        <div class="container">

        
            <div class="row">
                <div class="col-lg-12">
                    <div class="properties-title">
                        <div class="section-title">
                        <h2>Available Properties</h2>
                        </div>
                        <!-- <a href="rent.php" class="top-property-all">View All Properties</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="top-properties-carousel owl-carousel">
             <?php

        $query = "SELECT * FROM properties WHERE property_status = 'approved'";
        $select_property = mysqli_query($connection, $query);

        while($row=mysqli_fetch_assoc($select_property)){   

        $property_id = $row['property_id'];
        $property_category = $row['property_category'];
        $property_price = $row['property_price'];
        $property_address = $row['property_address'];
        $property_description = $row['property_description'];
        $property_image = $row['property_image'];
        $property_image2 = $row['property_image2'];
        $property_image3 = $row['property_image3'];
        $property_image4 = $row['property_image4'];
        
        $property_date = $row['property_date'];

        ?>
                <div class="single-top-properties">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="stp-pic" style="width: 100%; height: 400px;">
                                <div style="width: 100%; height: 50%">
                    <img style="width: 50%; height: 100%; float: left" src="dash_new2/img/<?php echo $property_image; ?>" alt="image 1 not available">
                    <img style="width: 50%; height: 100%; float: right;" src="dash_new2/img/<?php echo $property_image2; ?>" alt="image 2 not available">
                  </div>
                    <div style="width: 100%; height: 50%">
                    <img style="width: 50%; height: 100%;float:left " src="dash_new2/img/<?php echo $property_image3; ?>" alt="image 3 not available">
                    <img style="width: 50%; height: 100%;float: right" src="dash_new2/img/<?php echo $property_image4; ?>" alt="image 4 not available">
                  </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="stp-text">
                                <div class="s-text">Category</div>
                                <h2><?php echo $property_category ?></h2>
                                <div class="room-price">
                                    <span>Price:</span>
                                    <h4><?php echo $property_price ?></h4>
                                </div>
                                <div class="properties-location"><i class="icon_pin"></i><?php echo $property_address ?></div>
                                <p><?php echo $property_description ?></p>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <p>Lease</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <p>Rent</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-hotel"></i>
                                        <p>Comfort</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-smile-o"></i>
                                        <p>Happy Clients</p>
                                    </li>
                            </div>
                        </div>
                    </div>
                </div>
               
                 <?php }?>
            </div>

           
        </div>
    </div>
    
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="index.html" style="font-weight:bold; color:blue; font-size:30px;">Link|Us.</a>
                            </div>
                            <p>Subscribe to our newsletter</p>
                            <form action="#" class="newslatter-form">
                                <input type="text" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-location-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="footer-widget">
                            <h4>Available Areas</h4>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Camp</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Isolu</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Oluwo</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Gate</a></li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Obantoko</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h4>Social</h4>
                            <ul class="social">
                                <li><i class="ti-facebook"></i> <a href="#">Facebook</a></li>
                                <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                                <li><i class="ti-twitter-alt"></i> <a href="#">Twitter</a></li>
                                <li><i class="ti-google"></i> <a href="#">Google+</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contact Us</h4>
                            <ul class="contact-option">
                                <li><i class="fa fa-map-marker"></i> 128, Olabisi Onabanjo Way, Abeokuta</li>
                                <li><i class="fa fa-phone"></i> (+234) 8173058460</li>
                                <li><i class="fa fa-envelope"></i> info@complanettechnologies.com.ng</li>
                                <li><i class="fa fa-clock-o"></i> 24/7 round the clock!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Designed and Powered by <a href="https://complanenttechnologies.com.ng" target="_blank">Complanet Technologies</a>
 </p></p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>