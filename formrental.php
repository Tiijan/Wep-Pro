<?php
use function CommonMark\Parse;
$x= $_POST['dd'];
$y= $_POST['number'];
session_start();
$z= $_SESSION['username'];
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login_demo'); 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id=1;
$sql = "SELECT id FROM roomrent";
$result = $link->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    $id=$row['id']+1;

  } 
}
$sql = "INSERT INTO roomrent (Checkdate, Room, Nameee,id)
VALUES ('$x', '$y', '$z','$id')";

if ($link->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}
$link->close();
?>