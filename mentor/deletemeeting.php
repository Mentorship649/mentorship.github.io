<?php
  include "include/connection.php";
  $meeting_id=$_GET['meeting_id'];

  $cmd="delete from meeting_details where meeting_id='$meeting_id'";

  $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Meeting Deleted Successfully');</script>";
		echo "<script>location.href='viewmeeting.php';</script>";
	}
	else
	{
		echo "<script>alert('Meeting Not Deleted');</script>";
		echo "<script>location.href='viewmeeting.php';</script>";
	}
?>