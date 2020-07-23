<?php include "includes/db.php"; ?>
<?php

if(isset($_GET['p_id'])){

    $the_property_id = $_GET['p_id'];
}

$query = "SELECT * FROM properties WHERE property_id = $the_property_id";
$edit_properties_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($edit_properties_query)){
        $property_id = $row['property_id'];
        $property_name = $row['property_name'];
        $property_phone_num = $row['property_phone_num'];
        $property_email = $row['property_email'];
        $property_category = $row['property_category'];
        $property_price = $row['property_price'];
        $property_area = $row['property_address'];
        $property_description = $row['property_description'];
        $property_image = $row['property_image'];
        $property_date = $row['property_date'];



        if(isset($_POST['update_post'])){

        $category = $_POST['category'];
        $name = $_POST['name'];
        $phone_num = $_POST['phone_num'];
        $email = $_POST['email'];
        $price = $_POST['price'];
        $area = $_POST['area'];
        $image = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        $description = $_POST['description'];

        move_uploaded_file($image_temp,"../img/$image");

        if(empty($image)){

            $query = "SELECT * FROM properties WHERE property_id =  $the_property_id ";
            $select_image = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_image)){

                $image = $row['property_image'];

            }
        }

        $query = "UPDATE properties SET ";
        $query .="property_name = '{$name}', ";
        $query .="property_phone_num = '{$phone_num}', ";
        $query .="property_email = '{$email}', ";
        $query .="property_category = '{$category}', ";
        $query .="property_price = '{$price}', ";
        $query .="property_address = '{$area}', ";
        $query .="property_description = '{$description}', ";
        $query .="property_date = now(), ";
        $query .="property_image = '{$image}' ";
        $query .= "WHERE property_id = {$the_property_id} ";

        $update_properties = mysqli_query($connection, $query);

        if(!$update_properties){

            die("QUERY FAILED " . mysqli_error($connection));
        }


        }

    }
?>


<form action="" method="post" enctype="multipart/form-data">
 <div class="form-group">
        <label for="title">Name</label>
        <input value="<?php echo $property_name; ?>" type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label for="title">Phone Number</label>
        <input value="<?php echo $property_phone_num; ?>" type="text" class="form-control" name="phone_num">
    </div>
 <div class="form-group">
        <label for="title">Email</label>
        <input value="<?php echo $property_email; ?>" type="email" class="form-control" name="email">
    </div>

    
    <div class="form-group">
        <label for="title">Category</label><br>
        <select name="category" id="">
        <?php
                    $query = "SELECT * FROM categories";
                    $select_categories_options = mysqli_query($connection,$query);

                    if(!$select_categories_options){

                        die ("QUERY FAILED ". mysqli_error($connection));
                    }
                    while($row = mysqli_fetch_assoc($select_categories_options)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo "<option value='$cat_title'>{$cat_title}</option>";
                    }
            
?>
        </select>
        
    </div>
    <div class="form-group">
        <label for="title">Price</label>
        <input value="<?php echo $property_price; ?>" type="text" class="form-control" name="price">
    </div>

    <div class="form-group">
        <label for="title">Area </label><br>
        <select name="area" id="">
        <?php
                    $query = "SELECT * FROM area";
                    $select_areas_options = mysqli_query($connection,$query);

                    if(!$select_categories_options){

                        die ("QUERY FAILED ". mysqli_error($connection));
                    }
                    while($row = mysqli_fetch_assoc($select_areas_options)){
                        $area_id = $row['area_id'];
                        $area_title = $row['area_title'];
                        echo "<option value='$area_title'>{$area_title}</option>";
                    }
            
?>
        </select>
    </div>
    
<!--
    <div class="form-group">
        <label for="title">Post Date</label>
        <input type="text" class="form-control" name="post_date">
    </div>
-->
    
    <div class="form-group">
        <label for="title"> Image</label>
        <img  width="300" src="../img/<?php echo $property_image; ?>" >
        <input type="file"  name="image">
       
    </div>
    
  <div class="form-group">
        <label for="title">Description</label><br>
        <textarea type ="text" class="form-control" name="description" id="" cols="30" rows="10">
        <?php echo $property_description ; ?>
        </textarea>
    </div>
    
     <div class="form-group">
        <input type="submit"  name="update_post" value="Post">
    </div>
    
    

</form>