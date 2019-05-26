<?php 
session_start();
ob_start();
$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// escape variables
	$search = mysqli_real_escape_string($con, $_POST["search"]);
	$staffName = mysqli_real_escape_string($con, $_POST["staffName"]);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$start = mysqli_real_escape_string($con, $_POST['start']);
	$mobilePhoneNo = mysqli_real_escape_string($con, $_POST['mobilePhoneNo']);
	$staffAddress = mysqli_real_escape_string($con, $_POST['staffAddress']);
	$i = mysqli_real_escape_string($con, $_POST['i']);
	$j = mysqli_real_escape_string($con, $_POST['j']);

$check = 0;
// Company start
    $Temp = 1;
	while ($Temp <= $i)
	{
		switch ($Temp) {
			case '1':	$company[0] = mysqli_real_escape_string($con, $_POST['company1']);
						$startDate[0] = mysqli_real_escape_string($con, $_POST['startDate1']);
						$endDate[0] = mysqli_real_escape_string($con, $_POST['endDate1']);
						echo $company[0]." ".$startDate[0]." ".$endDate[0];
						break;
			case '2': 	$company[1] = mysqli_real_escape_string($con, $_POST['company2']);
						$startDate[1] = mysqli_real_escape_string($con, $_POST['startDate2']);
						$endDate[1] = mysqli_real_escape_string($con, $_POST['endDate2']);
						echo $company[1]." ".$startDate[1]." ".$endDate[1];
						break;
			case '3': 	$company[2] = mysqli_real_escape_string($con, $_POST['company3']);
						$startDate[2] = mysqli_real_escape_string($con, $_POST['startDate3']);
						$endDate[2] = mysqli_real_escape_string($con, $_POST['endDate3']);
						echo $company[2]." ".$startDate[2]." ".$endDate[2];
						break;
			case '4': 	$company[3] = mysqli_real_escape_string($con, $_POST['company4']);
						$startDate[3] = mysqli_real_escape_string($con, $_POST['startDate4']);
						$endDate[3] = mysqli_real_escape_string($con, $_POST['endDate4']);
						echo $company[3]." ".$startDate[3]." ".$endDate[3];
						break;
			case '5': 	$company[4] = mysqli_real_escape_string($con, $_POST['company5']);
						$startDate[4] = mysqli_real_escape_string($con, $_POST['startDate5']);
						$endDate[4] = mysqli_real_escape_string($con, $_POST['endDate5']);
						echo $company[4]." ".$startDate[4]." ".$endDate[4];
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
    	$companySearch = $row['company'];
    	$startSearch = $row['startDate'];
    	$endSearch = $row['endDate'];
    	mysqli_query($con,"UPDATE workinghistory SET company ='$company[$count]',startDate ='$startDate[$count]',endDate ='$endDate[$count]' WHERE company LIKE '$companySearch',startDate ='$startSearch',endDate ='$endSearch'");
    	$count++;
    	if ($Temp == $count) 
    	{
    		$check = 1;
    	}
    }
// company end
// university recieve case
	$Temp = $j;
	while ($Temp > 0) 
	{
		switch ($Temp) {
			case '1':	$university1 = mysqli_real_escape_string($con, $_POST['university1']);
						$field1 = mysqli_real_escape_string($con, $_POST['field1']);
						$degree1 = mysqli_real_escape_string($con, $_POST['degree1']);
						echo "$university1";
						break;
			case '2': 	$university2 = mysqli_real_escape_string($con, $_POST['university2']);
						echo "$university2";
						break;
			case '3': 	$university3 = mysqli_real_escape_string($con, $_POST['university3']);
						echo "$university3";
						break;
			case '4': 	$university4 = mysqli_real_escape_string($con, $_POST['university4']);
						echo "$university4";
						break;
			case '5': 	$university5 = mysqli_real_escape_string($con, $_POST['university5']);
						echo "$university5";
						break;
			case '6': 	$university6 = mysqli_real_escape_string($con, $_POST['university6']);
						echo "$university6";
						break;
			case '7': 	$university7 = mysqli_real_escape_string($con, $_POST['university7']);
						echo "$university7";
						break;
			case '8': 	$university8 = mysqli_real_escape_string($con, $_POST['university8']);
						echo "$university8";
						break;
			case '9': 	$university9 = mysqli_real_escape_string($con, $_POST['university9']);
						echo "$university9";
						break;
			case '10': 	$university10 = mysqli_real_escape_string($con, $_POST['university10']);
						echo "$university10";
						break;
			default: break;
		}
		$Temp--;
	}
// university recieve end
	//header("Location: http://localhost/HRPJ/HR/StaffInforEdit-03.php");
	mysqli_close($con);
if (check) 
{
header("Location: http://localhost/HRPJ/HR/StaffInforEdit-03.php");
}
//header("Location: http://localhost/HRPJ/HR/StaffInforEdit-03.php");
?>