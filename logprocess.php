<?php
require('config1.php'); 
include ('login.php');
include('session.php');

//session_start();
//$firstname = $_SESSION['firstname'];
$query = "SELECT * FROM students WHERE student_id = '$user_check'";
$result = mysqli_query($connect_db, $query);
$checkboxdepopt = '';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC )){

	$firstname = $row['firstname'];
	$lastname =$row['lastname'];
	$dob = $row['dob'];
	$programlevel = $row['programlevel'];
	$contact_number = $row['contact_number'];
	$email = $row['email'];
	$address =$row['address'];
	$username = $row['username'];
	$password = $row['password'];
	$nkfirst =$row['nkfirst'];
	$nklast = $row['nklast'];
	$nkemail = $row['nkemail'];
	//$student_id = $row["student_id"];

	$checkboxdepopt = $firstname ;



}
?>