<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// escape variables for security
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$search = mysqli_real_escape_string($con, $_POST['search']);
	
	$result = explode("-",$date);
	
	$year = $result[0];
	$month = $result[1];
	$day = $result[2];
		
	$result2 = $month . '-' . $day;
	$_SESSION["search"] = $search;
	$_SESSION["year"] = $year;
	$_SESSION["result2"] = $result2;
	
	mysqli_close($con);
	
	header("Location: http://localhost/HRPJ/HR/TimeManageSuccessForHR-04.php");

?>