<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Clinic Rofiq</title>
</head>
<body>
    <h1>Pet Clinic Rofiq</h1><hr>
	<h3>Doctor List</h3>
	<p><a href="Add_doctor_220076.php">Add New Doctor</a>
	<table border="1">
	  <tr>
		<th>No</th>
		<th>Name</th
		<th>Gender</th>
		<th>Address</th>
		<th>Phone</th>
	  </tr>
	  <?php 
		include "connection_220076.php";  //call connection
		$query = "SELECT * FROM doctors_220076";   //make a sql query
		$doctors = mysqli_query($db_connection, $query); //run query

       $i=1;  // initial counter for number
	   foreach ($doctors as $data) :   // loop to extract data from database
	
	  ?>
	  <tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $data['doctor_name_220076']; ?></td>
		<td><?php echo $data['doctor_gender_220076']; ?></td>
		<td><?php echo $data['doctor_address_220076']; ?></td>
		<td><?php echo $data['doctor_phone_220076']; ?></td>
	  </tr>
	  <?php endforeach; ?>
	 </table>
	</body>
	</html>