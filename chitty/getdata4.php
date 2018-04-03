<?php
include_once "dbcon.php";
//session_start();
if (!empty($_POST["Did"])) {
  $Did = $_POST["Did"];
  $cid=$_SESSION['cid'];
 // $cid = $_POST["c_id"];
  //echo "<script>alert('fhgfhg:$cid');</script>";
   $query1 = "SELECT * FROM `tbl_chittreg` WHERE `c_id` = '$cid'";
  $results1 = mysqli_query($con, $query1);
  $row1=mysqli_fetch_array($results1);
  $div=$row1['divisions'];
  $tamount=$row1['chitt_amount'];
   $comm=($tamount*0.5)*2;
   
   $sql3="SELECT * FROM `tbl_auction` WHERE `c_id`='$cid' and `a_id` in (SELECT max(`a_id`) FROM `tbl_auction` WHERE `type`='auction')";
   $results3 = mysqli_query($con, $sql3);
   //echo $results3;
   $row3=mysqli_fetch_array($results3);
   $auc_amount=$row3['amount'];
   
	
	//$qr="SELECT * FROM `tbl_chittypayment` WHERE cust_ch_id='$Did' and p_id in (select max(p_id) from `tbl_chittypayment`)"; 
	$qr=" SELECT * FROM `tbl_chittypayment` WHERE `cust_ch_id`='$Did' and `cid`='$cid' and  `p_id`=(SELECT MAX(`p_id`) FROM `tbl_chittypayment` WHERE `cust_ch_id`='$Did' and `cid`='$cid')
  "; 
	$results2 = mysqli_query($con, $qr);
	$row2=mysqli_fetch_array($results2);
	$ino=$row2['install_no'];
	$new_ino=$ino+1;
		//echo $new_ino;
		$div1=$div*2;
	if($ino<1)
	{
		$install_sec=$tamount/$div;
	}
	else
	{
		 $install_sec=($auc_amount+$tamount)/$div1;
	}
 // SELECT * FROM `tbl_chittypayment` WHERE `cust_ch_id`='79' and `cid`='12' and  `p_id`=(SELECT MAX(`p_id`) FROM `tbl_chittypayment` WHERE `cust_ch_id`='79' and `cid`='12')
    
  $query = "SELECT c_name,c_address,c_mob FROM `tbl_customer` WHERE cust_id = '$Did'";

  $results = mysqli_query($con, $query);
  $row=mysqli_fetch_array($results);
  echo  $row['c_name'] .":" . $row['c_address'] . ":" .$row['c_mob'] . ":" .$install_sec.":" .$new_ino.":" .$cid.":" .$Did;
 
}
?>
