<?php
session_start();
?>

<?php
include "include/connection.php";

if(isset($_POST['chn_enrollment']))
{
	$oldenrollment = $_POST['oldenrollment'];
	$newenrollment = $_POST['newenrollment'];
	echo $$newenrollment ;
	$size = sizeof($newenrollment);
	for($i=0;$i<$size;$i++)
	{
		$a=$oldenrollment[$i];
		$b=$newenrollment[$i];
		$cmd = "update studentreg set mentor='$b' where enrollment='$a'";
		$ex =mysqli_query($con,$cmd) or die(mysqli_error($con));
		
		
		

		//header("location:administrator-view-record.php");
	}
	if($ex)
	{
		echo "<script>alert('faculty assigned  Sucessfully ...')</script>";
	}
	else
	{
		echo "<script>alert('faculty Not assigned  Sucessfully ...')</script>";	
	}
}
?>