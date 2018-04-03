  <?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
$dd = date('Y-m-d');
if(isset($_POST['submit']))
{
	
$c=$_SESSION['user_name'];
$sql2="SELECT * FROM `tbl_customer` WHERE c_email='$c'";
$result2=mysqli_query($con,$sql2);
$r=mysqli_fetch_array($result2);
$cr=$r['cust_id'];
$cmail=$r['c_email'];

$a=$_POST["feed"];
$sql="INSERT INTO `tbl_feedback`(`cust_id`,`email`,`feedback`,`date`,`status`) VALUES ('$cr','$cmail','$a','$dd','0')";
$result=mysqli_query($con,$sql);
}

?>
<!DOCTYPE html>
<html>
<script>
function feedback()
{
  var feedback=/^[a-zA-Z ]{4,150}$/;
   if(document.myform.feed.value.search(feedback)==-1)
    {
	 alert("Plz Enter alphabets");
	 document.myform.feed.focus();
	 return false;
	 }
	}
	function vali()
{
  
   var feedback=/^[a-zA-Z ]{4,150}$/;
  
   

	    if(document.myform.feed.value.search(feedback)==-1)
    {
	 alert("Enter correct name");
	 document.myform.feed.focus();
	 return false;
	 }

  

	 	 else
	{
	 return true;
	 }
	 }


	</script>
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
<a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>

 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
  
<!--<img src="clg.png" id="ajce_img" width="800px" height="300px" >
-->
<div class="body_text2">
    <form method="post" name="myform" action="#">
	<table style="width:200% cellpadding:1%  ">
	 <BR><BR><BR><br><br><br><tr><td><h3>ADD FEEDBACK</h3></td></tr>
	<?php
$vv=$_SESSION["user_name"];

$sql="SELECT * FROM  `tbl_customer` WHERE c_email='$vv'";

$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>
<strong><font color="blue" size="5"><center><marquee>WELCOME <i><font color="red" size="6"> <?php echo $r['c_name']; ?></font></i>&nbsp PLEASE ENTER YOUR <font color="red" size="5">&nbsp&nbsp**FEEDBACK**</font></a> </marquee></center></font></strong>
          <tr><td><img src="<?php echo $r['image']; ?>" width="105px" height="105px"  /></td></tr><br>
		<!--<tr><td> User Name:</td> <td><input type="text" name="cname" value="<?php echo $r['c_name']?>"></td></tr>
	
	-->
	
	<tr><td> Enter Feedback:</td><td><input type="textarea" name="feed" onChange="return feedback()" required></td></tr>
	
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

