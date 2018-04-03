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
    <!--<img class="logo" src="logo1.png" alt="Logo"/>-->
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b>
     <!--<b class="heading10"><strong><font color="blue" size="6">OASS</font></strong></b>-->
  



  </div>
  <!-- Div for body section -->
  <div class="body1" >
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
    <div class="body_text1">

<div class="dropdown">
<a href="#" id="user">USERS</a>
<div class="dropdown-content">
		<a href="staffreg.php">STAFF</a><br>
		<a href="memberview.php">MEMBER</a>
		
	</div>
</div><br><br>
<a href="chittyreg.php">CHITTY</a>

 <br><br>
 <a href="addnoti.php">NOTIFICATION</a><br><br>
 <a href="view_feedback.php">FEEDBACK</a><br><br>
 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login1">
  
<!--<img src="clg.png" id="ajce_img" width="800px" height="300px" >
-->
      </div>
      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>

