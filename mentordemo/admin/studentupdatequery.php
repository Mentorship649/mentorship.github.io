<?php
include "include/connection.php";
if(isset($_POST['update']))
{
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$enrollment = $_POST['enrollment'];
	$sem=$_POST['sem'];
	$datebirth = $_POST['datebirth'];
	$gender = $_POST['gender'];
	$branch = $_POST['branch'];
	$batch = $_POST['batch'];
	$admission = $_POST['admission'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	
	

    $cmd="update studentreg set fname='$fname', lname='$lname',sem='$sem', datebirth='$datebirth', gender='$gender', branch='$branch', batch='$batch', admission='$admission', mobile='$mobile', email='$email' where enrollment='$enrollment'";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Student updated Successfully');</script>";
		echo "<script>location.href='studentdisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Student Not Updated');</script>";
		echo "<script>location.href='studentdisplay.php';</script>";
	}
}
?>
