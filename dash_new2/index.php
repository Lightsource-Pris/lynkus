<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Lynk|Us Dashboard</title>
  <link rel="shortcut icon" type="" href="../dash_new/img/lynkus.png">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css1/style.css" rel="stylesheet">
  <link href="css1/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
 <!--  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"> -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
  <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}

.button1 {background-color:#4ECDC4;} /* Green */

</style>
</head>

<body>
  <?php 
  require "../includes/db.php";

  session_start();

  if (isset($_SESSION['renters_email'])) {
  
  include "../roomback/rentersprofile.php";
  ?>
  <section id="container">
 
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>LYNK<span>|US</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../dash_new/logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
 
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="../img/signup_renter/<?php echo $renter_picture;?>" class="img-circle" height="100" width="100"></a></p>
          <h5 class="centered"><?php echo $first_name;?></h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="profile.php">
              <i class="fa fa-book"></i>
              <span>Profile</span>
              </a>
         
          </li>


          <li class="sub-menu">
            <a href="help.php">
              <i class="fa fa-info"></i>
              <span>Help</span>
              </a>
         
          </li>
          <li class="sub-menu">
            
      </div>
    </aside>
 
    <section id="main-content" >
      <section class="wrapper site-min-height" >
        <div class="row mt" >
          <div class="col-lg-12">
            <!-- CHART PANELS -->
            <div class="row"  >

             <p style="text-align:center; font-size:30px;"><b>Available Properties</b></p>

                <?php 

                     function phpAlert($msg){
                    echo '<script type="text/javascript">alert("'.$msg .'")</script>';
                     }

                    $query = "SELECT * FROM properties WHERE property_status = 'approved' ";
                    $select_properties_query = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_array($select_properties_query)){

                       $id = $row['property_id'];
                       $property_category = $row['property_category'];
                       $property_price = $row['property_price'];
                       $property_address = $row['property_address'];
                       $property_description = $row['property_description'];
                       $property_image = $row['property_image'];
                       $property_image2 = $row['property_image2'];
                       $property_image3 = $row['property_image3'];
                       $property_image4 = $row['property_image4'];
                       // $property_date = $row['area'];
                    
                    ?>

              <div class="col-md-4 col-sm-4 mb" >

                <div class="grey-panel pn donut-chart" style="height: 600px; width: 100%" >
                  <div class="grey-header"  >
                    <div style="">
                    <img style="width: 50%; height: 125px; float: left" src="img/<?php echo $property_image; ?>" alt="image 1 not available">
                    <img style="width: 50%; height: 125px; float: right;" src="img/<?php echo $property_image2; ?>" alt="image 2 not available">
                  </div>
                    <div>
                    <img style="width: 50%; height: 125px;float:left " src="img/<?php echo $property_image3; ?>" alt="image 3 not available">
                    <img style="width: 50%; height: 125px;float: right" src="img/<?php echo $property_image4; ?>" alt="image 4 not available">
                  </div>
                  </div>
                  <canvas id="serverstatus01" height="20" width="20"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 70,
                        color: "#FF6B6B"
                      },
                      {
                        value: 30,
                        color: "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                  </script>

                  <div class="row">

                  <div class="col-sm-12 goleft">
                  <h2 style="text-align:center; color:#2f323a;"></style><?php echo $property_category; ?></h2>
                  </div>
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p><b>LOCATION:</b> <?php echo $property_address; ?></p>
                    </div>
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p><b>PRICE</b> <?php echo $property_price; ?></p>
                    </div>
                    <div class="col-sm-12 goleft">
                      <p><b>DESCRIPTION:</b> <?php echo $property_description; ?></p>
                    </div>
               
                  </div>


                  <div>
                  <a href="sendrequest.php?id=<?php echo $id;?>"><button class="button button1" name="submit" value="submit">Send Request</button></a>
                  </div>
                </div>

                <br><br>

              </div>

              <?php

                  }

                ?>
              
            </div>
            
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
   <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>2020</strong>. All Rights Reserved
        </p>
        <div class="credits">
        
           Created by <a href="https://complanenttechnologies.com.ng/">Complanet Technologies</a>
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>

<?php }

else{
  echo "<script>location.href='../index.php'</script>";
}

?>


<script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>