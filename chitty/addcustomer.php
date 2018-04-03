 <?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
$dd = date('Y-m-d');
if(isset($_POST['submit']))
{
$a=$_POST["em"];//email
$b=$_POST["ch"];//chitty name
//echo($a);
//echo($b);
//SELECT `cust_id`, `c_name`, `c_gender`, `c_address`, `c_mob`, `c_email`, `pan`, `log_id`, `status` FROM `tbl_customer` WHERE
$sql1="SELECT `cust_id` FROM `tbl_customer` WHERE c_email='$a'";
$re=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($re);
$cid=$row1['cust_id'];
//echo($cid);
         
//SELECT `c_id`, `chitt_name`, `installment`, `divisions`, `chitt_amount`, `s_date`, `status` FROM `tbl_chittreg` WHERE
$sql2="SELECT `c_id` FROM `tbl_chittreg` WHERE chitt_name='$b'";
$re2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($re2);
$chid=$row2['c_id'];
//echo($chid);
$sql21="SELECT `cust_id` FROM `tbl_custchitty` WHERE `cust_id`='$cid'";
$re5=mysqli_query($con,$sql21);	
$row3=mysqli_fetch_array($re5);

	$sql9="SELECT cust_id FROM `tbl_custchitty` WHERE `cust_id`='$cid' and `c_id`='$chid'";
	$re9=mysqli_query($con,$sql9);	
$row9=mysqli_fetch_array($re9);
$a=count($row9);
//echo $a;
   
	if($a>0)
	{
		echo"<script>alert('already exists!!!!');</script>";
	}
	else{
		//INSERT INTO `tbl_custchitty`(`cust_ch_id`, `c_id`, `cust_id`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4])
$sql4="INSERT INTO `tbl_custchitty`(`c_id`, `cust_id`, `status`,`add_date`) VALUES ('$chid', '$cid', '0','$dd')";
$re4=mysqli_query($con,$sql4);
echo"<script>alert('sucess!!!!');</script>";
	}

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
   
<div class="body_text1">
<a href="stafflogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>
 <a href="staff_cust_view.php">view</a><br><br>


  
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
$sq2="SELECT * FROM `tbl_customer` where status = 1";
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
echo $r5['c_name'];
?>

               
        
		<tr><td> name:</td> <td><input type="text" name="cname" value="<?php echo $r5['c_name']?>"></td></tr>
	
		<tr><td>Phone:</td><td><input type="text"name="PHNO"value="<?php echo $r5['c_mob']?>"></td></tr>
        <tr><td> Email:</td> <td><input type="text"  value="<?php echo $r5['c_email'] ?>" name="em" id="em"></td></tr>
		  
 
	
	
	<tr><td> SELECT CHITTY:</td><td><select name="ch">
	<option>select</option>
	<?Php
	}
?>
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
