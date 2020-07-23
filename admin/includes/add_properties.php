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

            $owners_name = 'Complanet Technolgies';
            $owners_email = 'info@complanetechnologies.com.ng';
            $number = '08173058460';

            $query = "INSERT INTO properties (property_name, property_phone_num, property_email, property_category, property_address, property_price, property_description, property_image,property_image2,property_image3,property_image4, property_status, property_date)";
            $query .= "VALUES('{$owners_name}', '{$number}', '{$owners_email}', '{$property_category}', '{$area}', '{$property_price}', '{$property_description}', '{$image}','{$image2}','{$image3}','{$image4}', 'approved', now())";

            $create_property_query = mysqli_query($connection, $query);

            if(!$create_property_query){
                die("FAILED QUERY" . mysqli_error($connection));
                
            }else{
                response("You have successfully added a new property, await requests");
                
            }
  
            }


            function response($message){
            echo '<script type="text/javascript">alert("'.$message.'")</script>';
    }



        

// echo "<script>location.href='lease.php';</script>";

?>



<div class="row"  style="width:70%; background-color:#202121; margin-top:2%; margin-left: 8%; height:900px; float:left; border-radius:15px; color: white;">
            <br><br>
            <form style="margin:auto; width:100%;" method="POST" action="properties.php?source=add_properties" enctype="multipart/form-data">
             <h3 style="text-align:center;">Lease Apartment </h3>
             <br>
            
              <label style="margin-left:2%;">Price</label><br>
              <input class="inputs" type="text" placeholder="Price is in Naira" pattern="[0-9]+" title="Numbers only"  required name="property_price">
              <br><br>
              <label style="margin-left:2%;">Hostel Name</label>
              <input class="inputs" type="text" placeholder="Name of hostel" pattern="[a-z A-Z 0-9 - ,]+" title="Numbers and letters only"  required name="hostel_name">
              <br><br>
              <label style="margin-left:2%;">Description</label>
              <textarea class="inputs" type="text" placeholder="More description" pattern="[a-z A-Z 0-9 - ,]+" title="Numbers and letters only" required name="property_description"></textarea>
              <br><br>
              <label style="margin-left:2%; ">Apartment Photo1</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image">
              <label style="margin-left:2%; ">Apartment Photo2</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image2">
              <label style="margin-left:2%; ">Apartment Photo3</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image3">
              <label style="margin-left:2%; ">Apartment Photo4</label>
              <input style="width:50%;" class="inputs" type="file" placeholder="Your image" required name="image4">

              
             
                <div style="width: 90%; margin:auto;" >
                    <div >
                <select class="cat" style="float: left; width: 40%; color:#2f323a; " name="property_category" required>
               <option>Catogories</option>
               <option value="Lease Apartment">Leasing Out Apartment</option>
               <option value="Find Partner">Finding Partner</option>

              </select>

          </div>
          <div>
              <select class="cat" style="float: right; color:#2f323a; " name="area">
                <option> Select Area</option>
                <option value="Camp">Camp</option>
                <option value="Isolu">Isolu</option>
                <option value="Oluwo">Oluwo</option>
                <option value="Gate">Gate</option>
                <option value="Obantoko">Obantoko</option>
              </select>
          </div>
          </div>

              <br><br><br>

              <div class="submit1" style="border-radius:10px; width:70%" >
              <input  type="submit" value="submit" name="submit" style="border-radius:10px; width:100%; height:40px;  background-color:#ffeeee; color:#2f323a; ">
              </div>

            </form>

             
              </div>
              <br>
              <br>




