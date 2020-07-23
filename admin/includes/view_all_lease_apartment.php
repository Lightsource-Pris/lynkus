<table class="table table-bordered table-hover ">
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>E-mail</th>
		<th>Category</th>
		<th>Area</th>
		<th>Description</th>
		<th>Image</th>
		<th>Date</th>
		<th>Approved</th>
		<th>Unapproved</th>
		<th>Delete</th>


	</tr>
</thead>
<tbody>

<?php
$query = "SELECT * FROM leases";
$lease_properties_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($lease_properties_query)){
		$lease_id = $row['ID'];
		$lease_name = $row['name'];
		$lease_email = $row['email_add'];
		$lease_phone = $row['phone_no'];
		$lease_description = $row['description'];
		$lease_picture = $row['picture'];
		$lease_category = $row['category'];
		$lease_area = $row['area'];
		$lease_date = $row['date'];


		echo "<tr>";
		echo "<td> $lease_id</td>";
		echo "<td> $lease_name </td>";
		echo "<td> $lease_email </td>";
		echo "<td> $lease_category</td>";
		echo "<td> $lease_area</td>";
		echo "<td> $lease_description</td>";
		echo "<td><img width='100' src ='../img/$lease_picture' alt = 'image' </td>";
		echo "<td> $lease_date</td>";
		echo "<td><a href='lease_apartment.php?delete={$lease_id}'>Approve</a> </td>";
		echo "<td><a href='lease_apartment.php?delete={$lease_id}'>Unapprove</a> </td>";
		
		echo "<td><a href='lease_apartment.php?delete={$lease_id}'>DELETE</a></td>";
		echo "</tr>";
		
}
?>



	
</tbody>

</table>
<?php

if(isset($_GET['delete'])){

	$the_lease_id = $_GET['delete'];
	$query = "DELETE FROM properties WHERE $lease_id = {$the_property_id}";
	$delete_query = mysqli_query($connection, $query);
}
?>