<?php 

require "../includes/db.php";

//program to fetch required renters and owners details onto the owner's dashboard:

$email = $_SESSION['owners_email'];

$query = ("SELECT * FROM `rent` WHERE owners_email = '$email' ");
$result = mysqli_query($connection, $query);

if($result){

while($row = mysqli_fetch_array($result)){
$renter_name = $row['name'];
$house_location = $row['location'];
$house_picture = $row['image'];
$level = $row['level'];
$course = $row['course'];
$renters_email = $row['email_add'];



$query2 = ("SELECT * FROM `renters_detail` WHERE (email_address = '$renters_email') ");
$result2 = mysqli_query($connection, $query);
$row2 = mysqli_fetch_array($result);
$renter_picture = $row['picture'];


//owner's dashboard body div tags details
// echo $house_location;
// echo $renter_name;
// echo $renter_picture;

}
}else{
	echo "You have no request";
}

//code to carry out owner's approval



if(isset($_GET['accept'])){

	$id = $_GET['accept'];
	$query3 = "DELETE FROM rent WHERE property_id = $id";
	$result3 = mysqli_query($connection, $query3);

	$query4 = "DELETE FROM properties WHERE property_id = $id";
	$result4 = mysqli_query($connection, $query4);

	if(!$result3 && !$result4){

		echo "404";
		
	}else{

		echo "200";
	}

}

 ?>