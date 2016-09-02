<?php
include('config1.php');

session_start();
$error=''; // Variable To Store Error Message
if (isset($_POST["submit"])) {
if (empty($_POST["username"]) || empty($_POST["password"])) {
$error = "Username or Password is invalid1"; 
}
else
{
// Define $username and $password
$username=$_POST["username"];
$password=$_POST["password"];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connect_db = mysqli_connect("localhost", "root", "");

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);

// Selecting Database
$db = mysqli_select_db($connect_db , "project1");
// SQL query to fetch information of registerd users and finds user match.

$query = mysqli_query( $connect_db , "SELECT * FROM students WHERE password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);

while($row = mysqli_fetch_array($query)){
    $stuid = $row ["student_id"];
	//$depid = $row ["department"];
	$firstname = $row ["firstname"];
}
$_SESSION['student_id']=$stuid;// Initializing Session
//$_SESSION['department']=$depid;

if ($rows == 1) {
$_SESSION['firstname']=$firstname;

header("location: welcuser.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid2";
}
mysqli_close($connect_db); // Closing Connection
}
}
?>