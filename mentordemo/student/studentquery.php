<?php
session_start();
$con = mysqli_connect("localhost","root","","mentor");

if(!$con)
{
	echo '<script>alert("error in database connection");</script>';
}

if(isset($_POST['submit']))
{
	$enrollment = $_POST['enrollment'];
	$pwd = $_POST['password'];
	$captcha = $_POST["captcha"];
    

	  
	if($_SESSION['CAPTCHA_CODE'] == $captcha)
	{

	
    $cmd = "SELECT * FROM enrollment_data WHERE enrollment='$enrollment'  ";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    	
		 while ($row = mysqli_fetch_assoc($result))
		 {   
	                $flag=$row['flag_for_login'];
					
					
	                $string=hex2bin($row['password']);
			        $cipher_algo = "AES-128-CTR"; 
					$iv_length = openssl_cipher_iv_length($cipher_algo);
					$option = 0; 
					$decrypt_iv  = '1234567890123456'; 
					$decrypt_key = "mentorship";  
					 $decrypted_string=openssl_decrypt ($string, $cipher_algo,
		             $decrypt_key, $option, $decrypt_iv);
			 
			 if($pwd==$decrypted_string AND $enrollment==$row['enrollment'] )
			 {
				$_SESSION["student"]=$enrollment;
				echo "<script>alert('Login Successfully');</script>";
				if($flag=='0')
					{   
				 echo "<script>location.href='changepasswordconfirmation.php';</script>";
						
					}
				echo "<script>location.href='studenthome.php';</script>";
			 }
			 
			 else
					{
				echo "<script>alert('Wrong username or password');</script>";
				echo"<script>location.href='studentloginpage.php';</script>";
				}
				
			 
		 }
}
else
    {
        echo "<script>alert('Enter Valid CAPTCHA CODE ');</script>";
		echo"<script>location.href='studentloginpage.php';</script>";
    }

}
	
?>

