<?php
include_once "dbcon.php";

if (!empty($_POST["s_name"])) {
  $s_id = $_POST["s_name"];

  $query = "SELECT * FROM tbl_staff WHERE s_id = '$s_id'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select id</option>
  <?php

 while($row=mysqli_fetch_array($results)) {
       ?>
       <option value="<?php echo $row["s_name"];?>"> <?php echo $row["s_name"]; ?> </option>

     <?php
}
}
?>



