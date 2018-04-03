<?php
include 'dbcon.php';

	if(!(isset($_SESSION['user_name'])))
	{

	//header('location:index.php');
	}

		//$dd = date('Y-m-d');
	
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
			<a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
			<br><br>
			<a href="logout.php">LOGOUT</a><br>
			</div>
		</div>
  <!-- Div for login section -->
		<div class="login2">
		<!--<center><h2 class="login_head">-->
			<div class="body_text3">
	<form method="post" name="myform" action="#">
			<table style="width:200% cellpadding:1%  "><br><br><br><br><br><br>
			<br><br><tr><td><h3>AUCTION/LOT WINNER</h3></td></tr>
			
			<tr><td> TYPE:</td><td><select name="type"required>
    
     <option value="select" selected>select</option>
    <option value="AUCTION">AUCTION</option>
	<option value="LOT">LOT</option>
	</select></td></tr></br>
			<tr><td> CHITTY NAME:</td> 
			<td><select name="chitty" >
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
	
	
	<tr><td ><input type="submit" name="submit" value="VIEW"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
	</form>
	 <table border=2px style="margin-left:0%; margin-top:10%;">
<tr><th>NAME</th><th>INSTALLMENT</th><th>AMOUNT</th><th>TYPE</th></tr>
	<?php
	
	          if(isset($_POST['submit']))
		{
			$t=$_POST["type"];
			$a=$_POST["chitty"];
			$c=$_POST["cmonth"];
			
        $sql7=mysqli_query($con,"SELECT * FROM `tbl_custchitty` WHERE `c_id`='$a'");
		while($row1=mysqli_fetch_array($sql7))
		{
			$ccid=$row1['cust_ch_id'];
			$regid=$row1['cust_id'];
			
		
        $sql8=mysqli_query($con,"SELECT * FROM `tbl_customer` WHERE `cust_id`='$regid'");
		$row2=mysqli_fetch_array($sql8);
		//$cname=$row2['c_name'];
        $sql6=mysqli_query($con,"SELECT * FROM `tbl_auction` WHERE `cust_ch_id`='$ccid' AND `m_id`='$c' AND `type`='$t'");
		
		while($row=mysqli_fetch_array($sql6))
         {
		  $p=$row['amount'];		  
		  ?>
	
	<tr>
	<td><?php echo $row2['c_name'] ?></td>
	<td><?php echo $row['install'] ?></td>
	<td><?php echo $row['amount'] ?></td>	
	<td><?php echo $row['type'] ?></td>
  
<?php

}
}
}
?>
	<table>		
	<tr>
	<!--<td><?php echo $row['cust_id'] ?></td>  -->
		</table></div></div></div>

	<div class="footer">
    <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
    </div>
	<script src="js/jquery.js"></script>

    </body>
    </html>
