<?php include('config1.php');

$sql = 'SELECT * FROM students order by student_id';
$result = mysqli_query($connect_db, $sql);

$output = "";

if(!$result) {
  echo "No result set";
} else {
  while ($row = mysqli_fetch_row($result)) {
    foreach($row as $value) {
     $output = $output . $value . ",";
    }
  }
}
 
?>
