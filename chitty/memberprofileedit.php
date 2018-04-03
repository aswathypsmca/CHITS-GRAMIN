<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

if(isset($_POST['submit']))
{
$id1=$_SESSION['user_name'];
//$a=$_POST["sname"];
$a=$_POST["PHNO"];
$b=$_POST["caddr"];
$c=$_POST["cplace"];
//$d=$_POST["email"];

$sql="UPDATE `tbl_customer` SET `c_mob`='$a',`c_address`='$b',`c_place`='$c'  WHERE  c_email='$id1'";
//print_r($sql);

$result=mysqli_query($con,$sql);

//$sql2="UPDATE `tbl_login` SET `user_name`='$d' WHERE c_email='$id1'";
//$result2=mysqli_query($con,$sql2);
//$sql2="UPDATE `tbl_login` SET `user_name`='$c' WHERE  s_email='$id1'";
//$result2=mysqli_query($con,$sql2);
header('location:memberprofile.php');
}
?>
