<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<script type="text/javascript">
        function PrintDiv() {
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1200,height=800');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
 <!DOCTYPE html>
<html>
<head>

  <title> chitty management system </title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>&nbsp
    <b class="heading2"><strong><font color="blue" size="4">Govt.Of Kerala</font></strong></b><BR>


  </div>
  <!-- Div for body section -->
  <div class="body1">
<div class="body_text1">
<a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>

		
<a href="mchangepsw.php" >CHANGE PASSWORD</a><br><br>
<a href="downloadcard.php" >CHITTY CARD</a><br><br>
 <br><br>
 
  <a href="logout.php">LOGOUT</a><br>


</div>
    </div>
	</div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->

 <!--<h2 style="color:red">PROFILE</h2> --> 
<?php
$vv=$_SESSION["user_name"];

$sql="SELECT * FROM  `tbl_customer` WHERE c_email='$vv'";

$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>

               <div class="body_text00">
			   <div id="divToPrint" >

<h3 style="text-align:left;">GRAMIN CHITTY MANAGEMENT</h1>
			   
        <form name="myform" method="post" action="#">
	 <table >
	 <!--<td><img src="<?php echo $row['image']; ?>" width="75px" height="75px" /></td>
	    <tr><td><img src="<?php echo $r['image']; ?>" width="105px" height="105px"  /></td></tr><br>-->
		<tr><td>ID:</td><td><input type="text" name ="cid"value="<?php echo $r['cust_id']?>"></td></tr>
		<tr><td>DOJ:</td><td><input type="date" name="sdate" value="<?php echo $r['cdate']?>"></td></tr>
		<tr><td> Name:</td> <td><input type="text" name="cname" value="<?php echo $r['c_name']?>"></td></tr>
	
		<tr><td> Address:</td> <td><input type="text" name="caddr" value="<?php echo $r['c_address'] ?>" ></td></tr>
		
		<tr><td> Place:</td> <td><input type="text" name="cplace" value="<?php echo $r['c_place'] ?>" ></td></tr>
 
      <!--<tr><td><button class="button" name="submit" style="margin-left:40%;">EDIT</button></td><td ><tr></tr>-->
	 <tr><td> <input type="button" value="print" onclick="PrintDiv();" class="btn" style="margin-left:30px; margin-top:20px; float:left;" /></td></tr>
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->
</table>
  	</form>
   </div>
   </div>
</div>
      <div class="footer">
        <center><marquee>Gramin chitty management</marquee></center>
      </div>
	  

    </body>
    </html>
