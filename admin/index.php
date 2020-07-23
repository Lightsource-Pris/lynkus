<html>
<head>
	<title>Admin</title>
	 <link rel="shortcut icon" type="" href="../dash_new/img/lynkus.png">

	</head>
	<body>
<?php include "includes/header.php"; 

?>

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>Link|Us</h1> 
								  </a> 								
							</div>
							<div class="clearfix"> </div>
						 </div>
							
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>

		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
<h1>Welcome To <small>Admin</small></h1>
<div class="inner-block">
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
      </div>
      <div class="col-md-6 chit-chat-layer1-rit">    	
					<section id="charts1" class="charts">   
				    </table>

				</div>
				</section>				
			</div>
      </div>
     <div class="clearfix"> </div>
</div>

<div class="main-page-charts">
   <div class="main-page-chart-layer1">
		<div class="col-md-6 chart-layer1-left"> 
		
		</div>
		<div class="col-md-6 chart-layer1-right"> 
			
	 <div class="clearfix"> </div>
  </div>
 </div>
<!--main page chart layer2-->
<div class="chart-layer-2">
	
	<div class="col-md-6 chart-layer2-right">
	      </div>
	</div>
	
  <div class="clearfix"> </div>
</div>

<!--climate start here-->
<div class="climate">
	<div class="col-md-4 climate-grids">
		
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
	<div class="col-md-4 climate-grids">

	<div class="col-md-4 climate-grids">
		
	<div class="clearfix"> </div>
</div>
<!--climate end here-->
</div>
<?php include "includes/footer.php"; ?>

</div>
</div>
   <?php include "includes/sidebar.php"; ?>
	<div class="clearfix"> </div>
</div>
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>

		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>                     