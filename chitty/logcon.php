<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$secret = '6Ldc50AUAAAAAGoMilKavwi5TGMfetOM0Y9xxShu';
 $response =$_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
$response = json_decode($response, true);
//if($response["success"] === true){
   // actions if successful
	function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );    
    }
$a=$_POST["uname"];
$b=$_POST["pwd"];

//INSERT INTO `tbl_login`(`log_id`, `role_id`, `user_name`, `password`, `status`) VALUES
$sql="SELECT * FROM `tbl_login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['log_id'];
	echo($row['log_id']);
	$p=$row['password'];
	$pw=decryptIt( $p )
	?>
	
	<?php 
	if($a==$row['user_name']&&$b==$p&&$row['role_id']==1)
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['role_name']='admin';
		 $_SESSION['log_id']=$i;
		 
		 $sql1="UPDATE `tbl_login` SET `status`='1' WHERE log_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:adminhome.php');
		 }
	else if($a==$row['user_name']&&$b==$pw&&$row['role_id']==2)	 
		 {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['role_name']='admin';
		 $_SESSION['log_id']=$i; 
		 
		 $sql1="UPDATE `tbl_login` SET `status`='1' WHERE log_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:stafflogin.php');
		 }
		 else if($a==$row['user_name']&&$b==$pw&&$row['role_id']==3)	 
		 {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['role_name']='admin';
		 $_SESSION['log_id']=$i;
		 
		 $sql1="UPDATE `tbl_login` SET `status`='1' WHERE log_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:memberlogin.php');
		 }


	
			 
	?>	
	
	<?php
}
echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='index.php'}else{document.location.href='index.php'};</script>";
//}
//else{
//	echo "<script>if(confirm('incorect recaptcha!!!!')){document.location.href='index.php'}else{document.location.href='index.php'};</script>";

//}	
}
?> 
