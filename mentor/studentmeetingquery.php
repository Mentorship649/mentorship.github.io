<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$enrollment=$_POST['enrollment'];
$datebirth=$_POST['dob'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$batch=$_POST['batch'];
$admission=$_POST['admission'];
$mobile=$_POST['mn'];
$email=$_POST['email'];
$midsem=$_POST['midsem'];
$spi=$_POST['spi'];
$cgpa=$_POST['cgpa'];
$attendance=$_POST['attendance'];
$behaviour=$_POST["behaviour"];
$problem=$_POST['problem'];
$meetingschedule=$_POST['ms'];


$cmd="INSERT into studentmeetingdetails (fname,lname,enrollment,datebirth,gender,branch,semester,batch,admission,mobile,email,midsem,spi,cgpa,attendance,behaviour,problem,ms) 
VALUES ('$fname','$lname','$enrollment','$datebirth','$gender','$branch','$semester','$batch','$admission','$mobile','$email','$midsem','$spi','$cgpa','$attendance','$behaviour','$problem','$meetingschedule')";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Student Meeting Data Inserted Successfully');</script>";
		echo "<script>location.href='studentmeetingdisplay.php';</script>";
	}
	else
	{
		echo "<script>alert('Student Meeting Data Not Inserted');</script>";
		echo "<script>location.href='studentmeetingpage.php';</script>";
	}
  
	
}
?>