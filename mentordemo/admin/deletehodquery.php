<?php
  include "include/connection.php";
	$hid=$_GET['hid'];

  $cmd="delete from hodreg where hid='$hid'";

  $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('HOD Deleted Successfully');</script>";
		echo "<script>location.href='hoddisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('HOD Not Deleted');</script>";
		echo "<script>location.href='hoddisplay.php';</script>";
	}
?>