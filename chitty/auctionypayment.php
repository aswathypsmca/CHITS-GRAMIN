
<?php
include 'dbcon.php';

function send($sms, $to) {

    $sms = urlencode($sms);
    $token = "99dcdc927eaed57d695d9e4ead790304";
    $sendercode="GRAMIN";   
    $url = "http://sms.safechaser.com/httpapi/httpapi?token=".$token."&sender=".$sendercode."&number=".$to.'&route=2&type=1&sms='.$sms;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $datares = curl_exec($ch);
    curl_close($ch);
    return $datares;
}


	if(!(isset($_SESSION['user_name'])))
	{

	//header('location:index.php');
	}
$dd = date('Y-m-d');
$s_id=$_SESSION['log_id'];
		if(isset($_POST['submit']))
		{
			
			$a=$_POST["surname"];
			$b=$_POST["addr"];
			//$c=$_POST["division"];
			$d=$_POST["amount"];
			$e=$_POST["vno"];
			$f=$_POST["cno"];
			$cust_ch_id=$_POST["customer"];
$lid=$_SESSION['log_id'];
$sql4="SELECT * FROM `wallet` WHERE `log_id`='$lid'";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_fetch_array($result4);
$r1=$row4['balance'];
//echo $r1;
if($d>$r1)
{
	echo "<script>if(confirm('no balance available!!!!')){document.location.href='stafflogin.php'}else{document.location.href='stafflogin.php'};</script>";

}
else
{
$sql9="SELECT * FROM `tbl_customer` WHERE `cust_id`='$cust_ch_id'";
$result9=mysqli_query($con,$sql9);
$row9=mysqli_fetch_array($result9);
$lgid=$row9['log_id'];
echo $lgid;
	
$sql6="SELECT * FROM `wallet` WHERE `log_id`='$lgid'";
$result6=mysqli_query($con,$sql6);
$row6=mysqli_fetch_array($result6);
$r6=$row6['balance'];
$bl=$d+$r6;

$bl4=$r1-$d;
$sql5="UPDATE `wallet` SET `balance`='$bl' WHERE `log_id`='$lgid'";
$result5=mysqli_query($con,$sql5);

$sql33="UPDATE `wallet` SET `balance`='$bl4' WHERE `log_id`='$lid'";
$result33=mysqli_query($con,$sql33);
			//INSERT INTO `tbl_apayment`(`ap_id`, `cust_ch_id`, `ap_date`, `s_id`, 
			//`surety_name`, `surety_add`, `ap_amount`, `v_no`, `cheq_no`) VALUES (
	$sql1="INSERT INTO `tbl_apayment`(`cust_ch_id`, `ap_date`, `s_id`, `surety_name`, `surety_add`, `ap_amount`, `v_no`, `cheq_no`)
	 VALUES ('$cust_ch_id', '$dd', '$s_id', '$a', '$b', '$d', '$e', '$f')";
	$result1=mysqli_query($con,$sql1);
	$sql2="SELECT * FROM `tbl_customer` WHERE cno='$f'";
            $re=mysqli_query($con,$sql2);
             $row1=mysqli_fetch_array($re);
              $cid=$row1['cust_id'];
		$mob=$row1['c_mob'];
		$n=$row1['c_name'];
	$msg="Hi $n your Transaction has sucessfully done, your payment amout is $d, TEAM CHITTY";
   send($msg,$mob);	

	$q11 = "SELECT `c_id` FROM `tbl_chittreg` WHERE `chitt_name`=$a ";

	$row1 = mysqli_query($con,$q11);
		}
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
			<a href="stafflogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
			<br><br>
			<a href="logout.php">LOGOUT</a><br>
			</div>
		</div>
  <!-- Div for login section -->
		<div class="login2">
		<!--<center><h2 class="login_head">-->
			<div class="body_text3">
	<form method="post" name="myform" action="#">
			<table style="width:200% cellpadding:1%  ">
			<tr><td><h3>AUCTION/LOT PAYMENT</h3></td></tr>
			
			<tr><td> TYPE:</td><td><select name="type"required>
    
     <option value="select" selected>select</option>
    <option value="AUCTION">AUCTION</option>
	<option value="LOT">LOT</option>
	</select></td></tr></br>
			<tr><td> CHITTY NAME:</td> 
			<td><select name="chitty" onchange="getId(this.value);">
				<option value="">select chitty</option>
			<?php
				$query = "SELECT * FROM tbl_chittreg ";
				$results = mysqli_query($con, $query);
			while($row=mysqli_fetch_array($results)) 
			{
			?>
				<option value="<?php echo $row["c_id"];?>"> <?php echo $row["chitt_name"]; ?> </option>
			<?php
				echo $row["chitt_name"];
			}
			?>
			
				</select>
				
				 

		</td></tr></br>
		<tr><td>Customer ID:</td><td>
		<select name="customer" id="customer" onchange="getId1(this.value);">
        <option value=" ">select id</option>
		</select></br><tr></tr>
		
	<tr><td> NAME:</td> <td><input type="text"name="cname" id="cname"></td></tr></br><tr></tr> 
	<tr><td> ADDRESS:</td> <td><input type="text" name="caddr"id="caddr"></td></tr></br><tr></tr>
	<tr><td> PHONE:</td> <td><input type="text" name="cmob" id="cmob" maxlength="10" ></td></TR></br></tr><tr></tr>
	
	<tr><td> SURETY NAME:</td><td><input id="surname" type="varchar" name="surname" placeholder="Surety Name" required></td></tr></br><tr></tr>
	<tr><td> ADDRESS:</td> <td><input id="addr" type="varchar" name="addr" required></td></tr></br><tr></tr>
	<tr><td> AMOUNT:</td> <td><input type="varchar" id="amount" name="amount" required></td></tr></br><tr></tr>
	
	<tr><td> Account NO:</td> <td><input type="varchar" id="cno" name="cno"required></td></tr></br><tr></tr>
	<tr><td> VOUCHER NO:</td> <td><input type="varchar" name="vno"required></td></tr></br><tr></tr>
	
	<tr><td ><input type="submit" name="submit" value="PAY">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
	</form>
		</div></div></div>

	<div class="footer">
    <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
    </div>
	<script src="js/jquery.js"></script>
<script>
function getId(val){

  $.ajax({
    type: "POST",
    url: "getdata.php",
    data: "cust_id="+val,
    success: function(data){
	//	alert(data);
      $("#customer").html(data);

}
});
}

 function getId1(val){

  $.ajax({
    type: "POST",
    url: "getdata8.php",
    data: "Did="+val,
    success: function(data){
		var aa =data.split(":");
		//alert(aa[0]);
		$('#cname').val(aa[0]);
				$('#caddr').val(aa[1]);

						$('#cmob').val(aa[2]);
						$('#surname').val(aa[4]);
						$('#cno').val(aa[5]);
						$('#addr').val(aa[3]);
						$('#amount').val(aa[6]);

     // $("#village").html(data);

}
});
} 
</script>

    </body>
    </html>
