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

	$_SESSION["search"] = $search;
	$_SESSION["positionID"] = $positionID;
	$_SESSION["departmentID"] = $departmentID;
	$_SESSION["branchName"] = $branchName;
	$_SESSION["month"] = $month;
	$_SESSION["year"] = $year;
	
	header("Location: http://localhost/HRPJ/HRManager/P02-2-ListOfBill.php");
		
	mysqli_close($con);
?>