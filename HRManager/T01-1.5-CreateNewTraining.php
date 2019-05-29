<?php
session_start();
	$id = $_SESSION["ID"];
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$trainingID = mysqli_real_escape_string($con, $_POST['trainingID']);
	$trainingTopic = mysqli_real_escape_string($con, $_POST['trainingTopic']);
	
	$sql="INSERT INTO trainingcourse (courseID, courseName) VALUES ('$trainingID', '$trainingTopic')";
	
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
		header("Refresh:5 ; Location: http://localhost/HRPJ/HRManager/P02-3-PaymentStaffEdit.php");
	}
	
	echo "1 record added";
	
	header("Refresh:2; url=http://localhost/HRPJ/HRManager/T01-2-NewTraining_2.php");
	mysqli_close($con);
?>

