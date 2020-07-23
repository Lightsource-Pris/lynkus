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

.inputs {
    width: 90%;
    padding: 12px;
    margin-left: 10px;
   

} .inputs:focus{
 border: 2px solid #6FFDD4;
}

.cat{

  border: 1px solid transparent;
  cursor: pointer;
  border-radius: 5px;
  padding: 10px;
  outline: none;
}

.submit1{
  
 border: 1px solid transparent;
 background-color:;
 position: relative;
 margin-left: 70px;
 color: ;



}

  </style>

</head>

<body>
  <?php 
  // include "../roomback/ownersprofile.php";


  require "../includes/db.php";

session_start();


if (isset($_SESSION['owners_email'])) {

  include "../roomback/ownersprofile.php";

  include "../login/lease2.php";
  ?>
  <section id="container">
  
    <!--header start-->
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
          <li><a class="logout" href="logout.php">Logout</a></li>
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
            <a  href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="lease.php">
              <i class="fa fa-home"></i>
              <span>Lease</span>
              </a> 
              </li>
            
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

            <br><br>
            <div class="row"  style="width:500px; background-color:white; height:780px; float:center; margin:auto; border-radius:15px;">
            <br><br>
            <form style="margin:auto; width:100%;" method="POST" action="lease.php" enctype="multipart/form-data">
             <h3 style="text-align:center; color:#2f323a;">Lease Apartment </h3>
             <br>
            
              <label style="color:#2f323a;  margin-left:2%;">Price</label>
              <input class="inputs" type="text" placeholder="Price is in Naira" pattern="[0-9]+" title="Numbers only"  required name="property_price">
              <br><br>
              <label style="color:#2f323a;  margin-left:2%;">Hostel Name</label>
              <input class="inputs" type="text" placeholder="Name of hostel" pattern="[a-z A-Z 0-9 - ,]+" title="Numbers and letters only"  required name="hostel_name">
              <br><br>
              <label style="color:#2f323a;  margin-left:2%;">Description</label>
              <textarea class="inputs" type="text" placeholder="More description" pattern="[a-z A-Z 0-9 - ,]+" title="Numbers and letters only" required name="property_description"></textarea>
              <br><br>
              <label style="color:#2f323a; margin-left:2%; ">Apartment Photo1</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image">
              <label style="color:#2f323a; margin-left:2%; ">Apartment Photo2</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image2">
              <label style="color:#2f323a; margin-left:2%; ">Apartment Photo3</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image3">
              <label style="color:#2f323a; margin-left:2%; ">Apartment Photo4</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image4">

              
             
                
                <select class="cat" style="margin-left:10%;" name="property_category" required>
               <option>Catogories</option>
               <option value="Lease Apartment">Leasing Out Apartment</option>
               <option value="Find Partner">Finding Partner</option>

              </select>


              <select class="cat" style="margin-left:25%;" name="area">
                <option> Select Area</option>
                <option value="Camp">Camp</option>
                <option value="Isolu">Isolu</option>
                <option value="Oluwo">Oluwo</option>
                <option value="Gate">Gate</option>
                <option value="Obantoko">Obantoko</option>


              </select>

              <br><br><br>

              <div class="submit1" style="border-radius:10px; width:70%" >
              <input  type="submit" value="submit" name="submit" style="border-radius:10px; width:100%; height:40px;  background-color:#ffeeee;">
              </div>

            </form>

             
              </div>


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

  <?php }else{
  echo "<script>location.href='../index.php'</script>";
} 


?>

</body>

</html>
