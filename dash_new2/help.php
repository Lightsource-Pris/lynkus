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
        <div class="fa fa-bars tooltips" data-placement="right" ></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>LYNK<span>|US</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">

        <ul class="nav top-menu">
     
        </ul>

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
            <a href="index.php">
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
            <a class="active" href="help.php">
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
            <div class="row" style="font-size: 15px;" >

             <p style="text-align:center; font-size:30px;"><b>Help Page</b></p>

             <p style="margin-left: 12px; font-size: 20px;">Hello! Welcome to Lynk|Us once again. This is a solution geared towards making obtainment of apartment and renting out of apartment very easy for students of the FUNAAB area at the moment. Basically, we want to help you connect to the best roommate you can have if you are looking for one or help you get the best apartment you can get if you wish to stay alone. Asides that, if you happen to be an agent or house owner, you can as well advertise your hostel or apartment for leasing on our platform. In summary, this solution helps connect roommate, lease house and rent out your apartment. Lynk|Us is currently targetted toward students of the Federal University of Agriculture, Abeokuta (FUNAAB) and it's environment.</p>

             <p style="font-size: 20px">Areas covered include: </p>

             <ul style="margin-left: 12px; font-size: 20px;" >
               <li>Obantoko</li>
               <li>Camp</li>
               <li>Isolu</li>
               <li>Oluwo</li>
               <li>Gate</li>
             </ul><br>

             <p style="font-size: 20px"> The way Lynk|Us operates for renters: </p>
             <p style="font-size: 20px">As a renter, you will be able to <a href="lease.php">rent</a>apartments or get yourself the perfect roommate, all you have to do is to go to the home page of your dashboard. Check out all available apartments and await the acceptance by the owner of the house. Once the owner accepts your  requests, we will connect you immediately and you will get to have a physical view of the apartment and perform all necessary transactions.</p>

             <p style="font-size: 20px"><b>Other things you can do as an renter on your dashboard</b> </p>
             <ul style="font-size: 20px;">
              <b>Update your profile:</b> You can change your profile picture, your email address, your phone number and other important details of your profile <a href="profile.php">here.</a></li><br><br>
               <li><b>View all available properties:</b> You can as well see other available properties which is diplayed at the bottom of your profile. You can sign up as an owner to be able to lease out an apartment or find a roommate.</li>
             </ul> <br>

            
           <ul class="nav  top-menu">

          <li>
            <p>To learn more, you can contact us <a href="../contact.php">here</a></p>
            </li>
        </ul>
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