<?php 


  
$owners_email = $_SESSION['owners_email'];

//program to fetch required renters and owners details onto the owner's profile pagee:
  
$query = ("SELECT * FROM `owners_details` WHERE email_address = '$owners_email' ");
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$number = $row['phone'];
$owner_picture = $row['picture'];



 ?>