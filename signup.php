<!--
<!DOCTYPE html>
<html>
<head>

	<title>Sign Up</title>
	<link rel="stylesheet" href="style.css" />

</head>
<body>

<div id="Topman">
<center><h1 id="PU">Project1 </h1></center>
</div>

<center><h1> Sign Up </h1></center>
<center><h2>Sign Up Form</h2></center>

<form  class="Form" action="creatdb.php" method="post" enctype="multipart/form-data">
<fieldset>
		<legend>Personal Data</legend>
		<p>First Name: <input type="text" name="firstname" ></p>
		<p>Last Name: <input type="text" name="lastname" ></p>
	    <p>Date of Birth:  <input type="date" name="dob"  ></p>
	    <p>Program Level:  <input type="text" name="programlevel"  ></p>
	    <p>Contact number: <input type="text" name="contact_number"></p>
	    <p>email:<input type="email" name="email"  ></p>
	    <p>Address: <input type="text" name="address" ></p> 
        <p> Password :<input type= "password" name="password" ></p>
       <p> Next of kin firstname: <input type="text" name="nkfirst" ></p>
       <p> Next of kin lastname: <input type="text" name="nklast" ></p>
	<input type=  "Submit" value= "Submit"/>

</fieldset>
</form>	


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
	<link rel="stylesheet" href="css/form-register.css">

</head>

	<header>
		<h1>User Biography</h1>
        
        <a href="welcuser.php">Login</a>
      <a href="welcome.php">Home</a>


    </header>

 
<body>


    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="creatdb.php">

            <div class="form-register-with-email">


                <div class="form-transparent-background">

                    <div class="form-title-row">
                        <h1>User Registration</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>First Name </span>
                            <input type="text" name="firstname">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Last Name</span>
                            <input type="text" name="lastname">
                        </label>
                    </div>
                   
                    <div class="form-row">
                        <label>
                            <span>Date of Birth</span>
                            <input type="date" name="dob">
                        </label>
                    </div>
                     <div class="form-row">
                        <label>
                            <span>Program Level</span>
                            <input type="number" name="programlevel">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Contact Number</span>
                            <input type="number" name="contact_number">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email Address</span>
                            <input type="email" name="email">
                        </label>
                    </div>
                  
                    
                     <div class="form-row">
                        <label>
                            <span>Residential Address</span>
                            <input type="text" name="address">
                        </label>
                    </div>
                      <div class="form-row">
                        <label>
                            <span>Username </span>
                            <input type="text" name="username">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>
                    
                    <div class="form-row"><br/>
                        <label>
                            <span>Next of Kin First Name </span>
                            <input type="text" name="nkfirst">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Next of Kin Last Name</span>
                            <input type="text" name="nklast">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Next of Kin Email Address</span>
                            <input type="email" name="nkemail">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Relationship with Next of Kin</span>
                            <input type="text" name="relationship">
                        </label>
                    </div>
                    
           



                   
                    <div class="form-row">
                        <button type="Submit" value="Submit">Register</button>
                    </div>

                </div>

                <a href="welcpage.php">Already have an account? Login here &rarr;</a>

            </div>

           

        </form>

    </div>

</body>

</html>

