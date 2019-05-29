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
	$check = mysqli_real_escape_string($con, $_POST['edit4']);
	
	$positionID = $_SESSION["posi"];
	$departmentID = $_SESSION["depart"];
	$branchName = $_SESSION["bran"];
	$month  = $_SESSION["month"];
	$year = $_SESSION["year"];

	if(!empty($search5))
	{
		$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE staffID LIKE '$search' AND date LIKE '$month%' AND year LIKE '$year%'");
		$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE staffID LIKE '$search' AND date LIKE '$month%' AND year LIKE '$year%'");
	}
	else if(empty($search5) && !empty($positionID))
	{
		$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID LIKE '$positionID')");
		$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID LIKE '$positionID')");
	}
	else if(empty($search5) && empty($positionID) && !empty($departmentID))
	{
		$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
										WHERE departmentID LIKE '$departmentID'))");
		$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
										WHERE departmentID LIKE '$departmentID'))");
	}
	else if(empty($search5) && empty($positionID) && empty($departmentID) && !empty($branchName))
	{
		$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
										WHERE departmentID IN (SELECT departmentID FROM department WHERE branchName LIKE '$branchName%')))");
		$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
										WHERE departmentID IN (SELECT departmentID FROM department WHERE branchName LIKE '$branchName%'))");
	}
	
	$i = 0;
	if($type=='bonus')
	{
		while($row1 = mysqli_fetch_array($result1))
		{
			if(i==check)
			{
				break;
			}
			$date = $row1["date"];
			$year = $row1["year"];
			$i++;
		}
	}
	else
	{
		while($row2 = mysqli_fetch_array($result2))
		{
			if(i==check)
			{
				break;
			}
			$date = $row2["date"];
			$year = $row2["year"];
			$i++;
		}
	}

	$_SESSION["FoundID2"] = $search;
	$_SESSION["date"] = $date;
	$_SESSION["type"] = $type;
	
	mysqli_close($con);
	header("Location: http://localhost/HRPJ/HRManager/P02-3-PaymentStaffEdit.php");

?>