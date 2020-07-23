<?php 

$renter_email = $_SESSION['renters_email'];

//program to fetch required renters and owners details onto the renter's profile page:

$query = ("SELECT * FROM `renters_details` WHERE email_address = '$renter_email' ");
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$number = $row['phone'];
$renter_picture = $row['picture'];


 ?>