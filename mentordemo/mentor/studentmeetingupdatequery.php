<?php
include "include/connection.php";
if(isset($_POST['update']))
{
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$enrollment = $_POST['enrollment'];
	$datebirth = $_POST['datebirth'];
	$gender = $_POST['gender'];
	$branch = $_POST['branch'];
	$batch = $_POST['batch'];
	$admission = $_POST['admission'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$midsem=$_POST['midsem'];
    $spi=$_POST['spi'];
    $cgpa=$_POST['cgpa'];
    $attendance=$_POST['attendance'];
    $behaviour=$_POST["behaviour"]; 
$problem=$_POST['problem'];
$meetingschedule=$_POST['ms'];
	
	

    $cmd="update studentmeetingdetails set fname='$fname', lname='$lname', datebirth='$datebirth', gender='$gender', branch='$branch', batch='$batch', admission='$admission', mobile='$mobile', email='$email', midsem='$midsem', spi='$spi', cgpa='$cgpa', attendance='$attendance', behaviour='$behaviour', problem='$problem', ms='$meetingschedule'  where enrollment='$enrollment'";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Student updated Successfully');</script>";
		echo "<script>location.href='studentmeetingdisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Student Not Updated');</script>";
		echo "<script>location.href='studentmeetingdisplay.php';</script>";
	}
}
?>
