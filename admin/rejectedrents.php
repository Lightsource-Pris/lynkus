<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin</title>
    <link rel="shortcut icon" type="" href="../dash_new/img/lynkus.png">
  <link href="../dash_new/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../dash_new/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../dash_new/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../dash_new/css1/style.css" rel="stylesheet">
  <link href="../dash_new/css1/style-responsive.css" rel="stylesheet">
    <link href="../dash_new/css1/style3.css" rel="stylesheet">
  <script src="../dash_new/lib/chart-master/Chart.js"></script>


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
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
      </div>

      <a href="index.html" class="logo"><b>LYNK<span>|US</span></b></a>

      <div class="nav notify-row" id="top_menu">

        <ul class="nav top-menu">
         
        </ul>

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../dash_new/login.php">Logout</a></li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">

          <li class="mt">
            <a  class="" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="sub-menu">
            <a class="" href="properties.php">
              <i class="fa fa-desktop"></i>
              <span>Available Properties</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a class="" href="properties.php?source=add_properties">
              <i class="fa fa-desktop"></i>
              <span>Add New Property</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a class="" href="acceptedrents.php">
              <i class="fa fa-desktop"></i>
              <span>Accepted Requests</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a class="active" href="rejectedrents.php">
              <i class="fa fa-desktop"></i>
              <span>Rejected Requests</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a class="" href="requests.php">
              <i class="fa fa-desktop"></i>
              <span>Requests</span>
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
                <p style="text-align:center; font-size:30px"><b>REJECTED REQUESTS</b></p>

              <?php include "includes/db.php"; 


                  
                $query = "SELECT * FROM rent WHERE status ='rejected'";
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
                  


                  <div class="col-sm-6 col-xs-6 goleft" style="width:100%;padding-left:35%;">
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

                  </div> 
                  <br>

                  <div class="grey-header" >

                    <div style="">
                    <img style="width: 50%; height: 125px; float: left" src="../dash_new2/img/<?php echo $house_picture; ?>" alt="image 1 not available">
                    <img style="width: 50%; height: 125px; float: right;" src="../dash_new2/img/<?php echo $house_picture2; ?>" alt="image 2 not available">
                  </div>
                    <div>
                    <img style="width: 50%; height: 125px;float:left " src="../dash_new2/img/<?php echo $house_picture3; ?>" alt="image 3 not available">
                    <img style="width: 50%; height: 125px;float: right" src="../dash_new2/img/<?php echo $house_picture3; ?>" alt="image 4 not available">
                  </div>
                  </div>


                </div>

                <br><br><br><br>
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
  <script src="../dash_new/lib/jquery/jquery.min.js"></script>
  <script src="../dash_new/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="../dash_new/include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../dash_new/lib/jquery.scrollTo.min.js"></script>
  <script src="../dash_new/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../dash_new/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="../dash_new/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="../dash_new/lib/sparkline-chart.js"></script>

</body>

</html>
