<?php 

require "../includes/db.php";

session_start(); //starts a session

$owner_name = $_SESSION['name'];
$renter_email = $_SESSION['email_address'];
$renter_picture = $_SESSION['picture'];

//program to fetch required renters and owners details onto the owner's dashboard:

$query = ("SELECT * FROM `rent` WHERE email_add = '$renter_email' ");
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){

$house_location = $row['location'];
$house_picture = $row['image'];
$description = $row['description'];
$owners_email = $row['owners_email'];

$query2 = ("SELECT * FROM `owners_detail` WHERE (email = '$owners_email') ");
$result2 = mysqli_query($connection, $query);
$row2 = mysqli_fetch_array($result);
$owners_name = $row['name'];

//renter's header details
echo $renter_name;
echo $renter_email;
echo $renter_picture;
//renter's header details ends

//renter's body div tags details for pending requests
echo $house_location;
echo $description;
echo $house_picture;
echo $owners_name;
//renter's body div tags details for pending requests ends

}

 ?>