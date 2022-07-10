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


$cmd="update hodreg set fname='$fname', lname='$lname', branch='$branch', email='$email' , mobile='$mobile'  where hid='$hid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('HOD Data Update Successfully');</script>";
		echo "<script>location.href='hoddisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('HOD Data Not Update Successfully');</script>";
		echo "<script>location.href='hoddisplay.php';</script>";
	}
}
?>