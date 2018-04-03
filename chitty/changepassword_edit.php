<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

if(isset($_POST['submit']))
{
//$a=$_POST["uname"];
$b=$_POST["pwd"];
$c=$_POST["pwd2"];
$d=$_POST["pwd3"];
//print_r($b);
}

$sql="SELECT * FROM `tbl_login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$_SESSION['log_id'];
	?>
	<?php
	
	
			if($d!=$c)	
			{
				echo "<script> alert ('password are not same!'); </script>";
				//header('location:schangepsw.php');
				
				//alert("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login` set password='$c' where log_id=$id";
				$result=mysqli_query($con,$sql2) ;
				echo("sucess");
				//header('location:stafflogin.php');
				break;
				}
			
	
	?>	
	
	<?php	
}
?> 