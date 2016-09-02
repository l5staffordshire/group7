<?php
include('config1.php');


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

$sql = "INSERT INTO students (firstname, lastname, dob, programlevel, contact_number, email, address, username, password , nkfirst, nklast , nkemail , relationship) 
VALUES ('$firstname', '$lastname', '$DOB' , '$programlevel', '$contact_number' , '$email', '$address', '$username' , '$password', '$nkfirst' , '$nklast' , '$nkemail' , '$relationship') ";

$result = mysqli_query($connect_db, $sql);
if(!$result) {
echo 'Insertion failed';
} else {
echo 'Record inserted';
}

header("Location: welcome.php");

?>

