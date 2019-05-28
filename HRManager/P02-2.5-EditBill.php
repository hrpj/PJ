<?php
session_start();

	$search = mysqli_real_escape_string($con, $_POST['edit']);
	$date = mysqli_real_escape_string($con, $_POST['edit2']);
	$type = mysqli_real_escape_string($con, $_POST['edit3']);
		
	$_SESSION["FoundID2"] = $search;
	$_SESSION["date"] = $positionID;
	$_SESSION["type"] = $departmentID;
	
	header("Location: http://localhost/HRPJ/HRManager/P02-3-PaymentStaffEdit.php");
?>