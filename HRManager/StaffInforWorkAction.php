<?php
session_start();
	$search = $_SESSION["search"];
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// escape variables
	$i = mysqli_real_escape_string($con, $_POST['i']);


	if (!$i)
		$company=1;

	switch ($i) 
	{
			case '1':	$company = mysqli_real_escape_string($con, $_POST['company1']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate1']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate1']);
						break;
			case '2': 	$company = mysqli_real_escape_string($con, $_POST['company2']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate2']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate2']);
						break;
			case '3': 	$company = mysqli_real_escape_string($con, $_POST['company3']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate3']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate3']);
						break;
			case '4': 	$company = mysqli_real_escape_string($con, $_POST['company4']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate4']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate4']);
						break;
			case '5': 	$company = mysqli_real_escape_string($con, $_POST['company5']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate5']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate5']);
						break;
			case '6': 	$company = mysqli_real_escape_string($con, $_POST['company6']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate6']);
						$endDate= mysqli_real_escape_string($con, $_POST['endDate6']);
						break;
			case '7': 	$company = mysqli_real_escape_string($con, $_POST['company7']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate7']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate7']);
						break;
			case '8': 	$company = mysqli_real_escape_string($con, $_POST['company8']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate8']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate8']);
						break;
			case '9': 	$company = mysqli_real_escape_string($con, $_POST['company9']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate9']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate9']);
						break;
			case '10': 	$company = mysqli_real_escape_string($con, $_POST['company10']);
						$startDate = mysqli_real_escape_string($con, $_POST['startDate10']);
						$endDate = mysqli_real_escape_string($con, $_POST['endDate10']);
						break;
			default: break;
	}

	$delete = mysqli_query($con,"DELETE FROM workinghistory WHERE staffID LIKE '".$search."' AND company LIKE '".$company."' AND startDate ='".$startDate."' AND endDate ='".$endDate."';");

	if ($company) 
		echo "Yeah!!";	
	else
		echo "sql company error";
	if ($delete) 
		echo "Deleted!!";	
	else
		echo "sql delete error";
mysqli_close($con);
?>