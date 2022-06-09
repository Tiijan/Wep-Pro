<?php
include_once "Header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="images.css">
    
    <title>images and videos</title>
</head>
<h1 >
   

        

    <body>

<h2 style="text-align:center">
<div class="imagesTxt">pictures & videos
</div>
</h2>

<br>
<div class="slideshow-container">
  <div class="mySlides1">
    <img src="img1.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img2.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img3.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>

<br>
<div class="slideshow-container">
  <div class="mySlides2">
    <img src="img4.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="img5.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="img6.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>

<script src="images.js"></script>
</body>
</html>