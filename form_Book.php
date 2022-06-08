<?php 
include_once"Header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="form_Book.css">
</head>
<body>
    <div id="form">
  <form action="Book_ctrl.php">
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="indate">Check in Date</label>
    <input type="date" id="indate" name="indate" placeholder="in Date..">

    <label for="outdate">Check in Date</label>
    <input type="date" id="outdate" name="outdate" placeholder="outdate..">

    <label for="Room">Room</label>
    <select id="Room" name="Room">
      <option value="australia">room with 2 bed</option>
      <option value="canada">room with 1 bed</option>
      <option value="usa">room with 3 bed</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>