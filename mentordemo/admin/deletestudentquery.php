<?php
  include "include/connection.php";
  $enrollment=$_GET['enrollment'];

  $cmd="delete from studentreg where enrollment='$enrollment'";

  $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Student Deleted Successfully');</script>";
		echo "<script>location.href='studentdisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Student Not Deleted');</script>";
		echo "<script>location.href='studentdisplay.php';</script>";
	}
?>