<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lynk|Us Login Page</title>
    <link rel="shortcut icon" type="" href="img/lynkus.png">

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
        include "login1.php";
    ?>
  <div id="login-page">
    <div class="container" style="margin-top: -50px;">
      <form class="form-login" method="POST" action="login.php" style="height: 510px;">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="email" class="form-control" required="" name="email_address" placeholder="Your Email" autofocus>
          <br>
        <div>
          <input type="password" id="password" required=""  class="form-control" name="passworde" placeholder="Password" > 
          <i class="fa fa-eye" onclick="view()" style=" margin-top:-25px; margin-right: 10px;  float: right"></i>
        </div>
        <br>
         
          <button class="btn btn-theme btn-block" name="submit" type="submit" value="owner"><i class="fa fa-lock"></i>Owner Sign in</button>
          <br>
          <button class="btn btn-theme btn-block" type="submit" name="submit" value="renter"><i class="fa fa-lock"></i>Renter Sign in</button>
          <hr>
          <div class="login-social-link centered">
          <br>
            <p>or you can sign in via your social network</p>

            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
          </div>

          <div class="registration">
          <br>
            Don't have an account yet?<br/>
            <a class="" href="signup.php">
              Create an account
              </a>
          </div>
        </div>
      </form>
    </div>
  </div>
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
