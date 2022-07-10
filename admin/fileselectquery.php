<?php
if (isset($_POST['submit']))
{
	$batch=$_POST['batch'];
	$format=$_POST['format'];
	//echo $batch;
	//echo $format;
	
	if($format=="pdf")
	{
		header('location:studentlistexportpdf.php');
	}
	else
	{
		header('location:studentlistexport.php');
	}
	
	
}
?>