<?php 

	require "../includes/db.php";

	//assigning variables to collect user data::

	if(isset($_POST['signup_type'])){

	$picture = $_FILES['picture']['name'];
	$temp = $_FILES['picture']['tmp_name'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email_address = $_POST['email_address'];
	$course = $_POST['course'];
	$llevel = $_POST['llevel'];
	$phone = $_POST['phone'];
	$signup_type = $_POST['signup_type'];
	// $passworde = password_hash($_POST['passworde'], PASSWORD_DEFAULT);
	$passworde = $_POST['passworde'];

	//variable assignment ends

	//verify if user already exist

	// if($passworde == $password2){

	if ($signup_type == 'owner') {
	
	$query = ("SELECT * FROM `owners_details` WHERE email_address = '$email_address'");
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result);

	//if user does not exist::
	if (empty($row)) {
		move_uploaded_file($temp, "../img/signup_owner/$picture");

		$query = $connection->prepare("INSERT INTO owners_details(picture,first_name,last_name,email_address,passworde,signup_type,phone,course,llevel) VALUES (?,?,?,?,?,?,?,?,?)");
		$query->bind_param("sssssssss",$picture,$first_name,$last_name,$email_address,$passworde,$signup_type,$phone,$course,$llevel);
		$query->execute();
		$query->close();

		response("You have successfully created an account!");
		echo "<script>location.href='../dash_new/login.php'</script>";
	}

	// if user exists::
	else{

		response("You have an account with us, you may login.");
		echo "<script>location.href='../dash_new/login.php'</script>";

	}

} else{ //if signup type is renter

		$query = ("SELECT * FROM `renters_details` WHERE email_address = '$email_address'");
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result);

	//if user does not exist::
	if (empty($row)) {
		move_uploaded_file($temp, "../img/signup_renter/$picture");

		$query = $connection->prepare("INSERT INTO renters_details(picture,first_name,last_name,email_address,passworde,signup_type,phone,course,llevel) VALUES(?,?,?,?,?,?,?,?,?)");
		$query->bind_param("sssssssss",$picture,$first_name,$last_name,$email_address,$passworde,$signup_type,$phone,$course,$llevel);
		$query->execute();
		$query->close();
		response("You have successfully created an account!");
		echo "<script>location.href='../dash_new/login.php'</script>";
	}

	//if user exists::
	else{

		response("You have an account with us, you may login.");
		echo "<script>location.href='../dash_new/login.php'</script>";

	}

}



// }else{
// 	echo "Password Mismatch";
// }

}
	//a function to alert the user if he/she has an account already:: 

	function response($message){
		echo '<script type="text/javascript"> alert("'.$message.'")</script>';


	}

 ?>