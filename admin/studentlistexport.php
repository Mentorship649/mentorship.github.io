<?php
include "include/connection.php";
$batch=date("Y");
 $cmd = "SELECT *FROM enrollment_data where batch='$batch' and flag_for_login='0' order by srno ASC";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if(mysqli_num_rows($result)>0)
	{
    $html='<table border="1" cellpadding="5%"><tr><td>SRNO</td><td>Enrollment No</td><td>Name</td><td>User ID</td><td>Password</td></tr>';
	
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
					 
					 
					
					static $srno=0;
	      $html.="<tr><td>".++$srno."</td><td>".$row['enrollment']."</td><td>".$row['student_name']."</td><td>".$row['username']."</td><td>". $decrypted_string."</td></tr>";
		 }
	 
	 
		 	 
		 $html.='</table>';
		 echo $html;
		
		 header('content-Type:application/xls');
		 header('content-Disposition:attachment;filename=student_credentials.xls');
	}
	else
	{
		$html="data not found";
	}
	
?>