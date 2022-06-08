<?php
session_start();
$user=$_POST['loginUser'];
$password=$_POST['loginPassword'];
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
$sql = "SELECT * FROM login";
$result = $link->query($sql);
$ct=1;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    if($row['UserName']==$user&&$row['Password']==$password)  
    {
        $ct=0;
        echo"Logged In!";
        $_SESSION['username']=$user;
        $_SESSION['Password']=$password;
        header("Location:form2.php");
        exit();
    }
  } 
  if($ct==1)
  {
    header("Location:form1.html");
  }
} 
else {
  echo "0 results";
}
$link->close();

?>