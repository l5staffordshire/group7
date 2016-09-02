<?php
include('config1.php');
//include('logprocess.php');
include ('login.php');
//include ('session.php');

if(!$connect_db) {
  echo 'Not connected';
}else {
	echo 'connected';
}

$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$DOB=$_POST["dob"];
$programlevel= $_POST["programlevel"];
$contact_number=$_POST["contact_number"]; 
$email= $_POST["email"];
$address= $_POST["address"];
$username= $_POST["username"];
$password= $_POST["password"];
$nkfirst= $_POST["nkfirst"];
$nklast= $_POST["nklast"];
$nkemail= $_POST["nkemail"];
$relationship= $_POST["relationship"];



if ($firstname !="" && $lastname !=""  && $DOB !="" && $programlevel !=""
	&& $contact_number !="" && $email !="" && $address !="" && $password !=""  && $nkfirst !="" && $nklast !="" ) { 
	
	}else {echo "All fields required" ;};


$sql = "UPDATE students SET firstname = '$firstname', lastname = '$lastname' , dob = '$DOB' , programlevel= '$programlevel' , contact_number = '$contact_number' , email = '$email' , address ='$address' , username = '$username' , password = '$password' , nkfirst = '$nkfirst' , nklast = '$nklast' , nkemail = '$nkemail' , relationship = '$relationship' WHERE student_id = '$user_check'  ";

$result = mysqli_query($connect_db, $sql);
if(!$result) {
echo 'Insertion failed';
} else {
echo 'Record inserted for update';
}

header("Location: welcuser.php");

?>