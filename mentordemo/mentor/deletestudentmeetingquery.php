<?php
  include "include/connection.php";
  $enrollment=$_GET['enrollment'];

  $cmd="delete from studentmeetingdetails where enrollment='$enrollment'";

  $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Student Details Deleted Successfully');</script>";
		echo "<script>location.href='studentmeetingdisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Student Details Not Deleted');</script>";
		echo "<script>location.href='studentmeetingdisplay.php';</script>";
	}
?>