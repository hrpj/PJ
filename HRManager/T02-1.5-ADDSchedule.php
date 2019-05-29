<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$courseID = mysqli_real_escape_string($con, $_POST['courseID']);
	$place = mysqli_real_escape_string($con, $_POST['place']);
	$startDate = mysqli_real_escape_string($con, $_POST['startDate']);
	$endDate = mysqli_real_escape_string($con, $_POST['endDate']);
	$chargePerson = mysqli_real_escape_string($con, $_POST['chargePerson']);
	$loop = mysqli_real_escape_string($con, $_POST['loop']);
	
	if(empty($courseID) || empty($place) || empty($startDate) || empty($endDate) || empty($chargePerson))
	{
		header("Location: http://localhost/HRPJ/HRManager/T02-1ERROR-CreateSchedule.php");
	}
	
	if(empty($loop))
	{
		$sql="INSERT INTO trainingschedule (courseID, place, inChargePerson, startDate, endDate) VALUES ('$courseID', '$place', '$chargePerson', '$startDate', '$endDate')";
		if (!mysqli_query($con,$sql)) 
		{
			die('Error: ' . mysqli_error($con));
			header("Refresh:5 ; url=http://localhost/HRPJ/HRManager/T02-1-CreateSchedule.php");
		}
		echo "1 record added";
		header("Refresh:1 ; url=http://localhost/HRPJ/HRManager/T01-1-NewTraining_1.php");
	}
	else
	{
		$sql="INSERT INTO trainingschedule (courseID, place, inChargePerson, startDate, endDate) VALUES ('$courseID', '$place', '$chargePerson', '$startDate', '$endDate')";
		if (!mysqli_query($con,$sql)) 
		{
			die('Error: ' . mysqli_error($con));
			header("Refresh:5 ; url=http://localhost/HRPJ/HRManager/T02-1-CreateSchedule.php");
		}
		echo "1 record added";
		header("Refresh:1 ; url=http://localhost/HRPJ/HRManager/T02-1-CreateSchedule.php");
	}

	mysqli_close($con);
?>

