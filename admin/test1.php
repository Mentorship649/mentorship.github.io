<?php 
include "include/connection.php";

$cmd = "SELECT * FROM enrollment_data";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    	
		 while ($row = mysqli_fetch_assoc($result))
		 {
			        $string=hex2bin($row['password']);
			        $cipher_algo = "AES-128-CTR"; 
					$iv_length = openssl_cipher_iv_length($cipher_algo);
					$option = 0; 
					$decrypt_iv  = '1234567890123456'; 
					$decrypt_key = "mentorship";  
					 $decrypted_string=openssl_decrypt ($string, $cipher_algo,
		             $decrypt_key, $option, $decrypt_iv);
					 
					 echo $decrypted_string."<br>";
			         
	     }
?>