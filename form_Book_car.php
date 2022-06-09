<?php 
include_once"Header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rent car</title>
    <link rel="stylesheet" href="form_Book_car.css">
</head>
<h1 class="rentcar"> rent car </h1>
<body>
    <div id="form">
  <form action="Book_ctrl.php">
    
    <label for="Receipt">Receipt location</label>
    <input type="text" id="Receipt" name="Receipt" placeholder="Your Receipt Location..">

    <label for="delivery">delivery location</label>
    <input type="text" id="delivery" name="Receipt" placeholder="Your delivery Location..">

    
    <label for="indate">Check in Date</label>
    <input type="date" id="indate" name="indate" placeholder="in Date..">

    <label for="outdate">Check out Date</label>
    <input type="date" id="outdate" name="outdate" placeholder="outdate..">

    <label for="Room">CAR</label>
    <select id="Room" name="Room">
      <option value="australia">mercedes  C class</option>
      <option value="canada">mercedes cla</option>
      <option value="usa">BMW 340</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>