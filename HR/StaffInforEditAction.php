<?php 
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// escape variables for security
	$staffName = mysqli_real_escape_string($con, $_POST["staffName"]);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$start = mysqli_real_escape_string($con, $_POST['start']);
	$mobilePhoneNo = mysqli_real_escape_string($con, $_POST['mobilePhoneNo']);
	$staffAddress = mysqli_real_escape_string($con, $_POST['staffAddress']);
	$i = mysqli_real_escape_string($con, $_POST['i']);
	$j = mysqli_real_escape_string($con, $_POST['j']);

	while ($i > 0) 
	{
		mysqli_real_escape_string($con, $_POST['company']);
		$i--;
	}
	echo $staffName;
	echo $gender;
	echo $start;
	echo " ".$mobilePhoneNo;
	echo " ".$staffAddress;
	echo " ",$i." ".$j;
	//$result = mysqli_query($con,"SELECT * FROM staff WHERE staffId LIKE '$id'");
	
	//$count=$result->num_rows;
	//if ((empty($count))) 
	//{
	//	header("Location: http://localhost/HRPJ/ErrorSignin.html");
	//}
	//echo SESSION_id();
	//while ($row = mysqli_fetch_array($result))
	//{
	//	$_SESSION["ID"] = $row['staffID'];
	//
	//	if ($password == $row['password'])
	//	{
	//		if(strpos($row['positionID'],$hr)!==false)
	//		{
	//			header("Location: http://localhost/HRPJ/HR/WelcomeSignoutForHR.php");
	//		}
	//		else
	//		{
	//		header("Location: http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php");
	//		}
	//	}
	//	else
	//	{
	//		header("Location: http://localhost/HRPJ/ErrorSignin.html");
	//	}
	//}
	
	mysqli_close($con);
	session_write_close();
?>