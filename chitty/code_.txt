<!--ashwathy please save this file as filename.php and paste
 into project folder (wamp/xamp) or open with notepad to check-->

<?php
include 'connect.php';
session_start();
if(isset ($_POST['Submit']))
{
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['mail'];
$d=$_POST['uname'];
$e=$_POST['psw'];
$f=$_POST['mob'];
/*
without checking user exist
$sql="INSERT INTO `register`(`fname`, `lname`, `email`, `username`, `password`, `mob`) VALUES ('$a','$b','$c','$d','$e','$f')";
$result=mysqli_query($con,$sql);
echo"<script>alert('Data Entered Successfully');</script>)";
*/

 //user exist query

$sqll="SELECT `userid` FROM `register` WHERE username='$d'";
$result=mysqli_query($con,$sqll) or die("Connection Failed!");
$arr=mysqli_fetch_array($result);
if($arr)
{
	echo"<script>alert('Username already exist!!!');</script>)";
}
else{

$sql="INSERT INTO `register`(`fname`, `lname`, `email`, `username`, `password`, `mob`) VALUES ('$a','$b','$c','$d','$e','$f')";
$result=mysqli_query($con,$sql);
echo"<script>alert('Data Entered Successfully');</script>)";

}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Register
</title>
  <link rel="stylesheet" href="styleplus.css">
<script>
function fnam()
{
  var fnam=/^[a-zA-Z]{4,15}$/;
   if(document.register.fname.value.search(fnam)==-1)
    {
	 alert("Enter correct  first name");
	 document.register.fname.focus();
	 return false;
	 }
	}

	 function lnam()
{
  var lnam=/^[a-zA-Z]{4,15}$/;
   if(document.register.lname.value.search(lnam)==-1)
    {
	 alert("Enter correct last name");
	 document.register.lname.focus();
	 return false;
	 }
	}

function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.register.mail.value.search(email)==-1)
    {
	 alert("Enter correct email");
	 document.register.mail.focus();
	 return false;
	 }
	}
function uname()
{
  var unam=/^[a-zA-Z]{4,15}$/;
   if(document.register.uname.value.search(unam)==-1)
    {
	 alert("Enter correct  username");
	 document.register.uname.focus();
	 return false;
	 }
	}




	function pass()
	{
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
   if(document.register.psw.value.search(pass)==-1)
    {
	 alert("Enter correct password");
	 document.register.psw.focus();
	 return false;
	 }
	 }

	function phone()
	{
	var phn=/^[0-9]{10}$/;
	var len=document.register.mob.value.length;
  if(document.register.mob.value.search(phn)==-1)
    {
		if(len!=10)
		{
	 alert("Enter correct phone no");
	 document.register.mob.focus();
	 return false;
	 }
	 }
	}




function vali()
{
  var nam=/^[a-zA-Z]{4,15}$/;
   var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
 var unam=/^[a-zA-Z]{4,15}$/;
    var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	 	var phn=/^[0-9]{9,14}$/;


	    if(document.register.fname.value.search(nam)==-1)
    {
	 alert("Enter correct  first name");
	 document.register.fname.focus();
	 return false;
	 }

  else if(document.register.lname.value.search(nam)==-1)
    {
	 alert("Enter correct last name");
	 document.register.lname.focus();
	 return false;
	 }

  else if(document.register.mail.value.search(email)==-1)
    {
	 alert("Enter correct login name");
	 document.register.mail.focus();
	 return false;
	 }

 if(document.register.uname.value.search(nam)==-1)
    {
	 alert("Enter correct  username");
	 document.register.uname.focus();
	 return false;
	 }


   else if(document.register.psw.value.search(pass)==-1)
    {
	 alert("Enter correct password");
	 document.register.psw.focus();
	 return false;
	 }


	  else if(document.register.mob.value.search(phn)==-1)
    {
	 alert("Enter Correct phone no");
	 document.register.mob.focus();
	 return false;
	 }
	 	 else
	{
	 return true;
	 }
	 }


</script>
</head>
<body>
	<div id="headerh">

<a id="a" href="index.php">HOME</a>
<a id="a" href="products.php">PRODUCTS</a>
<a id="a" href="offers.php">LATEST OFFERS</a>
<a id="a" href="video.php">VIDEOS</a>

</div>
<div id="header">
<img src="images/my.png" alt="logo" height="90px" width="250px">
<div id="header1">

</div>
<div id="header2">
 <div class="dropdown">
  <button class="btndrop">MENU</button>
  <div class="dropdown-content">
    <a id="menbtn" href="#">HOME</a>
    <a id="menbtn" href="#">PRODUCTS</a>
    <a id="menbtn" href="#">REVIEWS     </a>
     <a id="menbtn" href="#">NEWS </a>
      <a id="menbtn" href="#">VIDEOS      </a>
  </div>
  </div>

<a id="a" href="home.php">HOME</a>
<a id="a" href="products.php">PRODUCTS</a>
<a id="a" href="offers.php">LATEST OFFERS</a>
<a id="a" href="video.php">VIDEOS</a>
</div>
</div>
<br/>



<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<center><p id="b">Welcome to the Mobile Park.The Best Destination to Know about your Mobile<br/>
  Please go through this website to get your product.</p></center>
  <br>
<ul style="type='circle'">
<li>Get News</li>
<li>Find Product</li>
<li>Compare</li>
</ul>

<div style="width:50%;height:400px;float:left;margin-top:5px;margin-left:200px;">

<h2>Sign in Form</h2>

<form name="register" method="post" action="#" onSubmit="return vali()">
  <div class="imgcontainer">
    <img src="images/my.jpg"alt="Avatar" class="avatar">
  </div>

  <div class="container">
      <label><b>First Name</b></label>
    <input type="text" placeholder="Enter your First Name" name="fname" required onChange="return fnam()">

      <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter your Last Name" name="lname" required onChange="return lname()">

	<label><b>Email</b></label>
    <input type="text" placeholder="Enter your E-Mail" name="mail" required onChange="return email()">


    <label><b>Create Username</b></label>
    <input type="text" placeholder="Create Username" name="uname" required onChange="return uname()">

    <label><b>Password</b></label>
    <input type="password" placeholder="Create Password" name="psw" required onChange="return psw()">

		<label><b>Mobile No</b></label>

		<input id='numb' placeholder="Enter Mobile No" name="mob" required onChange="return phone()">
    <input type="submit" name="Submit">&nbsp;
   <input type="reset" value="Clear">
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">

<a id="r" class="button special" href="login.php"">Already have an account?Log in</a>

  </div>
  </form>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>








<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<!-- FOOTER SECTION-->
<div id="footert">
<img src="images/cert1.png" alt="certificate" style="width:150px;height:100px;float:right;">
<img src="images/cert2.png" alt="certificate2" style="width:100px;height:100px;float:right;margin-top:35px;">
<table style="width:50%">
  <tr>
   <th><a id="bro" href="www.html.com">Get to Know Us</a></th>
  <th><a id="bro" href="www.html.com">Make Money with Us</a></th>
 <th><a id="bro" href="www.html.com">Let Us Help</a></th>
  </tr>
  <tr>
    <td><a id="bro" href="www.html.com">About Us</a></td>
    <td> <a id="bro" href="www.html.com">Refer & Earn Rs.200</a></td>
    <td><a id="bro" href="www.html.com">Your Account</a></td>
  </tr>
<tr>
   <td><a id="bro" href="www.html.com">Careers</a></td>
    <td> <a id="bro" href="www.html.com">Sell on mobiconnect</a></td>
    <td><a id="bro" href="www.html.com">Returns Centre</a></td>

</tr>
  <tr>
    <td><a id="bro" href="www.html.com">Press Releases</a></td>
    <td> <a id="bro" href="www.html.com">Returns Centre</a></td>
    <td><a id="bro" href="www.html.com">mobiconnect</a></td>

</tr>

  <tr>

<td><a id="bro" href="www.html.com">Gift a Smile</a></td>
    <td> <a id="bro" href="www.html.com">Become an Affiliate</a></td>
    <td><a id="bro" href="www.html.com">Help</a></td>

  </tr>


</table>

<div id="footerendt"><!-- footer end-->
<center>&copy;<a id="foottext" href="">&nbsp;www.mobiconnect.in&nbsp;</font></a>&reg;
</div><!--closing footer end-->
</div><!-- closing footer>

</body>
</html>
