<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mid=$_POST['mid'];
$branch=$_POST['branch'];
$mobile=$_POST['mn'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$conpwd=$_POST['conpwd'];

if($pwd == $conpwd)
{
$cmd="INSERT INTO mentorreg (fname,lname,mid,branch,mobile,email,pwd,conpwd) VALUES ('$fname','$lname','$mid','$branch','$mobile','$email','$pwd','$conpwd')";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Mentor Data Inserted Successfully');</script>";
		echo "<script>location.href='mentordisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Mentor Data Not Inserted');</script>";
		echo "<script>location.href='mentorregpage.php';</script>";
	}
  }
	else
{
	echo "<script>alert('Password And Confirm Password is Not Match');</script>";
	echo "<script>location.href='mentorregpage.php';</script>";
}
}
?>