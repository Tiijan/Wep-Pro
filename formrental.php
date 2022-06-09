<?php
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
$sql = "INSERT INTO roomrent (Checkdate, Room, Nameee )
VALUES ('$x', '$y', '$z')";

if ($link->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}
$link->close();

?>