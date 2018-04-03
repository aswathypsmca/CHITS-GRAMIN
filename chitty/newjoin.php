  <?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
$dd = date('Y-m-d');
if(isset($_POST['submit']))
{

$result2=mysqli_query($con);
$r=mysqli_fetch_array($result2);
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['message'];


$sql="INSERT INTO `newjoin`(`jname`, `jemail`, `jphno`, `msg`) VALUES ('$a','$b','$c','$d')";

$result=mysqli_query($con,$sql);
}

?>


