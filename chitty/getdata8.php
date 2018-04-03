<?php
include_once "dbcon.php";

if (!empty($_POST["Did"])) {
  $Did = $_POST["Did"];
  $query = "SELECT * FROM `tbl_customer` WHERE cust_id = '$Did'";
   $results = mysqli_query($con, $query);
  $row=mysqli_fetch_array($results);
  $c=$row['cust_id'];
  //sam
  $query1 = "SELECT `cust_ch_id` FROM `tbl_custchitty`  WHERE cust_id = '$c'";
   $results1 = mysqli_query($con, $query1);
  $row1=mysqli_fetch_array($results1);
  $chid=$row1['cust_ch_id'];
  //$query2 = "SELECT * FROM `tbl_auction` WHERE cust_ch_id ='$Did'";
  $query2 = "SELECT amount FROM `tbl_auction` WHERE cust_ch_id ='$chid'";
   $results2 = mysqli_query($con, $query2);
  $row2=mysqli_fetch_array($results2);
  
  //echo $row['c_name']  ;
 
  echo $row['c_name'] .":" . $row['c_address'] . ":" .$row['c_mob'] . ":" .$row['addr']. ":" .$row['surname']. ":" .$row['cno']. ":" .$row2['amount'] ;
}
?>
