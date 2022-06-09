<?php
include_once"Header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formContact.css">
    <title>4 season hotel</title>
</head>
<body>
   <h2 id="middel">CONTACT US</h2>
   <hr id="center">
   <div id="klam">    
        <p id="left">ADDRESS</p>
        <p id="right">EGYPT</p>
        <hr id="center">
        
        <p id="left">RESERVATIONS</p>
        <p id="right">00000111</p>
        <hr id="center">
        
        <p id="left">FRONT DESK</p>
        <p id="right">#00122</p>
        <hr id="center">
        
        <p id="left">GUEST FAX</p>
        <p id="right">FAX</p>
        <hr id="center">
   </div>
   <div id="cahngec">
       
        <form action="feedback.php" method="post">
            <select id="pad">
                <option value="0">Mr.</option>
                <option value="1">Mrs.</option>
                <option value="2">MS.</option>
                <option value="3">Miss</option>
            </select>
            <input type="text" id="first" name="firstname" required placeholder="First Name*">
            <input type="text" id="sec" name="lastname" required placeholder="Last Name*">
            <br >
            <input type="email" id="other"required placeholder="Email*" name="email">
            <input type="text" id="ol" placeholder="Phone number" name="phonenum" required>
            <br >
            <select id="other"  required>
            <option value="0">Reason for contact*</option>
            <option value="1">Technical Support</option>
            <option value="2">Lost Items</option>
            <option value="3">Medical alert</option>
            <option value="4">Other</option>
            </select>
            <input type="text" id="ol" placeholder="Confirmation Number" name="confrim">
            <br >
            <input type="text" id="Feedback" placeholder="How Can I help You?"required name="text">
            <br >
            <button id="bton">Submit</button>
        </form>
           
       
   </div>
   
</body>
</html>
<?php
include_once"footer.php";
?>