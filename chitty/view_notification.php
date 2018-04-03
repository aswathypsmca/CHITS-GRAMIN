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
<br><a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>

<!--<a href="viewauction.php" >VIEW AUCTION</a>
<br><br>-->

 
<br><br>

 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
  <div class="body_textt4">
    <form method="post" name="myform" action="#">
	<br><br><br><tr><td><h3>NOTIFICATION</h3></td></tr>
	<!--<table style="width:200% cellpadding:1%  table border=1 " >-->
	<table border="1" style="width:200% cellpadding:1%">
	
	<?php


$result ="SELECT * FROM notification";
$result3=mysqli_query($con,$result);
    while($row=mysqli_fetch_array($result3))
    {
    ?>
        <tr> 
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['notification']; ?></td>
          </tr>
  <?php
  }
  ?>
  </table>
	<!--<tr><td> START DATE:</td> <td><input type="date" name="sdate"required></td></tr></br><tr></tr>-->
	
</form>
</div>
    
  </div>
<div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>
	  

    </body>
    </html>
