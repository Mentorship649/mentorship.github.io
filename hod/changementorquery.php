<?php
session_start();
?>

<?php

include "include/connection.php";
if(isset($_POST['chn_enrollment']))
{
	$oldenrollment = $_POST['oldenrollment'];
	$newenrollment = $_POST['newenrollment'];
	
	//echo $$newenrollment;
	error_reporting();
	$size = sizeof($newenrollment);
	for($i=0;$i<$size;$i++)
	{
		$a=$oldenrollment[$i];
		$b=$newenrollment[$i];
		$qu = "update studentreg set mentor='$b' where enrollment='$a'";
		$ex = $con->query($qu);
		
		

		//header("location:");
	}
	if($ex)
	{
		echo "<script>alert('Mentor Updated  Sucessfully ...')</script>";
	}
		echo "<script>location.href='changementorpage.php';</script>";	
}
?>