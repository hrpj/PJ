<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// escape variables
	$departmentName = mysqli_real_escape_string($con, $_POST['departmentName']);

	if ($departmentName)
	{
		$_SESSION["departmentName"] = $departmentName;
		header("Location:http://localhost/HRPJ/HRManager/StaffInforEdit-03.php");
	}
	else
		echo "NOOOOOOOO!!!!!!!!";

mysqli_close($con);
?>