<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

if(isset($_POST['submit']))
{

$b=$_POST["pwd"];
$c=$_POST["pwd2"];
$d=$_POST["pwd3"];

}
function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );    
    }
	function encryptIt($q){
                $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
                return( $qEncoded );
            }
$sql="SELECT * FROM `tbl_login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$_SESSION['log_id'];
	$pw1=$pw=decryptIt( $row['password'] );
	$pw2= encryptIt($c);
	?>
	<?php
	
	if($b==$pw1&&$row['role_id']==2)
	{
			if($d!=$c)	
			{
				echo"password are not same";
				header('location:schangepsw.php');
				//echo"password are not same";
				break;
			}

			else{
				
				$sql3="update `tbl_login` set password='$pw2' where log_id=$id";
				$result=mysqli_query($con,$sql3) ;
				

				header('location:stafflogin.php');
				break;
				}
			}
	else
	{
		
		echo(" incorrect password");
		header('location:schangepsw.php');
		
	}
	
	if($b==$pw1&&$row['role_id']==3)
	{
			if($d!=$c)	
			{
				header('location:mchangepsw.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login` set password='$pw2' where log_id=$id";
				$result=mysqli_query($con,$sql2) ;
				header('location:memberlogin.php');
				break;
				}
			}
	else
	{

		header('location:mchangepsw.php');
		echo(" incorrect password");
	}
	
	
	
	if($b==$pw1&&$row['log_id']==1)
	{
			if($d!=$c)	
			{
				header('location:adminchangepsw.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login` set password='$c' where id=$id";
				$result=mysqli_query($con,$sql2) ;
				header('location:adminhome.php');
				break;
				}
			}
	else
	{

		('location:adminchangepsw.php');
		echo(" incorrect password");
	}
	
	

	
	

	?>	
	
	<?php	
}
?> 