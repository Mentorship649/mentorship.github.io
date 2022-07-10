<?php
include "include/connection.php";
if(isset($_POST['update']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mid=$_POST['mid'];
$branch=$_POST['branch'];
$mobile=$_POST['mn'];
$email=$_POST['email'];


    $cmd="update mentorreg set fname='$fname', lname='$lname', branch='$branch', mobile='$mobile', email='$email' where mid='$mid'";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Mentor updated Successfully');</script>";
		echo "<script>location.href='mentordisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Mentor Not Updated');</script>";
		echo "<script>location.href='mentordisplay.php';</script>";
	}
}
?>