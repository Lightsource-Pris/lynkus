<?php
    function response($message){
        echo "<script>alert('".$message."')</script>";
    }

if (isset($_POST['submit'])) {
  
   $new_first_name = $_POST['first_name'];
   $new_last_name = $_POST['last_name'];
   $new_email = $_POST['email_address'];
   $new_number = $_POST['phone'];
   $new_picture = $_FILES['photo']['name'];
   $temp = $_FILES['photo']['tmp_name'];
   $query =  "UPDATE `owners_details` SET email_address = '$new_email', first_name = '$new_first_name', last_name = '$new_last_name', phone = '$new_number'";
   $result = mysqli_query($connection, $query);

   if ($new_picture != '') {

            move_uploaded_file($temp, "../img/signup_owner/$new_picture");
            $query2 =  "UPDATE `owners_details` SET picture = '$new_picture' ";
            $result2 = mysqli_query($connection, $query2);
   }
   if ($result) {
       response("Profile Update is succesful");
   }else{
    response("There was an error, kindly try again");
   }
   echo "<script>location.href='profile.php'</script>";
}


?>