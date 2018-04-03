<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

//header('location:index.php');
}
$dd = date('Y-m-d');
if(isset($_POST['submit']))
{
$a=$_POST["chitname"];
//$b=$_POST["install"];
$c=$_POST["division"];
$d=$_POST["amount"];
$in=$d/$c;
//echo $d;
//$e=$_POST["sdate"];

$sql1="INSERT INTO `tbl_chittreg` (`chitt_name`, `installment`, `divisions`, `chitt_amount`, `s_date`, `status`)
 VALUES ('$a','$in','$c','$d','$dd','0')";
$result1=mysqli_query($con,$sql1);

$q11 = "SELECT `c_id` FROM `tbl_chittreg` WHERE `chitt_name`=$a ";

$row1 = mysqli_query($con,$q11);



//$sql1="INSERT INTO `tbl_login`(`role_id`, `user_name`, `password`, `status`) VALUES ('2','$f','$p','0')";
//$result1=mysqli_query($con,$sql1);

}
?>


<!DOCTYPE html>
<html>
<script>
function chitnam()
{
  var chitnam=/^[a-zA-Z ]{4,15}$/;
   if(document.myform.chitname.value.search(chitnam)==-1)
    {
	 alert("Plz Enter correct name");
	 document.myform.chitname.focus();
	 return false;
	 }
	}
function camount()
	{
	var amt=/^[0-9]{4,7}$/;
	//var len=document.myform.phno.value.length;
  if(document.myform.amount.value.search(amt)==-1)
    {
	 alert("Enter correct amount");
	 document.myform.amount.focus();
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
    <b class="heading2"><strong><font color="blue" size="4">GOVT.OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
 <div class="body1" >
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
    <div class="body_text1">
<a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>

		<a href="cust_view.php">MEMBER</a>
		

 <br><br>-->
 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><h2 class="login_head">-->
<div class="body_text2">
    <form method="post" name="myform" action="#">
	<table style="width:200% cellpadding:1%  ">
	<br><tr><td><h3>CHITTY REGISTRATION</h3></td></tr>
	<tr><td> CHITTY NAME:</td> <td><input type="text" name="chitname" placeholder="name" onChange="return chitnam()"required></td></tr></br><tr></tr>
	<tr><td> AMOUNT:</td> <td><input type="varchar" name="amount" onChange="return camount()" required></td></tr></br><tr></tr>
	<!--<tr><td> TOTAL INSTALLMENT:</td> <td> <input type="number" name="install" min="1" max="100"  required></td></tr></br><tr></tr>
	--><tr><td> MEMBERS:</td> <td> <input type="number" name="division" min="1" max="100"  required></td></tr></br><tr></tr>
	
	<!--<tr><td> START DATE:</td> <td><input type="date" name="sdate"required></td></tr></br><tr></tr>-->
	<tr><td ><input type="submit" name="submit" value="Register">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
</form>
</div></div></div>

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>
