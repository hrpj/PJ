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


	unset ($_SESSION["foundID"]);
	unset ($_SESSION["posi"]);
	unset ($_SESSION["depart"]);
	unset ($_SESSION["bran"]);
	unset ($_SESSION["month"]);
	unset ($_SESSION["year"]);

	if(!empty($search))
	{
		$_SESSION["foundID"] = $search;
	}
	if(!empty($positionID))
	{
		$_SESSION["posi"] = $positionID;
	}
	if(!empty($departmentID))
	{
		$_SESSION["depart"] = $departmentID;
	}
	if(!empty($branchName))
	{
		$_SESSION["bran"] = $branchName;
	}
	if(!empty($month))
	{
		$_SESSION["month"] = $month;
	}
	if(!empty($year))
	{
		$_SESSION["year"] = $year;
	}

	header("Location: http://localhost/HRPJ/HRManager/P02-2-ListOfBill.php");
?>