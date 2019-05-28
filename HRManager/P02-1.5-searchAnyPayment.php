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

	$_SESSION["search"] = $search;
	$_SESSION["positionID"] = $positionID;
	$_SESSION["departmentID"] = $departmentID;
	$_SESSION["branchName"] = $branchName;
	$_SESSION["month"] = $month;
	$_SESSION["year"] = $year;
	
	header("Location: http://localhost/HRPJ/HRManager/P02-2-ListOfBill.php");
		
	if(!empty($search))
	{
		$result = mysqli_query($con,"SELECT * FROM bonus WHERE staffID LIKE '$search' AND date LIKE '$month%' AND year LIKE '$year%'");
		while ($row = mysqli_fetch_array($result))
		{
			echo $row['amount'];
		}
	}
	//else if()
	//{
		
	//}
	
	
	mysqli_close($con);
?>