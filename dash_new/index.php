<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Lynk|Us Dashboard</title>
    <link rel="shortcut icon" type="" href="img/lynkus.png">

  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css1/style.css" rel="stylesheet">
  <link href="css1/style-responsive.css" rel="stylesheet">
    <link href="css1/style3.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>


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

.button1 {background-color:#4ECDC4;}

  </style>
</head>

<body>
  <?php 

 require "../includes/db.php";

 session_start(); //starts a session

if (isset($_SESSION['owners_email'])) {

include "../roomback/ownersprofile.php"; 
  ?>

  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>LYNK<span>|US</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
         
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../index.php">Logout</a></li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="../img/signup_owner/<?php echo $owner_picture;?>" class="img-circle" height="100" width="100"></a></p>
          <h5 class="centered"><?php echo $first_name;?></h5>
          <li class="mt">
            <a  class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="" href="lease.php">
              <i class="fa fa-home"></i>
              <span>Lease</span>
              </a> 
          
          <li class="sub-menu">
            <a  href="profile.php">
              <i class="fa fa-book"></i>
              <span>Profile</span>
              </a>
          </li>
          <li class="sub-menu">
            <a  href="help.php">
              <i class="fa fa-info"></i>
              <span>Help</span>
              </a>
          </li>
            
      </div>
    </aside>

    <section id="main-content" >
      <section class="wrapper site-min-height" >
        <div class="row mt" >
          <div class="col-lg-12">
            <!-- CHART PANELS -->
            <div class="row"  >
                <p style="text-align:center; font-size:30px"><b>MY REQUESTS</b></p>

              <?php include "db.php"; 

              

                  $email = $_SESSION['owners_email'];

                  
                $query = "SELECT * FROM rent WHERE owners_email = '$email' and status ='unaccepted' ";
                $result = mysqli_query($connection,$query);



                if($result){

                  if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){

                $renter_name = $row['name'];
                $house_location = $row['location'];
                $house_picture = $row['image'];
                $house_picture2 = $row['image2'];
                $house_picture3 = $row['image3'];
                $house_picture4 = $row['image4'];
                $level = $row['llevel'];
                $course = $row['course'];
                $renters_email = $row['email_add'];

                $query2 = "SELECT *  FROM renters_details WHERE email_address = '$renters_email'  ";
                $result2 = mysqli_query($connection, $query2);
                $row2 = mysqli_fetch_array($result2);
                
                $renter_picture = $row2['picture'];
                    
                    ?>
              <div class="col-md-4 col-sm-4 mb" >

                <div class="grey-panel pn donut-chart" style="height: 650px; width: 100%" >
                  


                  <div class="col-sm-6 col-xs-6 goleft" style="width:100%;padding-left:28 %;">
                      <img style=" margin-top:30px" src="../img/signup_renter/<?php echo $renter_picture?>" class="img-circle"  width="140" height="140">
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
              
                    <div class="col-sm-6 col-xs-6" style="width:100%">
                      <p style=""><b>Name:</b><?php echo $renter_name; ?></p>
                      <p><b>Course Of Study: <?php echo $course; ?></b>  </p>
                      <p><b>Level: <?php echo $level; ?>  </p>
                      <p><b>Location: <?php echo $house_location; ?></p>
                    </div>
                  </div> 

                  <div>
                    <?php
    
                  $id = $row['ID'];
                  ?>

                  
             <div style="height: 50px; width: 90%; margin:auto;"> 
             <div style="float: left">  
    <a href='accept.php?id=<?php echo $id?>'><button class="button button1" name="accept
                  ">Accept</button></a>
                </div>

    <div style="float: right">
      <a href='reject.php?id=<?php echo $id?>'><button class="button button1" name="accept
                  ">Reject</button></a>
                </div>
</div>
                  </div> 
                  <br>

                  <div class="grey-header" style="height: 255px;">
                    <!-- <img style="width: 100%; height: 250px;" src="../dash_new2/img/<?php //echo $house_picture; ?>" alt="image"> -->
                    <div style="height: ">
                    <img style="width: 50%; height: 125px; float: left" src="../dash_new2/img/<?php echo $house_picture; ?>" alt="image 1 not available">
                    <img style="width: 50%; height: 125px; float: right;" src="../dash_new2/img/<?php echo $house_picture2; ?>" alt="image 2 not available">
                  </div>
                    <div>
                    <img style="width: 50%; height: 125px;float:left " src="../dash_new2/img/<?php echo $house_picture3; ?>" alt="image 3 not available">
                    <img style="width: 50%; height: 125px;float: right" src="../dash_new2/img/<?php echo $house_picture4; ?>" alt="image 4 not available">
                  </div>
                  </div>


                </div>

                <br><br><br><br>
                <!-- /grey-panel -->
              </div>

              <?php


                  }

                }else{
                    echo "You have no requests yet";
                  }

                }

                ?>

            </div>
      
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
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

  <script type="text/javascript">
    
  </script>
<?php }else{
  echo "<script>location.href='../index.php'</script>";
} ?>
</body>

</html>
