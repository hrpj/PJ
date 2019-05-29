<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$courseID = $_SESSION['courseID'];
	$positionID = mysqli_real_escape_string($con, $_POST['positionID']);
	$loop = mysqli_real_escape_string($con, $_POST['loop']);
	
	
	if(empty($loop))
	{
		if(empty($positionID))
		{
			header("Location: http://localhost/HRPJ/HRManager/T01-2ERROR-NewTraining_2.php");
		}
	
		$sql="INSERT INTO requirecourse (courseID, positionID) VALUES ('$courseID', '$positionID')";
		if (!mysqli_query($con,$sql)) 
		{
			die('Error: ' . mysqli_error($con));
			header("Refresh:5 ; url=http://localhost/HRPJ/HRManager/T01-2-NewTraining_2.php");
		}
		
		unset ($_SESSION["departmentID"]);
		header("Location: http://localhost/HRPJ/HRManager/T01-1-NewTraining_1.php");
	}
	else
	{
		if(empty($positionID))
		{
			header("Location: http://localhost/HRPJ/HRManager/T01-2ERROR-NewTraining_2.php");
		}
		$sql="INSERT INTO requirecourse (courseID, positionID) VALUES ('$courseID', '$positionID')";
		if (!mysqli_query($con,$sql)) 
		{
			die('Error: ' . mysqli_error($con));
			header("Refresh:5 ; url=http://localhost/HRPJ/HRManager/T01-2-NewTraining_2.php");
		}
		unset ($_SESSION["departmentID"]);
		header("Location: http://localhost/HRPJ/HRManager/T01-2-NewTraining_2.php");
	}
	mysqli_close($con);
?>

