<?php
	//echo $_POST['pet_name_220076'] . "<br>";
	//echo $_POST['pet_type_220076'] . "<br>";
	//echo $_POST['pet_gender_220076'] . "<br>";
	//echo $_POST['pet_age_220076'] . "<br>";
	//echo $_POST['pet_owner_220076'] . "<br>";
	//echo $_POST['pet_address_220076'] . "<br>";
	//echo $_POST['pet_phone_220076'] . "<br>";
	
if(isset($_POST)) {   //check variable POST from FORM
  include "connection_220076.php";   //call connection_220076
  
  //sql querry
  $query = "INSERT INTO pets_220076 (pet_name_220076, pet_type_220076, pet_gender_220076, 
  pet_age_220076, pet_owner_220076, pet_address_220076, pet_phone_220076) VALUES ('$_POST[pet_name_220076]', 
  '$_POST[pet_type_220076]', '$_POST[pet_gender_220076]', '$_POST[pet_age_220076]', '$_POST[pet_owner_220076]',
  '$_POST[pet_address_220076]', '$_POST[pet_phone_220076]')"; 
  
  //run query
	$create = mysqli_query($db_connection, $query);
  
  if($create) {   //check if query TRUE?SUCCES
	// echo "<p>Pet added successfully !</p>";  //Succes msg HTML Vers
	echo "<script> alert ('Pet added successfully !'); </script>";  //succes msg (javascript) vers
  } else {
	// echo "<p>Pet add failed</p>";  //Failed msg HTML Vers
	echo "<script> alert ('Pet added failed !'); </script>";  //Failed msg (javascript) vers
  }
}
?>
<!-- <p><a href="read_pet_220076.php">BACK TO PET LIST</a></p> -->

<script>window.location.replace("read_pet_220076.php");</script>