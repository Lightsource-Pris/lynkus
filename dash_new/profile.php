<!DOCTYPE html>
<html lang="en">

<head>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600" rel="stylesheet" />
<link rel="stylesheet" href="bites/font-awesome-4.7.0/css/font-awesome.min.css" />

<!-- Animate CSS -->
<link rel="stylesheet" type="text/css" href="bites/css/animate.css" />

<!-- Bites Theme CSS -->
<link rel="stylesheet" href="bites/css/bites-theme.css" />
<link rel="stylesheet" href="edit.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
 <title>Lynk|Us Dashboard</title>
  <link rel="shortcut icon" type="" href="img/lynkus.png">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css1/style.css" rel="stylesheet">
  <link href="css1/style-responsive.css" rel="stylesheet">
  <link href="css1/style3.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <!-- <link href="css/scroll.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="css/bootstraps.min.css" type="text/css">
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
  
  #navi{
    background-color: grey;
  }
</style>
</head>  

<body>
  <?php 

require "../includes/db.php";

session_start();

if (isset($_SESSION['owners_email'])) {

  include "../roomback/ownersprofile.php";

  ?>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right"  id="navi"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>LYNK<span>|US</span></b></a>
      <!--logo end-->
      
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
        </ul>
      </div>
    </header>


   <aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="../img/signup_owner/<?php echo $owner_picture; ?>" class="img-circle" height="100" width="100"></a></p>
          <h5 class="centered"><?php echo $first_name;?></h5>
          <li class="mt">
            <a  href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li class="sub-menu">
            <a href="lease.php">
              <i class="fa fa-home"></i>
              <span>Lease</span>
              </a> 
              </li>
         
          <li class="sub-menu">
            <a class="active" href="profile.php">
              <i class="fa fa-book"></i>
              <span>Profile</span>
              </a>
          
          </li>
          <li class="sub-menu">
            <a class="" href="help.php">
              <i class="fa fa-info"></i>
              <span>Help</span>
              </a>
          
          </li>
            
      </div>
    </aside>
  
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>Search & Find Apartment</h4>
                  <br>
                  <h4>Find Your Room</h4>
                  <br>
                  <h4>Connect To Partner</h4>
                  <br>
                </div>
              </div>
         

              <div class="col-md-4 profile-text">
                <h3 ><?php echo $first_name." "; echo $last_name; ?></h3>
                <p style="color:#48cfad;">E-mail Address : <?php echo $owners_email;?>
                <br>Phone Number : <?php echo $number;?></p>
                
                <p>Hello <?php echo $first_name?>, welcome to Lynk|Us where finding an apartment, connecting to roommate & leasing your house out is made easy. This account is an owner's account!</p>
                <br>
             
              </div>
         
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="../img/signup_owner/<?php echo $owner_picture; ?>" class="img-circle" ></p>

                  <button style="background-color: #4ECDC4" type="button" class="btn btn-demonstration text-white" data-toggle="modal" data-target="#bite-21">Edit Profile</button>
                  <?php include "edit.php" ?>

                </div>
              </div>

            </div>

          </div>

          <div class="container">

        
            <div class="row">
                <div class="col-lg-12">
                    <div class="properties-title">
                        <div class="section-title">
                        <h2>Available Properties</h2>
                       
                </div>
            </div>
        </div>
       
            <div class="container" style="width:75%;">
            
            <div  class="top-properties-carousel owl-carousel" id="visible">

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
                                <img style="float: left; width:50%; height:100%;" src="../dash_new2/img/<?php echo $property_image; ?>" alt="images">
                                <img style="float: right; width:50%; height:100%;" src="../dash_new2/img/<?php echo $property_image2; ?>" alt="images">
                              </div>
                              <div style="width: 100%; height: 50%">
                                <img style="float: left; width:50%; height:100%;" src="../dash_new2/img/<?php echo $property_image3; ?>" alt="images">
                                <img style="float: right; width:50%; height:100%;" src="../dash_new2/img/<?php echo $property_image4; ?>" alt="images">
                              </div>
                            </div>                        </div>
                        <div class="col-lg-6">
                            <div class="stp-text">
                                <div class="s-text">Category</div>
                                <h2><?php echo $property_category ?></h2>
                                <div class="room-price">
                                    <span>Price:</span>
                                    <h4><?php echo $property_price ?></h4>
                                </div>
                                <div class="properties-location"><i class="fa fa-map-marker"></i> <?php echo $property_address ?></div>
                                <p> <b> Description:</b> <?php echo $property_description ?></p>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              
                 <?php }?>
            </div>

          </div>
        </div>
        </div>

      </section>

    </section>
   
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>2020</strong>. All Rights Reserved
        </p>
        <div class="credits">
 
           Created by <a href="https://complanenttechnologies.com.ng/">Complanet Technologies</a>
        </div>
        <a href="profile.html" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <script>
    $('.contact-map').click(function() {

      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Dashio Admin Theme!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>

  <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>




     <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
 
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

  <script src="lib/jquery.sparkline.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>

   <?php }else{
  echo "<script>location.href='../index.php'</script>";
} ?>
</body>

</html>
