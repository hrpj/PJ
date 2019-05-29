<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$departmentID = mysqli_real_escape_string($con, $_POST['departmentID']);
	
	$_SESSION['departmentID'] = $departmentID;
	header("Location: http://localhost/HRPJ/HRManager/T01-2-NewTraining_2.php");
	
	mysqli_close($con);
?>

