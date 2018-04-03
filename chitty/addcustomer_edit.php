 <?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
if(isset($_POST['submit']))
{
$a=$_POST["em"];
$b=$_POST["ch"];
//echo($a);
//echo($b);
//SELECT `cust_id`, `c_name`, `c_gender`, `c_address`, `c_mob`, `c_email`, `pan`, `log_id`, `status` FROM `tbl_customer` WHERE
$sql1="SELECT `cust_id` FROM `tbl_customer` WHERE c_email='$a'";
$re=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($re);
$cid=$row1['cust_id'];
//echo($cid);

//SELECT `c_id`, `chitt_name`, `installment`, `divisions`, `chitt_amount`, `s_date`, `status` FROM `tbl_chittreg` WHERE
$sql2="SELECT * FROM `tbl_custchitty` WHERE c_id='$chid' and cust_id= '$c_id' ";
//SELECT `cust_ch_id`, `c_id`, `cust_id`, `status` FROM `tbl_custchitty` WHERE 1

$re2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($re2);
$chid=$row2['c_id'];
$check1=mysqli_num_rows($re2);
if($check1<1)
{
//echo($chid);
//INSERT INTO `tbl_custchitty`(`cust_ch_id`, `c_id`, `cust_id`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4])
$sql4="INSERT INTO `tbl_custchitty`(`c_id`, `cust_id`, `status`) VALUES ('$chid', '$cid', '0')";
$re4=mysqli_query($con,$sql4);
}
else
{
	$msg="exist";
echo "<script>alert('$msg');</script>";
}
//echo $sql4;
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
<a href="stafflogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>
 <a href="cust_view.php">view</a><br><br>


  
  <a href="logout.php">LOGOUT</a><br>


    </div>
    </div>
	 <div class="login2">
  <!-- Div for login section -->
 
  <div class="body_text3" >
<form method="post" name="myform" action="#">
<table style="width:200% cellpadding:1% ;margin-top:20%;  ">
  
   
<form action="#" method="post">

<tr><td> SELECT USER NAME:</td><td><select name="sl">
	<option>select</option>
	
  <?php
$sq2="SELECT * FROM `tbl_customer`where status='1'";
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
</select></td> <td><input type="submit" name="view" value="view" style=""></td></tr></br><tr></tr>

</form>
<?php
if(isset($_POST['view']))
{
$a=$_POST["sl"];
//INSERT INTO `tbl_customer`(`cust_id`, `c_name`, `c_gender`, `c_address`, `c_mob`, `c_email`, `pan`, `log_id`, `status`
$sql5="SELECT * FROM  `tbl_customer` WHERE `c_email`='$a'";

$result5=mysqli_query($con,$sql5);
$r5=mysqli_fetch_array($result5);
//echo $r5['c_name'];
}
?>

               
        
		<tr><td> name:</td> <td><input type="text" name="cname" value="<?php echo $r5['c_name']?>"></td></tr>
	
		<tr><td>Phone:</td><td><input type="text"name="PHNO"value="<?php echo $r5['c_mob']?>"></td></tr>
        <tr><td> Email:</td> <td><input type="text"  value="<?php echo $r5['c_email'] ?>" name="em" id="em"></td></tr>
		  
 
	<!--<tr><td> NAME:</td> <td><input type="text" name="cname"placeholder="Name" required></td></tr></br><tr></tr>
	<tr><td> GENDER:</td><td>  <input type="radio" name="c_gender" value="male" checked> Male &nbsp&nbsp
                               <input type="radio" name="c_gender" value="female"> Female</td></tr></br><tr></tr>
	
	<tr><td> ADDRESS:</td> <td><input type="text" name="caddr"placeholder="Address" required></td></tr></br><tr></tr>
	<tr><td> PHONE:</td> <td><input type="phno" name="cmob" maxlength="10"placeholder="mob num" required></td></TR></br></tr><tr></tr>
	<tr><td> EMAIL:</td> <td><input type="email" name="cemail" placeholder="mail_id" required></td></tr></br><tr></tr>
	<tr><td> PAN:</td> <td><input type="text" name="cpan" placeholder="PAN" required></td></TR></br></tr><tr></tr>
	
	
	
	-->
	<tr><td> SELECT CHITTY:</td><td><select name="ch">
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
	
	<tr><td><input type="submit" name="submit" value="ADD"></td></tr><tr></tr>	
  
	</table>
	</form>
	</div>
	</div>
   <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>
