<?php
include ('login.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connect_db = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connect_db ,"project1");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['student_id'];
$sql="SELECT firstname FROM students WHERE student_id='$user_check'";
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $connect_db, $sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['firstname'];
if(!isset($login_session)){
mysqli_close($connect_db); // Closing Connection
header('Location: welcpage.php'); // Redirecting To Home Page
}
?>