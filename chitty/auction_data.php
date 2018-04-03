<?php
include 'dbcon.php';

	if(!(isset($_SESSION['user_name'])))
	{

	//header('location:index.php');
	}

		$dd = date('Y-m-d');

		if(isset($_POST['submit']))
		{
			$t=$_POST["type"];
			$a=$_POST["chitty"];
			$b=$_POST["customer"];
			$c=$_POST["instalno"];
			$d=$_POST["amount"];
			$e=$_POST["cmonth"];
	
	$q11="SELECT `cust_ch_id` FROM `tbl_custchitty`WHERE `c_id`='$a'and `cust_id`='$b'";
	$row1 = mysqli_query($con,$q11);
	$r=mysqli_fetch_array($row1);
    $cr=$r['cust_ch_id'];
	//$am=$d*0.5;
	//********8888SELECT `c_id`, `chitt_name`, `installment`, `divisions`, `chitt_amount`, `s_date`, `status` FROM `tbl_chittreg` WHERE 1
	$q20="SELECT `chitt_amount` FROM `tbl_chittreg` WHERE `c_id`='$a'";
	$row20 = mysqli_query($con,$q20);
	$r20=mysqli_fetch_array($row20);
    $am=$r20['chitt_amount'];
	$calc2=$am*.05;
	$amount1=$d-$calc2;
	
	//INSERT INTO `tbl_auction`(`a_id`, `m_id`, `cust_ch_id`, `c_id`, `install`, `amount`, `date`, `type`) VALUES
	//echo ($cr); 
	//NSERT INTO `tbl_auction`(`a_id`, `m_id`, `cust_ch_id`, `install`, `a_winner`, `amount`, `date`)
	$sql4="INSERT INTO  `tbl_auction`(`m_id`,`cust_ch_id`,`c_id`,`install`,`amount`,`date`,`type`)  VALUES ('$e', '$cr','$a','$c','$amount1','$dd','$t')";
    $re4=mysqli_query($con,$sql4);
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
			<a href="auction.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
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
			<br><br><tr><td><h3>AUCTION/LOT WINNER</h3></td></tr>
			
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
				
				 

		</td></tr></br><tr></tr>
		<tr><td>Customer ID:</td><td>
		<select name="customer" id="customer" onchange="getId1(this.value);">
        <option value=" ">select id</option>
		</select></br><tr></tr>
		
	<tr><td> NAME:</td> <td><input type="text"name="cname" id="cname"></td></tr></br><tr></tr> 
	<tr><td> ADDRESS:</td> <td><input type="text" name="caddr"id="caddr"></td></tr></br><tr></tr>
	<tr><td> PHONE:</td> <td><input type="text" name="cmob" id="cmob" maxlength="10" ></td></TR></br></tr><tr></tr>
	
	<tr><td> INSTALLMENT NO:</td> <td> <input id="no" type="varchar" name="instalno" placeholder="Total installment" required></td></tr></br><tr></tr>
	<tr><td> AMOUNT:</td> <td><input type="varchar" name="amount" required></td></tr></br><tr></tr>
	
	<tr><td> MONTH:</td><td><select name="cmonth"required>
    
     <option value="select" selected>select</option>
    <option value="1">January</option>
	<option value="2">February</option>
    <option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
    <option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">Octobar</option>
    <option value="11">November</option>
	<option value="12">December</option>
	
	</select></td></tr></br>
	
	
	<tr><td ><input type="submit" name="submit" value="SAVE">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
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
    url: "getdata50.php",
    data: "Did="+val,
    success: function(data){
		var aa =data.split(":");
		//alert(aa[0]);
		$('#cname').val(aa[0]);
				$('#caddr').val(aa[1]);

						$('#cmob').val(aa[2]);
$('#no').val(aa[4]);
     // $("#village").html(data);

}
});
} 
</script>

    </body>
    </html>
