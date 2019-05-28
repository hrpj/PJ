<?php
session_start();
$_SESSION["checkFirst"] = 3;
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// escape variables
	$departmentName = mysqli_real_escape_string($con, $_POST['departmentName']);
	$result = mysqli_query($con,"SELECT departmentID FROM department where departmentName LIKE '$departmentName'");
	while ($row = mysqli_fetch_array($result))
            {
            	$departmentID = $row['departmentID'];
            }
	$_SESSION["departmentID"] = $departmentID;

	if ($result)
	{
		$_SESSION["departmentName"] = $departmentName;
		//header("Location:http://localhost/HRPJ/HRManager/StaffInforEdit-03.php");
	}
	else
		echo "NOOOOOOOO!!!!!!!!";

mysqli_close($con);
?>