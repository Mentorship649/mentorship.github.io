<?php
session_start();
$con = mysqli_connect("localhost","root","","mentor");

if(!$con)
{
	echo '<script>alert("error in database connection");</script>';
}

if(isset($_POST['submit']))
{
	$aid = $_POST['aid'];
	$password = $_POST['password'];
	$captcha = $_POST["captcha"];
    

	  
	if($_SESSION['CAPTCHA_CODE'] == $captcha)
	{
	$_SESSION['admin'] = $_POST['aid'];

	$hash = password_hash($password ,PASSWORD_DEFAULT);
	
    $cmd = "SELECT * FROM adminlogin WHERE aid='$aid' and password='$password'";
	
	
    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    if($count >= 1)
    {
        $_SESSION["admin"]=$aid;
        echo "<script>alert('Login Successfully');</script>";
        echo "<script>location.href='adminhome.php';</script>";
		$hash = password_hash($password ,PASSWORD_DEFAULT);
		echo "<script>alert('$hash');</script>";
    }
    else
    {
        echo "<script>alert('Wrong username or password');</script>";
		echo"<script>location.href='loginpage.php';</script>";
    }

}
else
    {
        echo "<script>alert('Enter Valid CAPTCHA CODE ');</script>";
		echo"<script>location.href='loginpage.php';</script>";
    }

}

?>

