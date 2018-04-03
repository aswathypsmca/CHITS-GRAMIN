

<?php
include_once "dbcon.php";

if (!empty($_POST["Did"])) {
  $Did = $_POST["Did"];
  $query = "SELECT s_name,s_address,s_mob FROM `tbl_staff` WHERE s_id = '$Did'";

  $results = mysqli_query($con, $query);
  $row=mysqli_fetch_array($results);
  echo $row['s_name'] .":" . $row['s_address'] . ":" .$row['s_mob'];
 
}
?>
