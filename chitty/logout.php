<?php
include 'dbcon.php';
session_start();

if(session_status()==PHP_SESSION_NONE)
{
	session_start();
}
if(session_destroy())
{
$sql1="UPDATE `tbl_login` SET `status`='0' WHERE `status`='1'";
$result=mysqli_query($con,$sql1);
header('location:index.php');
}
 ?>