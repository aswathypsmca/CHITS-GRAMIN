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

  <title>Gramin chitty Management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
        <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
 <div class="body1">
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
<div class="body_text1">
<a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>


 
  <a href="logout.php">LOGOUT</a><br>


    </div>
    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
<form method="post" name="myform" action="#">
  <table><br><br><tr><td> SELECT CHITTY:</td><td><select>
	<option>select</option>
	
  <?php
$sql="SELECT * FROM `tbl_chittreg`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	//$i=$row['log_id'];
	//echo($row['chitt_name']);
	?>
	 <option><?php echo $row['chitt_name'] ?></option>
    
  <?php
}
?>
</select></td></tr></br><tr></tr><br><br><br>
<tr><td> SELECT 	USER NAME:</td><td><select>
	<option>select</option>
	
  <?php
$sq2="SELECT * FROM `tbl_customer`";
$result2=mysqli_query($con,$sq2);
while($row=mysqli_fetch_array($result2))
{
	//$i=$row['log_id'];
	//echo($row['chitt_name']);
	?>
	  <option><?php echo $row['c_email'] ?></option>
    
  <?php
}
?>
</select></td></tr></br><tr></tr>
  <tr><td><input type="submit" name="submit" value="NEXT"></td></tr><tr></tr>	
  </table>
  </form>
</div>

 

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>
