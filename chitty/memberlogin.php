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
    <b class="heading2"><strong><font color="blue" size="4">GOVT.OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
  <div class="body1">
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
    <div class="body_text1">
	<?php
$vv=$_SESSION["user_name"];

$sql="SELECT * FROM  `tbl_customer` WHERE c_email='$vv'";

$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>
<b class="heading22"><strong><font color="blue" size="5">WELCOME </font></strong></b><br>
<img src="<?php echo $r['image']; ?>" width="105px" height="105px"  /><br>


<!--<font size=3 color="white"><b>WELCOME</b> <i> <?php echo $r['c_name']; ?></i></font><br>-->


<!--<a href="viewauction.php" >VIEW AUCTION</a>
<br><br>-->

 <div class="dropdown">
<a href="#" id="user"> VIEW</a>
<div class="dropdown-content">
		<a href=" memberprofile.php">PROFILE</a><br>
		<a href="winner.php">AUCTION</a>
		
		
	</div>
</div>
<br><br>
<a href="feedback.php" >FEED BACK</a><br><br>

 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
    <br><br><b class="heading25"><strong><font color="blue" size="5"><center><marquee>WELCOME <i><font color="red" size="6"> <?php echo $r['c_name']; ?></font></i>&nbsp PLEASE CHECK OUT  <a href="view_notification.php" ><font color="red" size="5">&nbsp&nbsp**NOTIFICATION**</font></a> </marquee></center></font></strong></b>
  </div>
<div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>
	  

    </body>
    </html>
