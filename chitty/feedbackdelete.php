
<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

	$iid=$_REQUEST['id'];
		//UPDATE `tbl_feedback` SET `f_id`=[value-1],`cust_id`=[value-2],`email`=[value-3],
		//`feedback`=[value-4],`date`=[value-5],`status`=[value-6] WHERE 1
        $x= mysqli_query($con,"update `tbl_feedback` set status=1 where f_id='$iid'") ;
		echo"<script>
                    window.location='view_feedback.php';
                    alert('Deleted');
            </script>";
?>