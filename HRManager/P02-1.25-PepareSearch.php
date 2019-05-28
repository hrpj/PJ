<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$searchNew = mysqli_real_escape_string($con, $_POST['search']);
	$branchNew = mysqli_real_escape_string($con, $_POST['branch']);
	$departmentNew = mysqli_real_escape_string($con, $_POST['department']);

	if(!empty($searchNew))
	{
		$result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$searchNew'");
		$count=$result->num_rows;
		if ((empty($count)))
		{
			header("Location: http://localhost/HRPJ/HRManager/P02-1ERROR-PaymentStaffSearch.php");
		}
		else
		{
			while ($row = mysqli_fetch_array($result))
			{
				$_SESSION["search"] = $searchID = $row['staffID'];
				$_SESSION["positionID"] = $positionID = $row['positionID'];
			}
			$result = mysqli_query($con,"SELECT * FROM position WHERE positionID LIKE '$positionID'");
			while ($row = mysqli_fetch_array($result))
			{
				$_SESSION["positionName"] = $positionName = $row['positionName'];
				$_SESSION["departmentID"] = $departmentID = $row['departmentID'];
			}
			$result = mysqli_query($con,"SELECT * FROM department WHERE departmentID = '$departmentID'");
			while ($row = mysqli_fetch_array($result))
			{
				$_SESSION["departmentName"] = $departmentName = $row['departmentName'];
				$_SESSION["branchName"] = $branchName = $row['BranchName'];
			}
			header("Location: http://localhost/HRPJ/HRManager/P02-1-PaymentStaffSearch.php");
		}
	}
	else if(empty($searchNew) && !empty($branchNew) && empty($departmentNew))
	{
		$_SESSION["branchName"] = $branchNew;
		header("Location: http://localhost/HRPJ/HRManager/P02-1-PaymentStaffSearch.php");
	}
	else if(empty($searchNew) && !empty($departmentNew))
	{
		$_SESSION["departmentID"] = $departmentNew;
		header("Location: http://localhost/HRPJ/HRManager/P02-1-PaymentStaffSearch.php");
	}
	else if(empty($searchNew) && !empty($branchNew) && !empty($departmentNew))
	{
		echo "2";
	}
	
	mysqli_close($con);
?>
