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

  <title> chitty management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    <!--<img class="logo" src="logo1.png" alt="Logo"/>-->
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>&nbsp
    <b class="heading2"><strong><font color="blue" size="4">GOVT.OF KERALA</font></strong></b><BR>


  </div>
  <!-- Div for body section -->
  <div class="body1">
<div class="body_text1">
<a href="stafflogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>

<br><br>
<a href="schangepsw.php" >CHANGE PASSWORD</a><br><br>

 <br><br>
 
  <a href="logout.php">LOGOUT</a><br>


</div>
    </div>
	</div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->

 <h2 style="color:red">PROFILE</h2>  
<?php
//INSERT INTO `tbl_staff`(`s_id`, `s_name`, `s_gender`, `s_address`, `s_mob`, `dob`, `s_email`, `doj`, `log_id`)
$vv=$_SESSION["user_name"];
//echo($vv);
$sql1="SELECT * FROM `tbl_staff` where s_email='$vv'";
$result1=mysqli_query($con,$sql1);
 $r=mysqli_fetch_array($result1);
 //print_r($r);
 //echo($r['s_name']);
//echo $sql;
//echo $result;

?>

               <div class="body_text11">
        <form name="myform" method="post" action="staffprofileedit.php">
	 <table >
	 <tr><td><img src="<?php echo $r['image']; ?>" width="105px" height="105px"  /></td></tr><br>
		
	
		<tr><td>Phone:</td><td><input type="phno"name="PHNO"value="<?php echo $r['s_mob']?>"></td></tr>
        
		<tr><td> Address:</td> <td><input type="text" name="saddress" value="<?php echo $r['s_address']?>"></td></tr>
		<tr><td> Place:</td> <td><input type="text" name="splace" value="<?php echo $r['splace']?>"></td></tr>
		
		<tr><td><button class="button" name="submit" style="margin-left:40%;">Update</button></td></tr><tr></tr>
				&nbsp&nbsp</table>
 
      
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

  	
   </div>
</div>
      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>
	  

    </body>
    </html>
