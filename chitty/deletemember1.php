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
        $x= mysqli_query($con,"update `newjoin` set status=2 where jid='$iid'") ;
		echo"<script>
                    window.location='viewmember.php';
                    alert('Deleted');
            </script>";
?>