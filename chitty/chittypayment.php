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

		if(isset($_POST['submit']))
		{
			$a=$_POST["chitty"];
			$cid1=$_POST["cid"];
			$b=$_POST["cname"];
			$c=$_POST["instalno"];
			$d=$_POST["amount"];
			$e=$_POST["sdate"];
			$did=$_POST["did"];
			
			$s=$_SESSION['user_name'];
$sql5="SELECT * FROM `tbl_staff` WHERE s_email='$s'";
$result15=mysqli_query($con,$sql5);
$r=mysqli_fetch_array($result15);
$cr=$r['s_id'];

			
			//$sql1="SELECT `cust_id` FROM `tbl_customer` WHERE c_name='$b'";
			$sql1="SELECT * FROM `tbl_customer` WHERE c_name='$b'";
            $re=mysqli_query($con,$sql1);
             $row1=mysqli_fetch_array($re);
              $cid=$row1['cust_id'];
		$mob=$row1['c_mob'];
//echo($mob);
         
//SELECT `c_id`, `chitt_name`, `installment`, `divisions`, `chitt_amount`, `s_date`, `status` FROM `tbl_chittreg` WHERE
$sql2="SELECT `c_id` FROM `tbl_chittreg` WHERE chitt_name='$a'";
$re2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($re2);
$chid=$row2['c_id'];
//echo($chid);
     $sql21="SELECT `cust_id` FROM `tbl_custchitty` WHERE `cust_id`='$cid'";
     $re5=mysqli_query($con,$sql21);	
     $row3=mysqli_fetch_array($re5);

		
			//echo $cust;
			//INSERT INTO `tbl_chittypayment`(`p_id`, `cust_ch_id`, `s_id`, `cid`, `install_no`, `chitt_amount`, `p_date`) VALUES
		$sql1="INSERT INTO `tbl_chittypayment`( `cust_ch_id`, `s_id`, `cid`, `install_no`, `chitt_amount`, `p_date`) VALUES
		('$did','$cr','$cid1','$c','$d','$e')";
	$result1=mysqli_query($con,$sql1);

	$msg="Hi $b your payement was sucess full, your payment amout is $d, TEAM CHITTY";
 send($msg,$mob);	
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
			<br><tr><td><h3><br><br>CHITTY PAYMENT</h3></td></tr>
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
				
				 

		</td></tr></br><tr></tr>
		<tr><td>Customer ID:</td><td>
		<select name="customer" id="customer" onchange="getId1(this.value);">
        <option value=" ">select id</option>
		</select></br><tr></tr>
		
	<tr><td> NAME:</td> <td><input type="text"name="cname" id="cname"></td></tr></br><tr></tr> 
	<tr><td> ADDRESS:</td> <td><input type="text" name="caddr"id="caddr"></td></tr></br><tr></tr>
	
	<tr><td> PHONE:</td> <td><input type="text" name="cmob" id="cmob" maxlength="10" ></td></TR></br></tr><tr></tr>
	
	<tr><td> INSTALLMENT NO:</td> <td> <input type="varchar" id="instalno" name="instalno" placeholder="Total installment" required></td></tr></br><tr></tr>
	<tr><td> AMOUNT:</td> <td><input type="varchar" id="am" name="amount" required></td></tr></br><tr></tr>
	
	<tr><td> PAYING DATE:</td> <td><input type="date" name="sdate"required></td></tr></br><tr></tr>
	<input type="hidden" id="cid" name="cid">
	<input type="hidden" id="did" name="did">
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
    url: "getdata4.php",
    data: "Did="+val,
    success: function(data){
		var aa =data.split(":");
		//alert(aa[0]);
		$('#cname').val(aa[0]);
				$('#caddr').val(aa[1]);

						$('#cmob').val(aa[2]);
$('#instalno').val(aa[4]);
$('#am').val(aa[3]);
$('#cid').val(aa[5]);
$('#did').val(aa[6]);

     // $("#village").html(data);

}
});
} 
</script>

    </body>
    </html>
