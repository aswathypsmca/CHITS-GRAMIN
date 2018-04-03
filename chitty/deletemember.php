<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

	$iid=$_REQUEST['id'];
		//$si=$_POST['cust_id'];
		//echo($un);
		//echo($si);
        $x= mysqli_query($con,"update `tbl_customer` set status=2 where cust_id='$iid'") ;
		echo"<script>
                    window.location='memberview.php';
                    alert('Deleted');
            </script>";
?>