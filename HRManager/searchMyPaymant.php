<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$id = $_SESSION["ID"];
	$month = mysqli_real_escape_string($con, $_POST['month']);
	$year = mysqli_real_escape_string($con, $_POST['year']);

	$result = mysqli_query($con,"SELECT * FROM bonus WHERE staffId LIKE '$id' AND year LIKE '$year' AND date LIKE '$month%'");
	$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE staffId LIKE '$id' AND year LIKE '$year' AND date LIKE '$month%'");

	$count1=$result->num_rows;
	$count2=$result2->num_rows;

	if ( empty($count1) && empty($count2) )
	{
		header("Location: http://localhost/HRPJ/HRManager/P01-1E-PaymentSearchForHR.php");
	}
	else
	{
		$_SESSION["YEAR"] = $year;
		$_SESSION["MONTH"] = $month;
		header("Location: http://localhost/HRPJ/HRManager/P01-2-PaymentStaffSuccessForHR.php");
	}
	mysqli_close($con);
?>
