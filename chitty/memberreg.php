<?php
include 'dbcon.php';
//session_start();
//$date1 = date('Y-m-d');
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
$dd = date('Y-m-d');
if(isset($_POST['submit']))
{
$a=$_POST["cname"];
$b=$_POST["c_gender"];
$c=$_POST["caddr"];
$d=$_POST["cplace"];
$e=$_POST["cdist"];
$f=$_POST["cpin"];
$k=$_POST["cdob"];
$g=$_POST["cmob"];
$h=$_POST["cemail"];
$i=$_POST["cpan"];
$j=$_POST["cno"];
$k=$_POST["surname"];
$l=$_POST["addr"];
//$j=$_POST["image"];
$image="image/".time()."".htmlspecialchars($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image);

$duplicate=mysqli_query($con,"SELECT * FROM `tbl_login` where user_name ='$h'");
if (mysqli_num_rows($duplicate)>0)
{
	echo"<script>alert(' email id is already exists. please enter correct id');</script>";
//echo $duplicate;
	}

else{
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
function encryptIt($q){
                $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
                return( $qEncoded );
            }
		
$p=random_password();
$pw=encryptIt($p);
$sql1="INSERT INTO `tbl_login`(`role_id`, `user_name`, `password`, `status`) VALUES ('3','$h','$pw','0')";
$result1=mysqli_query($con,$sql1);
$q13 = "SELECT max(`log_id`) as id FROM `tbl_login`";
$row3 = mysqli_query($con,$q13);
$r=mysqli_fetch_array($row3);
$d1=$r['id'];
//INSERT INTO `tbl_customer`(`cust_id`, `c_name`, `c_gender`, `c_address`, `c_place`, `c_district`, `c_pin`, 
//`c_mob`, `c_email`, `pan`, `log_id`, `status`,`cdate`)
//INSERT INTO `tbl_customer`(`cust_id`, `log_id`, `c_name`, `c_gender`, `c_address`, `c_place`, `c_district`, `c_pin`, `c_mob`, `c_email`, `pan`, `image`, `cdate`, `c_dob`, `cno`, `surname`, `addr`, `status`)
$sq="INSERT INTO `tbl_customer` (`c_name`, `c_gender`, `c_address`, `c_place`, `c_district`, `c_pin`,`c_dob`, `c_mob`, `c_email`, `pan`, `log_id`, `status`,`image`,`cdate`,`cno`, `surname`, `addr`)VALUES ('$a','$b','$c','$d','$e','$f','$k','$g','$h','$i','$d1','0','$image','$dd','$j','$k','$l')";
$resul=mysqli_query($con,$sq);
//echo $sq;
echo"<script>alert(' Your Registration is Completed!!!!');</script>";
}
}
?>



<!DOCTYPE html>
<html>
<head>

  <title>chitty management system</title>
  <link rel="stylesheet" href="logo.css">
 
  <script>
  function cnam()
{
  var cnam=/^[a-zA-Z ]{4,15}$/;
   if(document.myform.cname.value.search(cnam)==-1)
    {
	 alert("Enter correct name");
	 document.myform.cname.focus();
	 return false;
	 }
	}

	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.myform.cemail.value.search(email)==-1)
    {
	 alert("Enter correct email");
	 document.myform.cemail.focus();
	 return false;
	 }
	}

function phone()
	{
	var phn=/^[0-9]{10}$/;
	var len=document.myform.cmob.value.length;
  if(document.myform.cmob.value.search(phn)==-1)
    {
		if(len!=10)
		{
	 alert("Enter correct phone no");
	 document.myform.cmob.focus();
	 return false;
	 }
	 }
	}

function cplac()
{
  var cplac=/^[a-zA-Z ]{4,15}$/;
   if(document.myform.cplace.value.search(cplac)==-1)
    {
	 alert("Plz Enter correct place");
	 document.myform.cplace.focus();
	 return false;
	 }
	}
	
	function caddres()
{
  var caddres=/^[a-zA-Z   ]{4,15}$/;
   if(document.myform.caddr.value.search(caddres)==-1)
    {
	 alert("Plz Enter correct address");
	 document.myform.caddr.focus();
	 return false;
	 }
	}

function cpinn()
	{
	var cpinn=/^[0-9]{6}$/;
	var len=document.myform.cpin.value.length;
  if(document.myform.cpin.value.search(cpinn)==-1)
    {
		if(len!=6)
		{
	 alert("Enter correct pin code");
	 document.myform.cpin.focus();
	 return false;
	 }
	 }
	}




function vali()
{
  var cnam=/^[a-zA-Z ]{4,15}$/;
   var emaill=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
 
	 	var phn=/^[0-9]{9,14}$/;


	    if(document.myform.cname.value.search(cnam)==-1)
    {
	 alert("Enter correct name");
	 document.myform.cname.focus();
	 return false;
	 }

  

  //else if(document.myform.cemail.value.search(emaill)==-1)
    //{
	 //alert("Enter correct login name");
	 //document.myform.cemail.focus();
	 //return false;
	 //}

	  else if(document.myform.cmob.value.search(phn)==-1)
    {
	 alert("Enter Correct phone no");
	 document.myform.cmob.focus();
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
<a href="addcustomer.php">ADD CHITTY</a><br><br>
<a href="viewmember.php">viewmember</a><br><br>
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><h2 class="login_head">-->
<div class="body_text3">
    <form method="post" name="myform" id="myform" action="#"  enctype="multipart/form-data" onSubmit="return vali()">
	<table style="width:100% cellpadding:5%  "><br>
	<!--<tr><td><h3> MEMBER REGISTRATION	</h3></td></tr>--><br>
	<tr><td> NAME:</td> <td><input type="text" name="cname"placeholder="Name" onChange="return cnam()" ></td></tr></br>
	<tr><td> GENDER:</td><td>  <input type="radio" name="c_gender" value="male" checked> Male &nbsp&nbsp
                               <input type="radio" name="c_gender" value="female"> Female</td></tr></br>
	
	<tr><td> ADDRESS:</td> <td><textarea name="caddr" rows="3" cols="21"placeholder="Address"  onChange="return caddres()"required></textarea></td></tr></br>
	<tr><td> PLACE:</td> <td><input type="text" name="cplace"placeholder="Place" onChange="return cplac()"required></td></tr></br>
	<!--<tr><td> DISTRICT:</td> <td><input type="text" name="cdist"placeholder="District" required></td></tr></br><tr></tr>-->
	<tr><td> DISTRICT:</td><td><select name="cdist"required>
    
     <option value="select" selected>select</option>
    <option value="THIRUVANATHAPURAM">THIRUVANATHAPURAM</option>
	<option value="KOLLAM">KOLLAM</option>
    <option value="PATHANAMTHITTA">PATHANAMTHITTA</option>
	<option value="ALAPUZHA">ALAPUZHA</option>
	<option value="KOTTAYAM">KOTTAYAM</option>
	<option value="IDUKKI">IDUKKI</option>
    <option value="ERNAKULAM">ERNAKULAM</option>
	<option value="THRISSUR">THRISSUR</option>
	<option value="PALAKKADE">PALAKKADE</option>
	<option value="MALAPURAM">MALAPURAM</option>
    <option value="KOZHIKODE">KOZHIKODE</option>
	<option value="WAYANADE">WAYANADE</option>
	<option value="KANNUR">KANNUR</option>
	<option value="KASARGODE">KASARGODE</option>
	</select></td></tr>
	
	<tr><td>Pin</td><td><input type="text" name="cpin"  onChange="return cpinn()"required></td>	</tr>
	<tr><td>DOB</td><td><input type="date" name="cdob" min="1957-01-1" max="1997-12-30"></td></tr>
	<tr><td> PHONE:</td> <td><input type="text" name="cmob" maxlength="10"placeholder="mob num" required onChange="return phone()"></td></tr></br>
	<tr><td> EMAIL:</td> <td><input type="text" name="cemail" placeholder="mail_id" required></td></tr></br>
	<tr><td> PAN:</td> <td><input type="text" name="cpan" placeholder="PAN" required ></td>
	<td>Photo:</td><td><input type="file" name="image" id="image" accept="image/*"  required /></td></tr><br>
	<tr><td> Account NO:</td> <td><input type="varchar" name="cno"required></td></tr></br><tr></tr>
	<tr><td> SURETY NAME:</td><td><input type="varchar" name="surname" placeholder="Surety Name" required></td><td> ADDRESS:</td> <td><textarea name="addr" rows="3" cols="21"placeholder="Address"  required></textarea></td></tr><br>
	
	<tr><td><input type="submit" name="submit" value="Register">
	<input type="reset" name="clear" value="RESET"></tr></td>
	<!--<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Register">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp--></table>
	
	</form>
	
</div></div>

  


   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>
