<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>Gramin chitty Management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
        <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
 <div class="body1">
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
<div class="body_text1">
<a href="stafflogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>

 <a href="memberreg.php">REGISTER</a><br><br><br><br>

 
  <a href="logout.php">LOGOUT</a><br>


    </div>
    </div>
  
  <!-- Div for login section -->
  <div class="login2">

  <table border=5px style="margin-left:0%; margin-top:10%;">
<tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>PHONE</th><th>MESSAGE</th><th>APPROVE</th></tr>
<?php 
$sql="SELECT * FROM `newjoin` where status='0'";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr><td><?php echo $row['jid'] ?></td>
	<td><?php echo $row['jname'] ?></td>
	<td><?php echo $row['jemail'] ?></td>
	
	<td><?php echo $row['jphno'] ?></td>
	
    <td><?php echo $row['msg'] ?></td>
	
	 <td><form action="viewmemberapprove.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['jid'] ?>" >
		<input type="hidden" name="cname" value="<?php echo $row['jname'] ?>" >
		
		<input type="hidden" name="cemail" value="<?php echo $row['jemail'] ?>" >
		<input type="hidden" name="cmob" value="<?php echo $row['jphno'] ?>" >
		<input type="hidden" name="cmsg" value="<?php echo $row['message'] ?>" >
				<button class="button" name="submit" >ADD</button>
		
		</form></td>
		<!--<form action="deletemember.php" method="post"> -->
		
	 
	 <td><a href="deletemember1.php?id=<?php echo $row['jid']; ?>">Delete</a></td>
	</tr>
	
	<?php
}
?>  

  </table>
</div>

 

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>
