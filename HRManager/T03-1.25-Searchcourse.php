<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$courseID = mysqli_real_escape_string($con, $_POST['courseID']);

	$_SESSION['courseID'] = $courseID;
	header("Location: http://localhost/HRPJ/HRManager/T03-1-Edittraining.php");
	
	mysqli_close($con);
?>

