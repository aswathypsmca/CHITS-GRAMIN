<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>chitty management system</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    <img class="logo" src="logo1.png" alt="Logo"/>
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>&nbsp
    <b class="heading2"><strong><font color="blue" size="4">GOVT.OF KERALA</font></strong></b><BR>


  </div>
  <!-- Div for body section -->
 <div class="body_text1"><br>
 <br><br><br>
<a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>

<br><br><br>
<
 
  <a href="logout.php">LOGOUT</a><br>


</div>
    </div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->
<h2 style="color:red">CHANGE PASSWORD</h2><br>
<form name="myform" method="post" action="changepassword.php">
<table >
	
	<!--<tr><td> User name:</td> <td><input type="text" name="uname"></td></tr>-->
	<tr><td>Current password:</td><td><input type="password" name="pwd"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="pwd2"></td></tr>
	<tr><td> confirm password:</td><td><input type="password" name="pwd3"></td></tr>
	<tr><td >&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit">change</button></td></tr>
	&nbsp&nbsp</table>
	  
</form>

  </div>
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      
</div>
    </body>
    </html>
