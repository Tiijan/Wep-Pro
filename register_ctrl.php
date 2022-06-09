<?php 
$x=$_POST['name'];
$y=$_POST['password'];
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login_demo'); 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO login (UserName, Password)
VALUES ('$x', '$y')";

if ($link->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location:form2.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}
$link->close();
?>