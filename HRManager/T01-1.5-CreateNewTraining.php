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
	$_SESSION['courseID'] = $trainingID;
	$sql="INSERT INTO trainingcourse (courseID, courseName) VALUES ('$trainingID', '$trainingTopic')";
	
	if(empty($trainingID) || empty($trainingTopic))
	{
		header("Location: http://localhost/HRPJ/HRManager/T01-1ERROR-NewTraining_1.php");
	}
	
	
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
		header("Refresh:5 ; url=http://localhost/HRPJ/HRManager/P02-3-PaymentStaffEdit.php");
	}
	
	echo "1 record added";
	unset ($_SESSION["departmentID"]);
	header("Refresh:1; url=http://localhost/HRPJ/HRManager/T01-2-NewTraining_2.php");
	mysqli_close($con);
?>

