<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>STAFF FORMS</title>

	<link rel="stylesheet" href="HR SYSTEM/WebContent/demo.css">
	<link rel="stylesheet" href="HR SYSTEM/WebContent/form-basic.css">

</head>


	<header>
		<h1>STAFF FORMS</h1>
    </header>

    <ul>
        <li><a href="add.jsp" class="active">Home</a></li>
    </ul>

<body>
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="#">

            <div class="form-title-row">
                <h1>Personal Information</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>First Name</span>
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
                    <span>Date of birth</span>
                    <input type="date" name="dob">
                </label>
            </div>
            
             <div class="form-row">
                <label><span>Gender</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="gender" value="male">
                            <span>Male</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="gender" value="female">
                            <span>Female</span>
                        </label>
                    </div>
                 </div>
            </div>

             <div class="form-row">
                <label>
                    <span>Date of Employment</span>
                    <input type="date" name="doe">
                </label>
            </div>

            <div class="form-title-row">
                <h1>Contact Information</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Residential Address</span>
                    <input type="text" name="address">
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
                    <span>Mobile Number</span>
                    <input type="tel" name="mobilenum">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Telephone Number</span>
                    <input type="tel" name="telnum">
                </label>
            </div>


            <div class="form-title-row">
                <h1>Work Information</h1>
            </div>


            <div class="form-row">
                <label>
                    <span>Date of Employment</span>
                    <input type="date" name="doe">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Contract Duration</span>
                    <input type="text" name="doe">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Rank</span>
                    <select name="dropdown">
                        <option>Professor</option>
                        <option>Senior Lecturer</option>
                        <option>Lecturer</option>
                        <option>Assistant Lecturer</option>
                    </select>
                </label>
            </div>

             <div class="form-row">
                <label>
                    <span>Department</span>
                    <select name="dropdown">
                        <option>Informatics</option>
                        <option>Engineering</option>
                        <option>Business IT</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Category</span>
                    <select name="dropdown">
                        <option>teaching</option>
                        <option>non-teaching</option>
                    </select>
                </label>
            </div>

           

            

                    

            <div class="form-row">
                <button type="submit">Submit Data</button>
            </div>

        </form>

    </div>

</body>

</html>





