<?php
include 'dbcon.php';
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>chitty management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>&nbsp
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b><BR>


  </div>
  <!-- Div for body section -->
 <div class="body1">
 
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
<div class="body_text1">

 

<a href="stafflogin.php" > HOME</a><br><br>
		 
<a href="auction_data.php" > ADD WINNER</a><br><br>
 
  <a href="logout.php">LOGOUT</a><br>


   </div>
	  </div>

  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->

    
      

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->
</div>

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      
</div>
    </body>
    </html>
