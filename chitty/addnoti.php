  <?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
$c = date('Y-m-d');
if(isset($_POST["submit"]))
{

//$b=$_POST["date"];
$a=$_POST["noti"];

$sql="INSERT INTO `notification`(  `notification`, `date`) VALUES ('$a','$c')";
$result=mysqli_query($con,$sql);
echo"<script>window.location='addnoti.php';
alert('Sucess!!!!');</script>";

//echo("already exists!!!!");
}
?>
<!DOCTYPE html>
<html>
<script>
function notifi()
{
  var notifi=/^[a-zA-Z ]{4,150}$/;
   if(document.myform.noti.value.search(notifi)==-1)
    {
	 alert("Plz Enter alphabets");
	 document.myform.noti.focus();
	 return false;
	 }
	}




function vali()
{
  var snam=/^[a-zA-Z ]{4,15}$/;
   var emaill=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
 
	 	var phn=/^[0-9]{9,14}$/;


	    if(document.myform.sname.value.search(snam)==-1)
    {
	 alert("Enter correct name");
	 document.myform.sname.focus();
	 return false;
	 }

  

  else if(document.myform.email.value.search(emaill)==-1)
    {
	 alert("Enter correct login name");
	 document.myform.email.focus();
	 return false;
	 }

	  else if(document.myform.phno.value.search(phn)==-1)
    {
	 alert("Enter Correct phone no");
	 document.myform.phno.focus();
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
<a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>


 
 <br><br>
 
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
	<br><BR><BR><BR><br><br><br><tr><td><h3>ADD NOTIFICATION</h3></td></tr>
	
	
	<tr><td> Enter Notification:</td><td><input type="textarea" name="noti" onChange="return notifi()" required></td></tr>
	
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

