<?php

include('config1.php');
include ('login.php');

if(isset($_SESSION['student_id'])){
header("location: welcuser.php");
}
?>
<!--
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PHP Login Session Example</h1>
<h2>Login Form</h2>
<form action="" method="post">
<label>firstname :</label>
<input  name="firstname" placeholder="firstname" type="text">
<label>Password :</label>
<input  name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value="Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>-->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<header>
	<div class="ab">
		<a href="welcome.php">Home</a>
       </div>
    </header>
	<style type="text/css">
body{
	background-image: url(css/23.jpg);
	background-size: cover ;
}
.aa{
	width: 300px;
	height: 260px;
	background-color: rgba(0,0,0,0.5);
	margin: 0 auto;
	margin-top: 30px;
	padding-top: 10px;
	padding-left: 50px;
	border-radius: 15px;
	-webkit - border-radius: 15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	color: white;
	font-weight: bolder;
	
	font-weight: 18px;
}
.aa input[type="text"]{
	width: 200px;
	height: 35px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	padding-left: 5px;


}
.aa input[type="password"]{
	width: 200px;
	height: 35px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	padding-left: 5px;

}

.aa input[type="submit"]
{
	width: 100px;
	height: 35px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color: skyblue;
	font-weight: bolder;


}
.ab input[type="home"]
{
	width: 100px;
	height: 35px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color: skyblue;
	font-weight: bolder;


}




	</style>
</head>
<body>
<div class="aa">
<h2>Login</h2>

	<form action="" method="post">

<input type="text" name ="username" placeholder ="Please Enter Username"><br><br>
<input type="password" name ="password" placeholder ="Please Enter Password"><br><br>
<input type ="submit" name = "submit" value="Login">
<span><?php echo $error; ?></span>
</form>






</div>
</body>
</html>