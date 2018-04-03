<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>

  <title>chitty management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    <!--<img class="logo" src="logo1.png" alt="Logo"/>-->
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT.OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
  <div class="body1">
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
    <div class="body_text1">
	

<!--<font size=3 color="white"><b>WELCOME</b> <i> <?php echo $r['c_name']; ?></i></font><br>-->
<br><a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>

<!--<a href="viewauction.php" >VIEW AUCTION</a>
<br><br>-->

 
<br><br>

 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
  <div class="body_textt4">
    <form method="post" name="myform" action="#">
	<br><br><br><tr><td><h3>FEEDBACK</h3></td></tr>
	<!--<table style="width:200% cellpadding:1%  table border=1 " >-->
	<!--<table border="1" style="width:200% cellpadding:1%">-->
	
	<table border=5px style="margin-left:0%; ">
<tr><th>DATE</th><th>ID</th><th>username</th><th>feedback</th></tr>
<?php 
$sql="SELECT * FROM `tbl_feedback` where status ='0'";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $row['date'] ?></td>
	<td><?php echo $row['cust_id'] ?></td>
	
	<td><?php echo $row['email'] ?></td>
	<td><?php echo $row['feedback'] ?></td>
    
	 
		<!--<form action="deletemember.php" method="post"> -->
		<td><a href="feedbackdelete.php?id=<?php echo $row['f_id']; ?>">Delete</a></td>
	 <!--<td><a href="feedbackdelete.php?id=<?php echo $row['f_id'];?>">Delete</a></td></tr>-->
	<!-- <td><a href="deletemember.php?id=<?php echo $row['cust_id']; ?>">Delete</a></td>
	</tr>-->
	
	<?php
}
?>  

  </table>
	<!--<tr><td> START DATE:</td> <td><input type="date" name="sdate"required></td></tr></br><tr></tr>-->
	
</form>

    </div>
  </div>
<div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>
	  

    </body>
    </html>
