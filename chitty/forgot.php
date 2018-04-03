  <?php
include 'dbcon.php';

$dd = date('Y-m-d');
if(isset($_POST['submit']))
{
	function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );    
    }
	
$em=$_POST['email'];
$sql2="SELECT * FROM `tbl_login` WHERE `user_name`='$em'";
$result2=mysqli_query($con,$sql2);
$r=mysqli_fetch_array($result2);
$cr=$r['password'];
$p=decryptIt( $cr );
$to = "$em";
$subject = "Gramin chitty management";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Hi, Welcome to Gramin Chitty Management.This email contains username and password</p>
<table>
<tr>
<th>USER NAME</th>
<th>PASSWORD</th>
</tr>
<tr>
<td>$em</td>
<td>$p</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <aswathypsmca123@gmail.com>' . "\r\n";
$headers .= 'Cc: aswathypsmca123@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

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
<a href="index.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>

 
  


    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
  
<!--<img src="clg.png" id="ajce_img" width="800px" height="300px" >
-->
<div class="body_text2">
    <form method="post" name="myform" action="#">
	<table style="width:200% cellpadding:1%  ">
	 <BR><BR><BR><br><br><br><tr><td><h3>Forgot password</h3></td></tr>
	<?php
//$vv=$_SESSION["user_name"];

//$sql="SELECT * FROM  `tbl_customer` WHERE c_email='$vv'";

//$result=mysqli_query($con,$sql);
//$r=mysqli_fetch_array($result);

?>

	
	<tr><td> Enter Email:</td><td><input type="email" name="email"  required></td></tr>
	
	<!--<tr><td> START DATE:</td> <td><input type="date" name="sdate"required></td></tr></br><tr></tr>-->
	<tr><td ><input type="submit" name="submit" value="SAVE">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
</form>
</div>
      </div>
      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>

