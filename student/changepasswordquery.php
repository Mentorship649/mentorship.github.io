<html>
<title>Mentorship</title>
<head>
</html>
<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
	$enrollment=$_POST['enrollment'];
	$pwd=$_POST['password'];
	$cpwd=$_POST['cpassword'];
	
	if($pwd==$cpwd)
	{
		           $original_string = $pwd;  
					$cipher_algo = "AES-128-CTR"; 
					$iv_length = openssl_cipher_iv_length($cipher_algo);
					$option = 0; 
					$encrypt_iv = '1234567890123456'; 
					$encrypt_key = "mentorship"; 
					
					$pwd_hashed = openssl_encrypt($original_string, $cipher_algo,
								$encrypt_key, $option, $encrypt_iv);
								
				    $new_pwd=bin2hex($pwd_hashed);
		
		$cmd="update enrollment_data set password='$new_pwd',flag_for_login='1' where enrollment='$enrollment'";
		$result=mysqli_query($con,$cmd);
		if(!$result)
		{
			echo "<script>alert('Password not Updated successfully');</script>";
			echo "<script>location.href='changepasswordpage.php';</script>";
		}
		
		echo "<script>alert('Password Updated successfully, please Re-login with new credentials ');</script>";
		echo "<script>location.href='studentloginpage.php';</script>";
		
	} 
	
}
?>