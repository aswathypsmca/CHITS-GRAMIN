<?php
include_once "dbcon.php";
//session_start();

if (!empty($_POST["cust_id"])) {
  $c_id = $_POST["cust_id"];
$_SESSION['cid']=$c_id;
  $query = "SELECT * FROM tbl_custchitty WHERE c_id = '$c_id'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select id</option>
  <?php

 while($row=mysqli_fetch_array($results)) {
       ?>
       <option value="<?php echo $row["cust_id"];?>"> <?php echo $row["cust_id"]; ?> </option>

     <?php
}
}
?>
