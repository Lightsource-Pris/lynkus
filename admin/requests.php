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

<h1>Available Requests <small></small></h1><br>

<table class="table table-bordered table-hover ">
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email Address</th>
		<th>Phone Number</th>
		<th>Property Id</th>
		<th>Image 1</th>
		<th>Image 2</th>
		<th>Image 3</th>
		<th>Image 4</th>
		<th>Date</th>
		<th>Delete</th>


	</tr>
</thead>
<tbody>

<?php
$query = "SELECT * FROM rent ";
$select_requests_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_requests_query)){
		
		$request_id = $row['ID'];
		$request_name = $row['name'];
		$request_email = $row['email_add'];
		$request_phone_no = $row['phone_no'];
		$id = $row['property_id'];
		$request_image = $row['image'];
		$request_image2 = $row['image2'];
		$request_image3 = $row['image3'];
		$request_image4 = $row['image4'];
		$request_date = $row['request_date'];


		echo "<tr>";
		echo "<td> $request_id</td>";
		echo "<td> $request_name</td>";
		echo "<td> $request_email</td>";
		echo "<td> $request_phone_no</td>";
		echo "<td> $id </td>";
		echo "<td><img width='100' src ='../dash_new2/img/$request_image' alt = 'image 1 unavailable' </td>";
		echo "<td><img width='100' src ='../dash_new2/img/$request_image2' alt = 'image 2 unavailable' </td>";
		echo "<td><img width='100' src ='../dash_new2/img/$request_image3' alt = 'image 3 unavailable' </td>";
		echo "<td><img width='100' src ='../dash_new2/img/$request_image4' alt = 'image 4 unavailable' </td>";
		echo "<td> $request_date</td>";
		echo "<td><a href='requests.php?delete=$request_id'>DELETE</a></td>";
		echo "</tr>";
		
}
?>

</tbody>

</table>
<?php

if(isset($_GET['delete'])){

	$the_request_id = $_GET['delete'];
	$query = "DELETE FROM rent WHERE ID = $the_request_id";
	$result = mysqli_query($connection, $query);

	if(!$result){

		die("Failed" . mysqli_error($connection));
		//echo "Failed" . mysqli_error($connection);
	}else{

		echo "done";
	}

	header("Location:requests.php");
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