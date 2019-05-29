<?php
session_start();
ob_start();
$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
// escape variables
	$search = $_SESSION["search"];
	$staffName = mysqli_real_escape_string($con, $_POST["staffName"]);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$start = mysqli_real_escape_string($con, $_POST['start']);
	$telNo = mysqli_real_escape_string($con, $_POST['telNo']);
	$bankAccount = mysqli_real_escape_string($con, $_POST['bankAccount']);
	$staffAddress = mysqli_real_escape_string($con, $_POST['staffAddress']);
	$DOB = mysqli_real_escape_string($con, $_POST['DOB']);
	$positionID = mysqli_real_escape_string($con, $_POST['positionID']);
	$i = mysqli_real_escape_string($con, $_POST['i']);
	$j = mysqli_real_escape_string($con, $_POST['j']);

//Set time zone and current date
	date_default_timezone_set("Asia/Bangkok");
	$date = date("Y-m-d");
	echo $date ;
	echo $positionID;

//if no data reciever
//Set data that will update to original data
	$NoBugProtect = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$search'");
	while ($row = mysqli_fetch_array($NoBugProtect)) 
	{
		if (empty($NoBugProtect)) 
		{
			echo "Protecting ERROR !!!";
		}
		if (empty($staffName)) 
		{
			$staffName = $row['staffName'];
		}
		if (empty($gender)) 
		{
			$gender = $row['gender'];
		}
		if (empty($start)) 
		{
			$start = $row['startDate'];
		}
		if (empty($telNo)) 
		{
			$telNo = $row['telNo'];
		}
		if (empty($staffAddress)) 
		{
			$staffAddress = $row['address'];
		}
		if (empty($bankAccount))
		{
			$bankAccount = $row['bankAccount'];
		}
		if (empty($DOB))
		{
			$DOB = $row['dateOfBirth'];
		}
		if (empty($positionID))
		{
			$positionID = $row['positionID'];
		}
		//keep original positionID tocheck update
		$positionIDForCheckUpdate = $row['positionID'];
	}

//Condition for no working history or no education history
	if (!$i)
		$sql=1;
	if (!$j)
		$lalala=1;
// Company start
    $Temp = 1;
	while ($Temp <= $i)
	{
		switch ($Temp) {
			case '1':	$company[0] = mysqli_real_escape_string($con, $_POST['company1']);
						$startDate[0] = mysqli_real_escape_string($con, $_POST['startDate1']);
						$endDate[0] = mysqli_real_escape_string($con, $_POST['endDate1']);
						break;
			case '2': 	$company[1] = mysqli_real_escape_string($con, $_POST['company2']);
						$startDate[1] = mysqli_real_escape_string($con, $_POST['startDate2']);
						$endDate[1] = mysqli_real_escape_string($con, $_POST['endDate2']);
						break;
			case '3': 	$company[2] = mysqli_real_escape_string($con, $_POST['company3']);
						$startDate[2] = mysqli_real_escape_string($con, $_POST['startDate3']);
						$endDate[2] = mysqli_real_escape_string($con, $_POST['endDate3']);
						break;
			case '4': 	$company[3] = mysqli_real_escape_string($con, $_POST['company4']);
						$startDate[3] = mysqli_real_escape_string($con, $_POST['startDate4']);
						$endDate[3] = mysqli_real_escape_string($con, $_POST['endDate4']);
						break;
			case '5': 	$company[4] = mysqli_real_escape_string($con, $_POST['company5']);
						$startDate[4] = mysqli_real_escape_string($con, $_POST['startDate5']);
						$endDate[4] = mysqli_real_escape_string($con, $_POST['endDate5']);
						break;
			case '6': 	$company[5] = mysqli_real_escape_string($con, $_POST['company6']);
						$startDate[5] = mysqli_real_escape_string($con, $_POST['startDate6']);
						$endDate[5] = mysqli_real_escape_string($con, $_POST['endDate6']);
						break;
			case '7': 	$company[6] = mysqli_real_escape_string($con, $_POST['company7']);
						$startDate[6] = mysqli_real_escape_string($con, $_POST['startDate7']);
						$endDate[6] = mysqli_real_escape_string($con, $_POST['endDate7']);
						break;
			case '8': 	$company[7] = mysqli_real_escape_string($con, $_POST['company8']);
						$startDate[7] = mysqli_real_escape_string($con, $_POST['startDate8']);
						$endDate[7] = mysqli_real_escape_string($con, $_POST['endDate8']);
						break;
			case '9': 	$company[8] = mysqli_real_escape_string($con, $_POST['company9']);
						$startDate[8] = mysqli_real_escape_string($con, $_POST['startDate9']);
						$endDate[8] = mysqli_real_escape_string($con, $_POST['endDate9']);
						break;
			case '10': 	$company[9] = mysqli_real_escape_string($con, $_POST['company10']);
						$startDate[9] = mysqli_real_escape_string($con, $_POST['startDate10']);
						$endDate[9] = mysqli_real_escape_string($con, $_POST['endDate10']);
						break;
			default: break;
		}
		$Temp++;
	}
	$count = 0;
	$result = mysqli_query($con,"SELECT * FROM workinghistory WHERE staffID LIKE '$search'");
    while ($row = mysqli_fetch_array($result))
    {
    	$companySearch[$count] = $row['company'];
    	$startSearch[$count] = $row['startDate'];
    	$endSearch[$count] = $row['endDate'];
    	$count++;
    }
    $count = 0;
    while ($count < $i)
    {
    	$sql = mysqli_query($con,"UPDATE workinghistory SET company ='".$company[$count]."',startDate ='".$startDate[$count]."',endDate ='".$endDate[$count]."' WHERE company LIKE '".$companySearch[$count]."' AND startDate ='".$startSearch[$count]."' AND endDate ='".$endSearch[$count]."'AND staffID LIKE'".$search."';");
    	echo $companySearch[$count].$startSearch[$count].$endSearch[$count]."<br>" ;
		echo $company[$count].$startDate[$count].$endDate[$count]."<br>" ;
		$count++;
	}
// Company end

// university recieve case
	$Temp = 1;
	while ($Temp <= $j)
	{
		switch ($Temp) {
			case '1':	$university[0] = mysqli_real_escape_string($con, $_POST['university1']);
						$field[0] = mysqli_real_escape_string($con, $_POST['field1']);
						$degree[0] = mysqli_real_escape_string($con, $_POST['degree1']);
						break;
			case '2': 	$university[1] = mysqli_real_escape_string($con, $_POST['university2']);
						$field[1] = mysqli_real_escape_string($con, $_POST['field2']);
						$degree[1] = mysqli_real_escape_string($con, $_POST['degree2']);
						break;
			case '3': 	$university[2] = mysqli_real_escape_string($con, $_POST['university3']);
						$field[2] = mysqli_real_escape_string($con, $_POST['field3']);
						$degree[2] = mysqli_real_escape_string($con, $_POST['degree3']);
						break;
			case '4': 	$university[3] = mysqli_real_escape_string($con, $_POST['university4']);
						$field[3] = mysqli_real_escape_string($con, $_POST['field4']);
						$degree[3] = mysqli_real_escape_string($con, $_POST['degree4']);
						break;
			case '5': 	$university[4] = mysqli_real_escape_string($con, $_POST['university5']);
						$field[4] = mysqli_real_escape_string($con, $_POST['field5']);
						$degree[4] = mysqli_real_escape_string($con, $_POST['degree5']);
						break;
			case '6': 	$university[5] = mysqli_real_escape_string($con, $_POST['university6']);
						$field[5] = mysqli_real_escape_string($con, $_POST['field6']);
						$degree[5] = mysqli_real_escape_string($con, $_POST['degree6']);
						break;
			case '7': 	$university[6] = mysqli_real_escape_string($con, $_POST['university7']);
						$field[6] = mysqli_real_escape_string($con, $_POST['field7']);
						$degree[6] = mysqli_real_escape_string($con, $_POST['degree7']);
						break;
			case '8': 	$university[7] = mysqli_real_escape_string($con, $_POST['university8']);
						$field[7] = mysqli_real_escape_string($con, $_POST['field8']);
						$degree[7] = mysqli_real_escape_string($con, $_POST['degree8']);
						break;
			case '9': 	$university[8] = mysqli_real_escape_string($con, $_POST['university9']);
						$field[8] = mysqli_real_escape_string($con, $_POST['field9']);
						$degree[8] = mysqli_real_escape_string($con, $_POST['degree9']);
						break;
			case '10': 	$university[9] = mysqli_real_escape_string($con, $_POST['university10']);
						$field[9] = mysqli_real_escape_string($con, $_POST['field10']);
						$degree[9] = mysqli_real_escape_string($con, $_POST['degree10']);
						break;
			default: break;
		}
		$Temp++;
	}
	$count = 0;
	$result = mysqli_query($con,"SELECT * FROM education WHERE staffID LIKE '$search'");
    while ($row = mysqli_fetch_array($result))
    {
    	$universitySearch[$count] = $row['university'];
    	$fieldSearch[$count] = $row['field'];
    	$degreeSearch[$count] = $row['degree'];
    	$count++;
    }
    $count = 0;
    while ($count < $j)
    {
    	$lalala = mysqli_query($con,"UPDATE education SET university ='".$university[$count]."',field ='".$field[$count]."',degree ='".$degree[$count]."' WHERE university LIKE '".$universitySearch[$count]."' AND field LIKE '".$fieldSearch[$count]."' AND degree LIKE '".$degreeSearch[$count]."' AND staffID LIKE'".$search."';");
		echo $universitySearch[$count].$fieldSearch[$count].$degreeSearch[$count]."<br>" ;
		echo $university[$count].$field[$count].$degree[$count]."<br>" ;
		$count++;
	}
// university recieve end

// staff information 
	$searchStaff = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$search'");
    while ($row = mysqli_fetch_array($searchStaff))
    {
    	$staffNameSearch = $row['staffName'];
    	$genderSearch = $row['gender'];
    	$startSearch = $row['startDate'];
    	$telNoSearch = $row['telNo'];
    	$addressSearch = $row['address'];
    }
    $updateStaff = mysqli_query($con,"UPDATE staff SET staffName = '$staffName', startDate ='$start', gender = '$gender', telNo = '$telNo', address = '$staffAddress', bankAccount = '$bankAccount',dateOfBirth ='$DOB' WHERE staffID LIKE '$search'");

// Update position
    if (strcasecmp($positionID, $positionIDForCheckUpdate))
    {
    	$updatePosition = mysqli_query($con,"UPDATE staff SET positionID ='$positionID' WHERE staffID LIKE '$search' ");
		$createPromotionHistory = mysqli_query($con,"INSERT INTO promotionhistory (staffID,positionID,date) VALUES ('$search','$positionID','$date')");
		$checkUpdate = 1;
		if (empty($updatePosition))
		{
			echo "Update position failed.";
		}
		if (empty($createPromotionHistory))
		{
			echo "Create promotionhistory's row failed.";
		}
	}
    else
    {
		$checkUpdate = 0;
    }
echo $checkUpdate;
if ($searchStaff)
{
	echo "<br>searchStaff pass";
}
if ($updateStaff)
{
	echo "<br>updateStaff pass";
}
mysqli_close($con);
if ($sql)
{
	if ($lalala)
	{
		header("Location:http://localhost/HRPJ/HRManager/StaffInfor-02.php");
	}
	else
	echo "education query error";
}
else
{
	echo "workinkhistory query error";
}
?>
