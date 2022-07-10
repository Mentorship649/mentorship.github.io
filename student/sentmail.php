<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
    $enrollment=$_POST['enrollment'];	
	$mail=$_POST['email'];
	$cmd = "SELECT * FROM enrollment_data WHERE enrollment='$enrollment'";
	
	 $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	 
	 while ($row = mysqli_fetch_assoc($result))
		 { 
	           if($row['email']==$mail)
			   {
				    $to=$mail;
					
				    $random_num    = md5(random_bytes(64));
			        $otp  = substr($random_num, 0, 5);
					
					$subject="verification code for mentorship";
				    $message="Dear user, your verification code for mentorship password reset is $otp.Thank you.";
				   
				    $from="simariyamitesh12@gmail.com";
					
					$headers ="From : $from";
					
					
					if(mail($to,$subject,$message,$headers))
					{
						echo "<script>alert('E-mail is sent successfully ');</script>";
		                echo"<script>location.href='studentloginpage.php';</script>";
					}
					else {
						echo "<script>alert('E-mail is not sent successfully ');</script>";
		                //echo"<script>location.href='beforeforgotepassword.php';</script>";
					}
			   }
         else {
			 echo "<script>alert('Enter valid email');</script>";
		     echo"<script>location.href='beforeforgotepassword.php';</script>";
		 }

		 }
}		 
?>