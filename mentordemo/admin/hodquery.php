<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$hid=$_POST['hid'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$mobile=$_POST['mn'];
$pwd=$_POST['pwd'];
$conpwd=$_POST['conpwd'];

if($pwd == $conpwd)
{
$cmd="INSERT INTO hodreg (fname,lname,hid,branch,email,mobile,pwd,conpwd) VALUES ('$fname','$lname','$hid','$branch','$email','$mobile','$pwd','$conpwd')";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('HOD Data Inserted Successfully');</script>";
		echo "<script>location.href='hoddisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('HOD Data Not Inserted');</script>";
		echo "<script>location.href='hodregpage.php';</script>";
	}
}
	else
{
	echo "<script>alert('Password And Confirm Password is Not Match');</script>";
	echo "<script>location.href='hodregpage.php';</script>";
}
}

?>