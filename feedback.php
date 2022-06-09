<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$eemail=$_POST['email'];
$pnum=$_POST['phonenum'];
$con=$_POST['confrim'];
$txt=$_POST['text'];
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
$sql = "INSERT INTO contact (firstname, lastname, email,confirmnum,feedback)
VALUES ('$fname', '$lname', '$eemail','$con','$txt')";

if ($link->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}
$link->close();

?>