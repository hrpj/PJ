<?php
	session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$search = mysqli_real_escape_string($con, $_POST['search2']);
	$positionID = mysqli_real_escape_string($con, $_POST['position']);
	$departmentID = mysqli_real_escape_string($con, $_POST['departmentID']);
	$branchName = mysqli_real_escape_string($con, $_POST['branchName']);
	$month = mysqli_real_escape_string($con, $_POST['month']);
	$year = mysqli_real_escape_string($con, $_POST['year']);

	$_SESSION["foundID"] = $search;
	$_SESSION["posi"] = $positionID;
	$_SESSION["depart"] = $departmentID;
	$_SESSION["bran"] = $branchName;
	$_SESSION["month"] = $month;
	$_SESSION["year"] = $year;
	
	header("Location: http://localhost/HRPJ/HRManager/P02-2-ListOfBill.php");
?>