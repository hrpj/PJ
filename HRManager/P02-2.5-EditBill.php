<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$search = mysqli_real_escape_string($con, $_POST['edit']);
	$date = mysqli_real_escape_string($con, $_POST['edit2']);
	$type = mysqli_real_escape_string($con, $_POST['edit3']);
		
	$_SESSION["FoundID2"] = $search;
	$_SESSION["date"] = $date;
	$_SESSION["type"] = $type;
	
	header("Location: http://localhost/HRPJ/HRManager/P02-3-PaymentStaffEdit.php");
	mysqli_close($con);
?>