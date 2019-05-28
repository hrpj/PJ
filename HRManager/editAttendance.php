<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$search = $_SESSION["search"];
	$year = $_SESSION["year"];
	$dm = $_SESSION["result2"];
	
	$timeIn = mysqli_real_escape_string($con, $_POST['timeIn']);
	$statusIn = mysqli_real_escape_string($con, $_POST['statusIn']);
	$timeOut = mysqli_real_escape_string($con, $_POST['timeOut']);
	$statusOut = mysqli_real_escape_string($con, $_POST['statusOut']);
	
	$result = mysqli_query($con,"SELECT * FROM timeattendance WHERE staffId LIKE '$search' AND year LIKE '$year' AND date LIKE '$dm' AND type LIKE 'IN'");
	while ($row = mysqli_fetch_array($result))
	{
		$statusInOld = $row['status'];
		$TimeInOld = $row['time'];
	}
	
	$result = mysqli_query($con,"SELECT * FROM timeattendance WHERE staffId LIKE '$search' AND year LIKE '$year' AND date LIKE '$dm' AND type LIKE 'OUT'");
	while ($row = mysqli_fetch_array($result))
	{
		$statusOutOld = $row['status'];
		$TimeOutOld = $row['time'];
	}
	
	if(empty($timeIn)) { $timeIn = $TimeInOld; }
	if(empty($statusIn)) { $statusIn = $statusInOld; }
	if(empty($timeOut)) { $timeOut = $TimeOutOld; }
	if(empty($statusOut)) { $statusOut = $statusOutOld; }
	
	mysqli_query($con,"UPDATE timeattendance SET time = '$timeIn' WHERE staffId LIKE '$search' AND year LIKE '$year' AND date LIKE '$dm' AND type LIKE 'IN'");
	mysqli_query($con,"UPDATE timeattendance SET status = '$statusIn' WHERE staffId LIKE '$search' AND year LIKE '$year' AND date LIKE '$dm' AND type LIKE 'IN'");
	mysqli_query($con,"UPDATE timeattendance SET time = '$timeOut' WHERE staffId LIKE '$search' AND year LIKE '$year' AND date LIKE '$dm' AND type LIKE 'Out'");
	mysqli_query($con,"UPDATE timeattendance SET status = '$statusOut' WHERE staffId LIKE '$search' AND year LIKE '$year' AND date LIKE '$dm' AND type LIKE 'Out'");
		
	mysqli_close($con);
	header("Location: http://localhost/HRPJ/HR/AttendanceStatusForHR-01Success.php");
?>