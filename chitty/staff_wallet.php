<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
if(isset($_POST['submit1']))
{
$lid=$_SESSION['log_id'];
$amount=$_POST['amount'];
$sql4="SELECT * FROM `wallet` WHERE `log_id`='$lid'";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_fetch_array($result4);
$r1=$row4['balance'];
$ttl=$r1+$amount;
$sql5="UPDATE `wallet` SET `balance`='$ttl' WHERE `log_id`='$lid'";
$result5=mysqli_query($con,$sql5);
header("location:staff_wallet.php");
}
if(isset($_POST['submit']))
{
$lid=$_SESSION['log_id'];
$amount=$_POST['amount'];
$cvv=$_POST['cvv'];
$cardno=$_POST['cardno'];
$bank=$_POST['bank'];
$sql="INSERT INTO `wallet`(`log_id`, `acc_no`, `cvv`, `bank name`, `balance`, `status`) VALUES ('$lid', '$cardno', '$cvv', '$bank', '$amount', '0')";
$result=mysqli_query($con,$sql);
header("location:staff_wallet.php");
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
    
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>&nbsp
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b><BR>


  </div>
  <!-- Div for body section -->
 <div class="body1">
 
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
<div class="body_text1">
<?php
$vv=$_SESSION["user_name"];

$sql="SELECT * FROM  `tbl_staff` WHERE s_email='$vv'";

$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>
<img src="<?php echo $r['image']; ?>" width="105px" height="105px"  /><br>


<div class="dropdown">
<a href="#" id="user">VIEW</a>
<div class="dropdown-content">
		<a href=" staffprofile.php">PROFILE</a><BR>
		<a href=" auction.php"> AUCTION</a>
 
</div></div>
 <br><br><br><br>

<a href="memberreg.php" id="user"> MEMBER</a><br><br>
<div class="dropdown">
<a href="#" id="user" >PAYMENT</a>
<div class="dropdown-content">
         <a href="chittypayment.php">CHITTY </a><br>
		 <a href="auctionypayment.php">AUCTION </a><br>
</div></div><br><br><br><br>		 

 
  <a href="logout.php">LOGOUT</a><br>


   </div>
	  </div>

  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->
<div class="divv2" style="margin-top:25%;">
<?php
$lid=$_SESSION['log_id'];
$sql1="SELECT * FROM `wallet` WHERE `log_id`='$lid'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$r=$row1['log_id'];
if($row1['log_id']=="")
{
	?>

      
			<div style="width:50%; height:100%; margin-top:-25%;  z-index:100; margin-left:10%;">
			<h3 style="color:pink;margin-left:20%; margin-top:-2%;">WALLET</h3><br />								
			<form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<span style="color:blue;">amount</span><span style="color:red;">*</span>:<input type="text" name="amount" id="loc" required style="z-index:50px; width:110%; height:30px;" >
			<span style="color:blue;">cvv</span><span style="color:red;">*</span>:<input type="text" name="cvv" id="loc" required style="z-index:50px; width:110%; height:30px;  color:red; " >
		<span style="color:blue;">card no</span><span style="color:red;">*</span>:<input type="text" name="cardno" id="loc" required style="z-index:50px; width:110%; height:30px;  color:red; " >
		<span style="color:blue;">bank</span><span style="color:red;">*</span>:<select name="bank"  required style="z-index:50px; width:110%; height:30px;">
		<option>select</option>
		<option>SBI</option>
		<option>Canara Bank</option>
		<option>Vijaya Bank</option>
		<option>Axis Bank</option>
		<option>Federal Bank</option>
		</select>
			
		
			
			<table style="width:-5%; margin-left:50%;	28%;margin-top:10%;"><tr><td><button class="btn btn-primary btn-block" name="submit">ADD>></button></td></tr></table>	
			</form>			
			</div>
			

		<?php
}
else
{
?>
	<div style="width:50%; height:100%; margin-top:-25%;  z-index:100; margin-left:10%;">
			<h3 style="color:pink;margin-left:20%; margin-top:-2%;">WALLET</h3><br />								
			<form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<span style="color:blue;">amount</span><span style="color:red;">*</span>:<input type="text" name="amount" id="loc" required style="z-index:50px; width:120%; height:70px; " >
			
			
			
			<table style="width:-5%; margin-left:50%;	28%;margin-top:10%;"><tr><td><button class="btn btn-primary btn-block" name="submit1">ADD>></button></td></tr></table>	
			</form>			
			</div>
			<?php
			$sql3="SELECT * FROM `wallet` WHERE `log_id`='$lid'";
			$result3=mysqli_query($con,$sql3);
			$row3=mysqli_fetch_array($result3);
			$r1=$row3['balance'];
?>
		

		 <div id="blance" style="margin-left:10%; margin-top:5%; ">
		<span style="color:black;"><h1>Balance=<?php echo $r1 ?></h1></span>
		 </div>
		 <?php
}
?>
</div>


    
      

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->
</div>

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      
</div>
    </body>
    </html>
