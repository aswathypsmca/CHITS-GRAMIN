<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

//header('location:index.php');
}
$dd = date('Y-m-d');
if(isset($_POST['submit']))
{
$a=$_POST["sname"];
$b=$_POST["sgender"];
$c=$_POST["saddress"];
$d=$_POST["splace"];
$e=$_POST["sdist"];
$f=$_POST["spin"];
$g=$_POST["phno"];

//echo $d;
$h=$_POST["dob"];
$i=$_POST["email"];
//$j=$_POST["image"];
$image="image/".time()."".htmlspecialchars($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image);


$duplicate=mysqli_query($con,"SELECT * FROM `tbl_login` where `user_name` ='$i'");
if (mysqli_num_rows($duplicate)>0)
{
	echo"<script>alert(' email id is already exists. please enter correct id');</script>";
	
	}
//header("Location: index.php? ");
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
$sql1="INSERT INTO `tbl_login`(`role_id`, `user_name`, `password`, `status`) VALUES ('2','$i','$pw','0')";
$result1=mysqli_query($con,$sql1);
$q13 = "SELECT max(`log_id`) as id FROM `tbl_login`";
$row3 = mysqli_query($con,$q13);
$r=mysqli_fetch_array($row3);
$d1=$r['id'];

//INSERT INTO `tbl_staff`(`s_id`, `s_name`, `s_gender`, `s_address`, `s_mob`, `dob`, `s_email`, `doj`, `log_id`)
//INSERT INTO `tbl_login`(`log_id`, `role_id`, `user_name`, `password`, `status`) VALUES
//INSERT INTO `tbl_staff`(`s_id`, `log_id`, `sdate`, `s_name`, `s_gender`, `s_address`, `splace`, `sdist`, `spin`, `s_mob`, `dob`, `s_email`, `sphoto`)
$sql1="INSERT INTO `tbl_staff`(`log_id`,`s_name`, `s_gender`, `s_address`, `splace`, `sdist`, `spin`, `s_mob`, `dob`, `s_email`,`image`,`sdate`) VALUES ('$d1','$a','$b','$c','$d','$e','$f','$g','$h','$i','$image','$dd')";
$result1=mysqli_query($con,$sql1);
echo"<script>alert(' Your Registration is Completed!!!!');</script>";
//echo $sql1;
$q11 = "SELECT `s_id` FROM `tbl_staff` WHERE `s_name`=$a ";
//$result1=mysqli_query($con,$sql1);
//$result22 = $con->query($q1);
$row1 = mysqli_query($con,$q11);
//$dd=$row1['s_id'];
//echo($dd
$to = "$i";
$subject = "Gramin chitty management";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Hi $a Welcome to Gramin Chitty Management. This email contains your username and password</p>
<table>
<tr>
<th>USER NAME</th>
<th>PASSWORD</th>
</tr>
<tr>
<td>$i</td>
<td>$p</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <aswathypsmca123@gmail.com>' . "\r\n";
$headers .= 'Cc: aswathypsmca123@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

}
}
?>


<!DOCTYPE html>
<html>
<head>

  <title>chitty management</title>
  <link rel="stylesheet" href="logo.css">
 
<script>
function snam()
{
  var snam=/^[a-zA-Z ]{4,15}$/;
   if(document.myform.sname.value.search(snam)==-1)
    {
	 alert("Plz Enter correct name");
	 document.myform.sname.focus();
	 return false;
	 }
	}

	

function semail()
{
 var semail=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.myform.email.value.search(semail)==-1)
    {
	 alert("Enter correct email");
	 document.myform.email.focus();
	 return false;
	 }
	}

function splac()
{
  var splac=/^[a-zA-Z ]{4,15}$/;
   if(document.myform.splace.value.search(splac)==-1)
    {
	 alert("Plz Enter correct place");
	 document.myform.splace.focus();
	 return false;
	 }
	}
	
	function saddres()
{
  var saddres=/^[a-zA-Z     ]{4,50}$/;
   if(document.myform.saddress.value.search(saddres)==-1)
    {
	 alert("Plz Enter correct address");
	 document.myform.saddress.focus();
	 return false;
	 }
	}

function spi()
	{
	var spi=/^[0-9]{6}$/;
	var len=document.myform.spin.value.length;
  if(document.myform.spin.value.search(spi)==-1)
    {
		if(len!=6)
		{
	 alert("Enter correct pin code");
	 document.myform.spin.focus();
	 return false;
	 }
	 }
	}



	function phone()
	{
	var phn=/^[0-9]{10}$/;
	var len=document.myform.phno.value.length;
  if(document.myform.phno.value.search(phn)==-1)
    {
		if(len!=10)
		{
	 alert("Enter correct phone no");
	 document.myform.phno.focus();
	 return false;
	 }
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
<!--<div class="dropdown">
<a href="#" id="user">USERS</a>
<div class="dropdown-content">
		<a href="staffreg.php">STAFF</a><br>
		<a href="memberreg.php">MEMBER</a>
		
	</div>
</div>--->
 <br><br>
  <a href="staffsalary.php">SALARY</a><br>
 <br><br>
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><h2 class="login_head">-->
<div class="body_text3">

    <form method="post" name="myform"  action="#" enctype="multipart/form-data"  onSubmit="return vali()">
	<table style="width:200% cellpadding:1%  ">
	<tr><td><h3>STAFF REGISTRATION</h3></td></tr>
	<tr><td> NAME:</td> <td><input type="text" name="sname" placeholder="name" onChange="return snam()" required></td></tr></br><tr></tr>>
</td></tr></br><tr></tr>
	<tr><td> GENDER:</td><td>  <input type="radio" name="sgender" value="male" checked> Male &nbsp&nbsp
                               <input type="radio" name="sgender" value="female"> Female</td></tr></br><tr></tr>
	<tr><td> ADDRESS:</td> <td><textarea name="saddress" rows="3" cols="21"placeholder="Address" onChange="return saddres()" required></textarea> </td></tr></br><tr></tr>
	
	<tr><td> PLACE:</td> <td><input type="text" name="splace"placeholder="Place" onChange="return splac()" required></td></tr></br><tr></tr>
	<!--<tr><td> DISTRICT:</td> <td><input type="text" name="cdist"placeholder="District" required></td></tr></br><tr></tr>-->
	<tr><td> DISTRICT:</td><td><select name="sdist" required>
    
     <option value="select" >select</option>
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
	</select></td></tr></br><tr></tr>
	
	<tr><td>Pin</td><td><input type="text" name="spin"  onChange="return spi()"></td></tr>
	<tr><td> PHONE:</td> <td><input type="text" name="phno" placeholder="mob num" required  onChange="return phone()"></td></tr></br><tr></tr>
	<tr><td> DOB:</td> <td> <input type = "date" name="dob" min="1967-01-1" max="1997-12-30"required></td></tr></br><tr></tr>
	<tr><td> EMAIL:</td> <td><input type="text" name="email" placeholder="mail_id" required></td></tr></br><tr></tr>
	<!--<tr><td> DOJ:</td> <td><input type="date" name="doj"required></td></tr></br><tr></tr>-->
	<tr><td>Photo:</td><td><input type="file" name="image" id="image"accept="image/*" required></td></tr>
	<tr><td ><input type="submit" name="submit" value="Register" >&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
</form>

</div></div>

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>


	  </body>
	  <!--<script src="jquery.js"></script>
<script src="validation.js"></script>-->


    </html>
