<!DOCTYPE html>
<html lang="en">
    
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>View Page</title>
        
        
        <style>
table, th, td {
     border: 1px solid black;
}
</style>

		
	</head>
	
    
    <body>

		
	
				<h2><?php
                  echo "<table style='border: solid 1px black;'>";
                  echo "<tr><th>ID</th><th>Firstname</th><th>Last name</th><th>Date of Birth</th><th>Programme Level</th><th>Phone Number</th><th>Email Address</th><th>address</th><th>Next of Kin Firstname</th><th>Next of Kin Last Name</th><th>Email</th><th>Relationship</th></tr>";

                  class TableRows extends RecursiveIteratorIterator { 
                  function __construct($it) { 
                  parent::__construct($it, self::LEAVES_ONLY); 
                   }

                  function current() {
                  return "<td style='border:1px solid black;'>" . parent::current(). "</td>";
                   }

                  function beginChildren() { 
                  echo "<tr>"; 
                   } 

                  function endChildren() { 
                  echo "</tr>" . "\n";
                   } 
                   } 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT student_id, firstname, lastname, dob, programlevel, contact_number, email, address, nkfirst, nklast, nkemail, relationship FROM students"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> </h2>
						    
		


		
	</body>
</html>





