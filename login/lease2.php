<?php

        if(isset($_POST['submit']))   {    

            $hostel_name = $_POST['hostel_name'];
            $property_category = $_POST['property_category'];
            $area = $_POST['area'];
            $property_price = $_POST['property_price'];
            $property_description = $_POST['property_description'];

             $image = $_FILES['image']['name'];
             $image_temp = $_FILES['image']['tmp_name'];

             $image2 = $_FILES['image2']['name'];
             $image_temp2 = $_FILES['image2']['tmp_name']; 

             $image3 = $_FILES['image3']['name'];
             $image_temp3 = $_FILES['image3']['tmp_name'];

             $image4 = $_FILES['image4']['name'];
             $image_temp4 = $_FILES['image4']['tmp_name'];      
       
             move_uploaded_file($image_temp, "../dash_new2/img/$image");
             move_uploaded_file($image_temp2, "../dash_new2/img/$image2");
             move_uploaded_file($image_temp3, "../dash_new2/img/$image3");
             move_uploaded_file($image_temp4, "../dash_new2/img/$image4");


            $property_date = date('d-m-y');

            $owners_name = $_SESSION['first_name']." ".$_SESSION['last_name'];
            $owners_email = $_SESSION['owners_email'];
            $number = $_SESSION['number'];

            $query = "INSERT INTO properties (property_name, property_phone_num, property_email, property_category, property_address, property_price, property_description, property_image,property_image2,property_image3,property_image4, property_status, property_date)";
            $query .= "VALUES('{$owners_name}', '{$number}', '{$owners_email}', '{$property_category}', '{$area}', '{$property_price}', '{$property_description}', '{$image}','{$image2}','{$image3}','{$image4}', 'Unapproved', now())";

            $create_property_query = mysqli_query($connection, $query);

            if(!$create_property_query){
                die("FAILED QUERY" . mysqli_error($connection));
                
            }else{
                response("You have successfully leased an apartment, await requests");
                
            }

            }


            function response($message){
            echo '<script type="text/javascript">alert("'.$message.'")</script>';
    }

?>