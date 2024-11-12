<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Clinic Rofiq</title>
</head>
<body>
    <h1>Pet Clinic Rofiq</h1><hr>
	<h3>Form add Doctor<h3>
	<form method="post" action="create_doctor_220076.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="doctor_name_220076" required></td>
			 </tr>
			<tr>
				<td>Gender</td>
				 <td><input type="radio" name="doctor_gender_220076" value="Male" required> Male 
				 <td><input type="radio" name="doctor_gender_220076" value="Female" required> Female
				</td>
			  </tr>
			 <tr>
				<td>Address</td>
				<td><textarea  name="doctor_address_220076" required></textarea></td>
			 </tr>
			 <tr>
				<td>Phone</td>
				<td><input type="text" name="doctor_phone_220076" required></td>
			 </tr>
			 <tr>
				<td></td>
				<td>
				 <input type="submit" name="save" value="SAVE">
				 <input type="reset" name="reset" value="RESET">
				 <li class="selected"><a href="index.php">back</a></li>
				</td>
			 </tr>
			<table>
	</form>
	
</body>
</html>