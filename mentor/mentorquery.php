<?php
session_start();
$con = mysqli_connect("localhost","root","","mentor");

if(!$con)
{
	echo '<script>alert("error in database connection");</script>';
}

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$captcha = $_POST["captcha"];
    

	  
	if($_SESSION['CAPTCHA_CODE'] == $captcha)
	{

	
    $cmd = "SELECT * FROM mentorreg WHERE email='$email' and pwd='$password'";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    if($count >= 1)
    {
	    $_SESSION["mentor"]=$email;
        echo "<script>alert('Login Successfully');</script>";
        echo "<script>location.href='mentorhome.php';</script>";
    }
    else
    {
        echo "<script>alert('Wrong username or password');</script>";
       echo"<script>location.href='mentorloginpage.php';</script>";
    }
}
else
    {
        echo "<script>alert('Enter Valid CAPTCHA CODE ');</script>";
		echo"<script>location.href='loginpage.php';</script>";
    }

}
	
?>

