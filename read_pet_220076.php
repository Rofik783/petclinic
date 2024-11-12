<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Clinic Rofiq</title>
</head>
<body>
    <h1>Pet Clinic Rofiq</h1><hr>
	<h3>Pets List</h3>
	<p><a href="Add_pet_220076.php">Add New Pet</a>
	<table border="1">
	  <tr>
		<th>No</th>
		<th>Name</th>
		<th>Type</th>
		<th>Gender</th>
		<th>Age (month)</th>
		<th>Owner</th>
		<th>Address</th>
		<th>Phone</th>
	  </tr>
	  <?php 
		include "connection_220076.php";  //call connection
		$query = "SELECT * FROM pets_220076";   //make a sql query
		$pets = mysqli_query($db_connection, $query); //run query

       $i=1;  // initial counter for number
	   foreach ($pets as $data) :   // loop to extract data from database
	
	  ?>
	  <tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $data['pet_name_220076']; ?></td>
		<td><?php echo $data['pet_type_220076']; ?></td>
		<td><?php echo $data['pet_gender_220076']; ?></td>
		<td><?php echo $data['pet_age_220076']; ?></td>
		<td><?php echo $data['pet_owner_220076']; ?></td>
		<td><?php echo $data['pet_address_220076']; ?></td>
		<td><?php echo $data['pet_phone_220076']; ?></td>
	  </tr>
	  <?php endforeach; ?>
	 </table>
	</body>
	</html>