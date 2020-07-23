<?php
	require "../includes/db.php";
	session_start(); //starts a session
	if (isset($_POST['submit'])) {
		$email_address = $_POST['email_address'];
		// $email_address = 'israel@gmail.com';
		$passworde = $_POST['passworde'];
		$type = $_POST['submit'];
		echo $type."<br>";

		echo $email_address."<br>";
		$query = "SELECT email_address FROM owners_details WHERE email_address = '".$email_address."' ";
		$result = mysqli_query($connection, $query);
		if (!$result) {	
			echo "1";
			die("QUERY FAILED" . mysqli_error($connection));
		}
		else{
			// echo "2";
			if (mysqli_num_rows($result)>0) {

				// echo "3";
				while($row = mysqli_fetch_array($result)){
				$email = $row['email_address'];
			 echo $email."<br>";
			if ($email_address == $email) {
				echo "Logging in...";
			}else{
				echo "Can't find user";
			}
		}
			}else{
				echo "No result";
			}
	}		
		}else{
			echo "404";
		}




	
			


	// 	while ($row = mysqli_fetch_assoc($result))_address {
		
	// 	$email = $row['email_address'];

	// 	echo $email;
	// }


	// }


      //creating function to inform users of their login status:
    function response($message){
    		echo '<script type="text/javascript">alert("'.$message.'")</script>';
    }

 ?>