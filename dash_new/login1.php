<?php
	require "../includes/db.php";

	session_start(); //starts a session

	if (isset($_POST['submit'])) {

	$submit = $_POST['submit'];
	$email_address = $_POST['email_address'];
	// $passworde  = password_hash($_POST['passworde'], PASSWORD_DEFAULT);
	$passworde = $_POST['passworde'];
	$_SESSION['account'] = $submit;
	$query1 = "SELECT * FROM `owners_details` WHERE email_address = '$email_address' ";
	$result1 = mysqli_query($connection, $query1);
	
	$query2 = "SELECT * FROM `renters_details` WHERE email_address = '$email_address' ";
	$result2 = mysqli_query($connection, $query2);

	if ($submit == 'owner') { //if account type is owner, verify login details with owner's db data alert user as the case may be:

    if(!$result1){
		 	response("Oops! you don't seem to have an owner's account with us, Kindly sign up or sign in as a renter");
	} else{

     if(mysqli_num_rows($result1)>0){

     	while($row1 = mysqli_fetch_array($result1)){

	 if (($email_address == $row1['email_address']) && ($row1['passworde'] == $passworde)) {

			$_SESSION['owners_email'] = $row1['email_address'];
			$_SESSION['first_name'] = $row1['first_name']; 
			$_SESSION['last_name'] = $row1['last_name']; 
			$_SESSION['number'] = $row1['phone'];
	        $_SESSION['picture'] = $row1['picture'];
			echo "<script>location.href='../dash_new/index.php'</script>";	
	 }else {

		  response("Your login is incorrect");
		  echo "<script>location.href='login.php'</script>";
		  
	       }

}

}else{
		 	response("Oops! you don't seem to have an owner's account with us, Kindly sign up or sign in as a renter");
	} } }

	else{ //if account type is renter, verify renter login details with renter's db data and alert user as the case may be:
		
		if(!$result2){
		 	response("Oops! you don't seem to have a renter's account with us, Kindly sign up or sign in as an owner");
	} else{

     if(mysqli_num_rows($result2) > 0){
     	while($row2 = mysqli_fetch_array($result2)){
	if (($email_address == $row2['email_address']) && ($row2['passworde'] == $passworde)) {

			$_SESSION['renters_email'] = $row2['email_address'];
			$_SESSION['first_name'] = $row2['first_name']; 
			$_SESSION['last_name'] = $row2['last_name']; 
	        $_SESSION['picture'] = $row2['picture'];
	        $_SESSION['course'] = $row2['course'];
	        $_SESSION['llevel'] = $row2['llevel'];
	        $_SESSION['phone'] = $row2['phone'];
	        // echo "200";
			echo "<script>location.href='../dash_new2/index.php'</script>";	
	}else {

		  response("Your login is incorrect");
		  echo "<script>location.href='login.php'</script>";
		  
	}

    }

    }else{
		 	response("Oops! you don't seem to have a renter's account with us, Kindly create an account or sign in as an owner");
	}

    } 

	}

    }
      //creating function to inform users of their login status:
    function response($message){
    		echo '<script type="text/javascript">alert("'.$message.'")</script>';
    }

 ?>
