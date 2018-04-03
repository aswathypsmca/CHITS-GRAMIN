<?php
$id=$_REQUEST['id'];
include 'dbcon.php';
$sql="delete from tbl_feedback where f_id=$id";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:view_feedback.php")
?>