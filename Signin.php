<?php 
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// escape variables for security
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	
	$hr = "HR";
	
	$result = mysqli_query($con,"SELECT * FROM staff WHERE staffId LIKE '$id'");
	
	$count=$result->num_rows;
	if ((empty($count))) 
	{
		header("Location: http://localhost/HRPJ/ErrorSignin.html");
	}
	echo SESSION_id();
	while ($row = mysqli_fetch_array($result))
	{
		$_SESSION["ID"] = $row['staffID'];
		$positionID = $row['positionID'];
		if ($password == $row['password'])
		{
			$result = mysqli_query($con,"SELECT * FROM position WHERE positionID LIKE '$positionID'");
			$row = mysqli_fetch_array($result);
			if(strpos($row['positionName'],$hr)!==false)
			{
				header("Location: http://localhost/HRPJ/HR/WelcomeSignoutForHR.php");
			}
			else
			{
			header("Location: http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php");
			}
		}
		else
		{
			header("Location: http://localhost/HRPJ/ErrorSignin.html");
		}
	}
	
	mysqli_close($con);
	session_write_close();
?>