<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Lynk|Us Sign Up Page</title>
  <link rel="shortcut icon" type="" href="img/lynkus.png">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css1/style.css" rel="stylesheet">
  <link href="css1/style-responsive.css" rel="stylesheet">
</head>

<body>
      <?php
      include "../roomback/signup.php";
      ?>
     
  <div id="login-page">
    <div class="container" style="margin-top: -60px;">
      <form class="form-login" action="signup.php" method="POST" enctype="multipart/form-data" style="height: 770px; margin-top: ;">
        <h2 class="form-login-heading">sign Up</h2>
        <div class="login-wrap">
          <input type="text" required="" pattern="[a-z A-Z -]+" title="Letters Only" class="form-control" placeholder="First Name" name="first_name" autofocus>
          <br>
          <input type="text" required="" pattern="[a-z A-Z -]+" title="Letters Only" class="form-control" placeholder="Last Name" name="last_name" autofocus>
          <br>
          <input type="email" required="" class="form-control" placeholder="Email" name="email_address" autofocus>
          <br>
          <input type="text" required="" pattern="[0-9]+"  maxlength="11" title="Numbers Only" class="form-control" placeholder="phone" name="phone" autofocus>
          <br>
          <input type="text" required="" pattern="[a-z A-Z]+" title="Letters only" class="form-control" placeholder="Your Course of Study" name="course" autofocus>
          <br>
          <input type="text" required="" pattern="[0-9]+" title="Numbers only" class="form-control" placeholder="Your Level" name="llevel" autofocus>
          <br>
          <div>
          <input type="password" id="password" required=""  class="form-control" name="passworde" placeholder="Password" > 
          <i class="fa fa-eye" onclick="view()" style=" margin-top:-25px; margin-right: 10px;  float: right"></i>
        </div>
          <br>
          <label>Your image</label>
          <input type="file" required="" class="form-control" name="picture" placeholder="Your photo">
            <br>
            <br>
          <button class="btn btn-theme btn-block" name="signup_type" value="owner" onclick="verify()"  type="submit"><i class="fa fa-lock"></i> Register as owner</button>
          <br>
        <button class="btn btn-theme btn-block"  name="signup_type" value="renter" onclick="verify()" type="submit"><i class="fa fa-lock"></i> Register as renter</button>
          <hr>
          <div class="registration">
            Already have an account?<br/>
            <a class="" href="login.php">
              Signin
              </a>
          </div>
          </div> 

        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });


    function view(){
      var password = document.getElementById('password');

      if(password.type == "password"){
        password.type = "text";
      }else{
            password.type = "password";
      }
    }
  </script>
</body>

</html>
