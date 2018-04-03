	<?php
include 'dbcon.php';
		if(!(isset($_SESSION['user_name'])))
	{

	//header('location:index.php');
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
		<div class="body1" >
		<!-- <center><img src="ajce.png" id="ajce_img"></center>-->
			<div class="body_text1">
			<a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
			<br><br>
			<a href="logout.php">LOGOUT</a><br>
			</div>
		</div>
  <!-- Div for login section -->
		<div class="login2" style>
		<!--<center><h2 class="login_head">-->
			<div class="body_text3">
	<br><br><br><br><br>
			<table style="width:200% cellpadding:1%  ">
			<br><br><br><br><br><br><br><br>
	</table><form action="#" method="post">
<tr><td> SELECT USER NAME:</td><td><select name="sl">
	<option>select</option>
	
  <?php
$sq2="SELECT s_email FROM `tbl_staff` ";
$result2=mysqli_query($con,$sq2);
while($row=mysqli_fetch_array($result2))
{
	//$i=$row['log_id'];
	//echo($row['chitt_name']);
	?>
	  <option><?php echo $row['s_email'] ?></option>
    
  <?php
}
?>
</select></td> <td><input type="submit" name="view" value="view" style=""></td></tr></br><tr></tr>

</form>


<form method="post" name="myform" action="#">
<?php
if(isset($_POST['view']))
{
$a=$_POST["sl"];
//INSERT INTO `tbl_customer`(`cust_id`, `c_name`, `c_gender`, `c_address`, `c_mob`, `c_email`, `pan`, `log_id`, `status`
$sql5="SELECT * FROM  `tbl_staff` WHERE `s_email`='$a'";
$result5=mysqli_query($con,$sql5);
$r5=mysqli_fetch_array($result5);
$s1=$r5['s_name'];
//echo $s1;


?>

               
        
		<tr><td> name:</td> <td><input type="text" name="sname" value="<?php echo $r5['s_name']?>"></td></tr><br>
	
		<tr><td>Phone:</td><td><input type="text"name="PHNO"value="<?php echo $r5['s_mob']?>"></td></tr><br>
        <tr><td> Email:</td> <td><input type="text"  value="<?php echo $r5['s_email'] ?>" name="em" id="em"></td></tr>
		  
 
	<br>
	
	<tr><td> BASIC SALARY:</td><td><input type="varchar" name="bs"  required></td></tr></br><tr></tr>
	<tr><td><input type="submit" name="submit" value="ADD"></td></tr><tr></tr>	
	</form>
	<?php
}
?> 
		<table>
		<?php

          $dd = date('Y-m-d');
		  if(isset($_POST['submit']))
		{
		   $a=$_POST["em"];//email
           $s=$_POST["bs"];
			$hra=(10*$s)/100;
			$pf=(12*$s)/100;
			$da=(20*$s)/100;
			$gross=$s+$hra+$da;
			$net=$gross-$pf;
//echo $a;
//echo($b);
//SELECT `cust_id`, `c_name`, `c_gender`, `c_address`, `c_mob`, `c_email`, `pan`, `log_id`, `status` FROM `tbl_customer` WHERE
$sql2="SELECT * FROM `tbl_staff` WHERE s_email='$a'";
$re=mysqli_query($con,$sql2);
$row1=mysqli_fetch_array($re);
$cid=$row1['s_id'];
	//echo $cid;	
			
	
	
  //INSERT INTO `tbl_salary`(`sal_id`, `s_id`, `hra`, `pf`, `da`, `gross`, `s_date`, `net`, `bs`)'$a','$b','$c','$d','$e','0'
  $sql3="INSERT INTO `tbl_salary`(`s_id`, `hra`, `pf`, `da`, `gross`, `s_date`, `net`, `bs`)VALUES('$cid','$hra','$pf','$da','$gross','$dd','$net','$s')";
	$result3=mysqli_query($con,$sql3);
	?>
	<form method="post" name="myform" action="#">
		 <tr><td> basic:</td> <td><input type="text"  value="<?php echo $s; ?>" name="em" id="em"></td></tr>
		<tr><td> hra:</td> <td><input type="text" name="sname" value="<?php echo $hra?>"></td></tr><br>
	
		<tr><td>pf:</td><td><input type="text"name="PHNO"value="<?php echo $pf?>"></td></tr><br>
        <tr><td> da:</td> <td><input type="text"  value="<?php echo $da ?>" name="em" id="em"></td></tr>
		
		<tr><td> gross:</td> <td><input type="text" name="sname" value="<?php echo $gross?>"></td></tr><br>
	
		<tr><td>net:</td><td><input type="text"name="PHNO"value="<?php echo $net?>"></td></tr><br>
       
		</form>
	
	<?php
	
	
		}
		?>
		
		</table>
		</div></div>
		</div>

	<div class="footer">
    <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
    </div>
	


    </body>
    </html>
