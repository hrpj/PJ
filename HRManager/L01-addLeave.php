<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$descrip = mysqli_real_escape_string($con, $_POST['descrip']);
	$type = mysqli_real_escape_string($con, $_POST['type']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	
	$sql="INSERT INTO leavehistory (staffID, description, date, type) VALUES ('$id', '$descrip', '$date', $type)";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	echo "Leave history Added";
	
	header("Refresh: 3; url=http://localhost/HRPJ/HRManager/L01-Leave.php");
	
?>


