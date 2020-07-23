<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>Lynk|Us</h1> 
								  </a> 								
							</div>

							<div class="clearfix"> </div>
						 </div>
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Lynk|Us</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
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
<p></p>
<br>

<h1>Welcome To <small>Admin</small></h1><br>

<?php
if(isset($_GET['source'])){

	$source = $_GET['source'];

}else{
	$source = '';

}

switch ($source) {
		case 'add_properties';
		include "includes/add_properties.php";
		break;
	
		case 'edit_properties';
		include "includes/edit_properties.php";
		break;
	
	
	default:
		
		include "includes/view_all_lease_apartment.php";
		break;
}

 ?>

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