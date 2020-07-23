<?php
session_start();
$id = $_GET['id'];
    require "../includes/db.php";

    function response($message){
        echo '<script type="text/javascript">alert("'.$message.'")</script>';
    }

    $query2 = "SELECT * FROM `properties` WHERE property_id = '$id' " or die(mysqli_error());
    $result2 = mysqli_query($connection, $query2);
    $row2 = mysqli_fetch_array($result2);
    $image = $row2['property_image'];
    $image2 = $row2['property_image2'];
    $image3 = $row2['property_image3'];
    $image4 = $row2['property_image4'];
    $id = $row2['property_id'];
    $owners_email = $row2['property_email'];
    $property_address = $row2['property_address'];
    $property_description = $row2['property_description'];
    $status = 'unaccepted';

    $renter_email = $_SESSION['renters_email'];
    $renter_name = $_SESSION['first_name']." ".$_SESSION['last_name'];
    $phone_no = $_SESSION['phone'];
    $course = $_SESSION['course'];
    $llevel = $_SESSION['llevel'];
    
    $query3 = ("INSERT INTO `rent`(name, owners_email,email_add, phone_no,image,image2,image3,image4,property_id,course,description,location,llevel,status,request_date) VALUES('$renter_name', '$owners_email','$renter_email', '$phone_no', '$image','$image2','$image3','$image4','$id','$course','$property_description','$property_address','$llevel','$status',now())") or die(mysqli_error($connection));
    $result3 = mysqli_query($connection,$query3);
    if($result3){

        response("You have successfully made a request");
        echo "<script>location.href='index.php'</script>";
    }else{
        echo"Please try again";
    }
  // }

  ?>