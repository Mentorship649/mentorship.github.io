<?php
  include "include/connection.php";
  $mid=$_GET['mid'];

  $cmd="delete from mentorreg where mid='$mid'";

  $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Mentor Deleted Successfully');</script>";
		echo "<script>location.href='mentordisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Mentor Not Deleted');</script>";
		echo "<script>location.href='mentordisplay.php';</script>";
	}
?>
