<?php
include('config1.php'); 
include ('logprocess.php'); 
//include('session.php'); ?> 

<!--<!DOCTYPE html>
<html>
<head>
<title>Welcome User</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="profile">
 
<form >
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
	<p><?php echo $checkboxdepopt;
	?></p>
	</form>
	<b id="update"><a href="update.php">update</a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>



</body>
</html>-->
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Page</title>

	<link rel="stylesheet" href="css/demo.css">

	<header>
		<h1>Welcome <?php echo $login_session; ?></h1>
        <a href="logout.php" >logOut</a>
    </header>

</head>
<div class="body">
	<body>

    <ul>
        
        <li><a href="update.php" class="hover">Update</a></li>
        <li><a href="" class="hover">Delete</a></li>

      
    </ul>
    <div id="profile">
 
<form >
 <!--<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>-->
	
	<p>
	
	<?php echo $checkboxdepopt;?>

	</p>

	</form>
	<!--<b id="update"><a href="update.php">update</a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>-->
</div>

   
    </div>

</body>
</div>
</html>
