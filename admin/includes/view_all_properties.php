<?php ob_start(); ?>

<table class="table table-bordered table-hover ">
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Phone Number</th>
		<th>Email Address</th>
		<th>Category</th>
		<th>Status</th>
		<th>Price</th>
		<th>Area</th>
		<th>Description</th>
		<th>Image 1</th>
		<th>Image 2</th>
		<th>Image 3</th>
		<th>Image 4</th>
		<th>Date</th>
		<th>Approve</th>
		<th>Unapprove</th>
		<th>Edit</th>
		<th>Delete</th>


	</tr>
</thead>
<tbody>

<?php
$query = "SELECT * FROM properties";
$select_properties_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_properties_query)){
		
		$property_id = $row['property_id'];
		$property_name = $row['property_name'];
		$property_phone_num = $row['property_phone_num'];
		$property_email = $row['property_email'];
		$property_category = $row['property_category'];
		$property_status = $row['property_status'];
		$property_price = $row['property_price'];
		$property_address = $row['property_address'];
		$property_description = $row['property_description'];
		$property_image = $row['property_image'];
		$property_image2 = $row['property_image2'];
		$property_image3 = $row['property_image3'];
		$property_image4 = $row['property_image4'];
		$property_date = $row['property_date'];


		echo "<tr>";
		echo "<td> $property_id</td>";
		echo "<td> $property_name</td>";
		echo "<td> $property_phone_num</td>";
		echo "<td> $property_email</td>";
		echo "<td> $property_category </td>";
		echo "<td> $property_status </td>";
		echo "<td> $property_price</td>";
		echo "<td> $property_address</td>";
		echo "<td> $property_description</td>";
		echo "<td><img width='100' src ='../dash_new2/img/$property_image' alt = 'image 1 unavailable' </td>";
		echo "<td><img width='100' src ='../dash_new2/img/$property_image2' alt = 'image 2 unavailable' </td>";
		echo "<td><img width='100' src ='../dash_new2/img/$property_image3' alt = 'image 3 unavailable' </td>";
		echo "<td><img width='100' src ='../dash_new2/img/$property_image4' alt = 'image 4 unavailable' </td>";
		echo "<td> $property_date</td>";
		echo "<td><a href='properties.php?approve=$property_id'>Approve</a> </td>";
		echo "<td><a href='properties.php?unapprove=$property_id'>Unapprove</a> </td>";
		echo "<td><a href='properties.php?source=edit_properties&p_id={$property_id}'>EDIT</a></td>";
		echo "<td><a href='properties.php?delete={$property_id}'>DELETE</a></td>";
		echo "</tr>";
		
}
?>



	
</tbody>

</table>
<?php

if(isset($_GET['approve'])){

	$the_property_id = $_GET['approve'];
	$query = "UPDATE properties SET property_status = 'approved' WHERE property_id = $the_property_id";
	$approve_property_query = mysqli_query($connection, $query);
	if ($approve_property_query) {
		header("Location: properties.php");
	}
	
}


if(isset($_GET['unapprove'])){

	$the_property_id = $_GET['unapprove'];
	$query = "UPDATE properties SET property_status = 'unapproved' WHERE property_id = $the_property_id ";
	$unapprove_property_query = mysqli_query($connection, $query);
	if ($unapprove_property_query) {
		header("Location: properties.php");
	}	
}


if(isset($_GET['delete'])){

	$the_property_id = $_GET['delete'];
	$query = "DELETE FROM properties WHERE property_id = {$the_property_id}";
	$delete_query = mysqli_query($connection, $query);

	header("Location:properties.php");
}
?>