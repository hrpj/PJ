<?php
session_start();
$_SESSION["checkFirst"] = 0;
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// escape variables
	$branchName = mysqli_real_escape_string($con, $_POST['branchName']);

	if ($branchName)
	{
		$_SESSION["branchName"] = $branchName;
		echo $branchName;
		echo $_SESSION["branchName"];
		header("Location:http://localhost/HRPJ/HRManager/StaffInforEdit-03.php");
	}
	else
		echo "NOOOOOOOO!!!!!!!!";

mysqli_close($con);
?>