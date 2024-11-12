<?php
	//echo $_POST['doctor_name_220076'] . "<br>";
	//echo $_POST['doctor_gender_220076'] . "<br>";
	//echo $_POST['doctor_address_220076'] . "<br>";
	//echo $_POST['doctor_phone_220076'] . "<br>";
	
if(isset($_POST)) {   //check variable POST from FORM
  include "connection_220076.php";   //call connection_220076
  
  //sql querry
  $query = "INSERT INTO doctors_220076 (doctor_name_220076, doctor_gender_220076, 
  doctor_address_220076, doctor_phone_220076) VALUES ('$_POST[doctor_name_220076]', 
  '$_POST[doctor_gender_220076]', '$_POST[doctor_address_220076]', '$_POST[doctor_phone_220076]')"; 
  
  //run query
	$create = mysqli_query($db_connection, $query);
  
  if($create) {   //check if query TRUE?SUCCES
	// echo "<p>Pet added successfully !</p>";  //Succes msg HTML Vers
	echo "<script> alert ('Doctor added successfully !'); </script>";  //succes msg (javascript) vers
  } else {
	// echo "<p>Pet add failed</p>";  //Failed msg HTML Vers
	echo "<script> alert ('Doctor added failed !'); </script>";  //Failed msg (javascript) vers
  }
}
?>
<!-- <p><a href="read_doctor_220076.php">BACK TO PET LIST</a></p> -->

<script>window.location.replace("read_doctor_220076.php");</script>
