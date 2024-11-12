<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Clinic Rofiq</title>
</head>
<body>
    <h1>Pet Clinic Rofiq</h1><hr>
	<h3>Form add pet<h3>
	<form method="post" action="create_pet_220076.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="pet_name_220076" required></td>
			 </tr>
			<tr>
				<td>Type</td>
				 <td><select name="pet_type_220076" required>
					 <option value="">choose</option>
					 <option value="Cat">Cat</option>
					 <option value="Dog">Dog</option>
					 <option value="Reptile">Reptile</option>
					 <option value="Bird">Bird</option>
					 <option value="Rodent">Rodent</option>
					 
					</select>
				</td>
			 </tr>
			<tr>
				<td>Gender</td>
				 <td><input type="radio" name="pet_gender_220076" value="Male" required> Male 
				 <td><input type="radio" name="pet_gender_220076" value="Female" required> Female
				</td>
			</tr>
			<tr>
				<td>Age (month)</td>
				<td><input type="number" name="pet_age_220076" required></td>
			 </tr>
			 <tr>
				<td>Owner</td>
				<td><input type="text" name="pet_owner_220076" required></td>
			 </tr>
			 <tr>
				<td>Address</td>
				<td><textarea  name="pet_address_220076" required></textarea></td>
			 </tr>
			 <tr>
				<td>Phone</td>
				<td><input type="text" name="pet_phone_220076" required></td>
			 </tr>
			 <tr>
				<td></td>
				<td>
				 <input type="submit" name="save" value="SAVE">
				 <input type="reset" name="reset" value="RESET">
				</td>
			 </tr>
			<table>
	</form>
	<p><a href="read_pet_220076.php">CANCEL</a></p>
</body>
</html>