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
// Company case
	$i2 = $i;
	while ($i2 > 0) 
	{
		switch ($i2) {
			case '1':	$company1 = mysqli_real_escape_string($con, $_POST['company1']);
						echo "$company1";
						break;
			case '2': 	$company2 = mysqli_real_escape_string($con, $_POST['company2']);
						echo "$company2";
						break;
			case '3': 	$company3 = mysqli_real_escape_string($con, $_POST['company3']);
						echo "$company3";
						break;
			case '4': 	$company4 = mysqli_real_escape_string($con, $_POST['company4']);
						echo "$company4";
						break;
			case '5': 	$company5 = mysqli_real_escape_string($con, $_POST['company5']);
						echo "$company5";
						break;
			case '6': 	$company6 = mysqli_real_escape_string($con, $_POST['company6']);
						echo "$company6";
						break;
			case '7': 	$company7 = mysqli_real_escape_string($con, $_POST['company7']);
						echo "$company7";
						break;
			case '8': 	$company8 = mysqli_real_escape_string($con, $_POST['company8']);
						echo "$company8";
						break;
			case '9': 	$company9 = mysqli_real_escape_string($con, $_POST['company9']);
						echo "$company9";
						break;
			case '10': 	$company10 = mysqli_real_escape_string($con, $_POST['company10']);
						echo "$company10";
						break;
			case '11': 	$company11 = mysqli_real_escape_string($con, $_POST['company11']);
						echo "$company11";
						break;
			case '12': 	$company12 = mysqli_real_escape_string($con, $_POST['company12']);
						echo "$company12";
						break;
			case '13': 	$company13 = mysqli_real_escape_string($con, $_POST['company13']);
						echo "$company13";
						break;
			case '14': 	$company14 = mysqli_real_escape_string($con, $_POST['company14']);
						echo "$company14";
						break;
			case '15': 	$company15 = mysqli_real_escape_string($con, $_POST['company15']);
						echo "$company15";
						break;
			case '16': 	$company16 = mysqli_real_escape_string($con, $_POST['company16']);
						echo "$company16";
						break;
			case '17': 	$company17 = mysqli_real_escape_string($con, $_POST['company17']);
						echo "$company17";
						break;
			case '18': 	$company18 = mysqli_real_escape_string($con, $_POST['company18']);
						echo "$company18";
						break;
			case '19': 	$company19 = mysqli_real_escape_string($con, $_POST['company19']);
						echo "$company19";
						break;
			case '20': 	$company20 = mysqli_real_escape_string($con, $_POST['company20']);
						echo "$company20";
						break;
			default: break;
		}
		$i2--;
	}
	$i2 = $i;
	while ($i2 > 0) 
	{
		switch ($i2) {
			case '1':	$startDate1 = mysqli_real_escape_string($con, $_POST['startDate1']);
						echo "$startDate1";
						break;
			case '2': 	$startDate2 = mysqli_real_escape_string($con, $_POST['startDate2']);
						echo "$startDate2";
						break;
			case '3': 	$startDate3 = mysqli_real_escape_string($con, $_POST['startDate3']);
						echo "$startDate3";
						break;
			case '4': 	$startDate4 = mysqli_real_escape_string($con, $_POST['startDate4']);
						echo "$startDate4";
						break;
			case '5': 	$startDate5 = mysqli_real_escape_string($con, $_POST['startDate5']);
						echo "$startDate5";
						break;
			case '6': 	$startDate6 = mysqli_real_escape_string($con, $_POST['startDate6']);
						echo "$startDate6";
						break;
			case '7': 	$startDate7 = mysqli_real_escape_string($con, $_POST['startDate7']);
						echo "$startDate7";
						break;
			case '8': 	$startDate8 = mysqli_real_escape_string($con, $_POST['startDate8']);
						echo "$startDate8";
						break;
			case '9': 	$startDate9 = mysqli_real_escape_string($con, $_POST['startDate9']);
						echo "$startDate9";
						break;
			case '10': 	$startDate10 = mysqli_real_escape_string($con, $_POST['startDate10']);
						echo "$startDate10";
						break;
			case '11': 	$startDate11 = mysqli_real_escape_string($con, $_POST['startDate11']);
						echo "$startDate11";
						break;
			case '12': 	$startDate12 = mysqli_real_escape_string($con, $_POST['startDate12']);
						echo "$startDate12";
						break;
			case '13': 	$startDate13 = mysqli_real_escape_string($con, $_POST['startDate13']);
						echo "$startDate13";
						break;
			case '14': 	$startDate14 = mysqli_real_escape_string($con, $_POST['startDate14']);
						echo "$startDate14";
						break;
			case '15': 	$startDate15 = mysqli_real_escape_string($con, $_POST['startDate15']);
						echo "$startDate15";
						break;
			case '16': 	$startDate16 = mysqli_real_escape_string($con, $_POST['startDate16']);
						echo "$startDate16";
						break;
			case '17': 	$startDate17 = mysqli_real_escape_string($con, $_POST['startDate17']);
						echo "$startDate17";
						break;
			case '18': 	$startDate18 = mysqli_real_escape_string($con, $_POST['startDate18']);
						echo "$startDate18";
						break;
			case '19': 	$startDate19 = mysqli_real_escape_string($con, $_POST['startDate19']);
						echo "$startDate19";
						break;
			case '20': 	$startDate20 = mysqli_real_escape_string($con, $_POST['startDate20']);
						echo "$startDate20";
						break;
			default: break;
		}
		$i2--;
	}
	$i2 = $i;
	while ($i2 > 0) 
	{
		switch ($i2) {
			case '1':	$endDate1 = mysqli_real_escape_string($con, $_POST['endDate1']);
						echo "$endDate1";
						break;
			case '2': 	$endDate2 = mysqli_real_escape_string($con, $_POST['endDate2']);
						echo "$endDate2";
						break;
			case '3': 	$endDate3 = mysqli_real_escape_string($con, $_POST['endDate3']);
						echo "$endDate3";
						break;
			case '4': 	$endDate4 = mysqli_real_escape_string($con, $_POST['endDate4']);
						echo "$endDate4";
						break;
			case '5': 	$endDate5 = mysqli_real_escape_string($con, $_POST['endDate5']);
						echo "$endDate5";
						break;
			case '6': 	$endDate6 = mysqli_real_escape_string($con, $_POST['endDate6']);
						echo "$endDate6";
						break;
			case '7': 	$endDate7 = mysqli_real_escape_string($con, $_POST['endDate7']);
						echo "$endDate7";
						break;
			case '8': 	$endDate8 = mysqli_real_escape_string($con, $_POST['endDate8']);
						echo "$endDate8";
						break;
			case '9': 	$endDate9 = mysqli_real_escape_string($con, $_POST['endDate9']);
						echo "$endDate9";
						break;
			case '10': 	$endDate10 = mysqli_real_escape_string($con, $_POST['endDate10']);
						echo "$endDate10";
						break;
			case '11': 	$endDate11 = mysqli_real_escape_string($con, $_POST['endDate11']);
						echo "$endDate11";
						break;
			case '12': 	$endDate12 = mysqli_real_escape_string($con, $_POST['endDate12']);
						echo "$endDate12";
						break;
			case '13': 	$endDate13 = mysqli_real_escape_string($con, $_POST['endDate13']);
						echo "$endDate13";
						break;
			case '14': 	$endDate14 = mysqli_real_escape_string($con, $_POST['endDate14']);
						echo "$endDate14";
						break;
			case '15': 	$endDate15 = mysqli_real_escape_string($con, $_POST['endDate15']);
						echo "$endDate15";
						break;
			case '16': 	$endDate16 = mysqli_real_escape_string($con, $_POST['endDate16']);
						echo "$endDate16";
						break;
			case '17': 	$endDate17 = mysqli_real_escape_string($con, $_POST['endDate17']);
						echo "$endDate17";
						break;
			case '18': 	$endDate18 = mysqli_real_escape_string($con, $_POST['endDate18']);
						echo "$endDate18";
						break;
			case '19': 	$endDate19 = mysqli_real_escape_string($con, $_POST['endDate19']);
						echo "$endDate19";
						break;
			case '20': 	$endDate20 = mysqli_real_escape_string($con, $_POST['endDate20']);
						echo "$endDate20";
						break;
			default: break;
		}
		$i2--;
	}
// company end
// university case
	$j2 = $j;
	while ($j2 > 0) 
	{
		switch ($j2) {
			case '1':	$university1 = mysqli_real_escape_string($con, $_POST['university1']);
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
			case '11': 	$university11 = mysqli_real_escape_string($con, $_POST['university11']);
						echo "$university11";
						break;
			case '12': 	$university12 = mysqli_real_escape_string($con, $_POST['university12']);
						echo "$university12";
						break;
			case '13': 	$university13 = mysqli_real_escape_string($con, $_POST['university13']);
						echo "$university13";
						break;
			case '14': 	$university14 = mysqli_real_escape_string($con, $_POST['university14']);
						echo "$university14";
						break;
			case '15': 	$university15 = mysqli_real_escape_string($con, $_POST['university15']);
						echo "$university15";
						break;
			case '16': 	$university16 = mysqli_real_escape_string($con, $_POST['university16']);
						echo "$university16";
						break;
			case '17': 	$university17 = mysqli_real_escape_string($con, $_POST['university17']);
						echo "$university17";
						break;
			case '18': 	$university18 = mysqli_real_escape_string($con, $_POST['university18']);
						echo "$university18";
						break;
			case '19': 	$university19 = mysqli_real_escape_string($con, $_POST['university19']);
						echo "$university19";
						break;
			case '20': 	$university20 = mysqli_real_escape_string($con, $_POST['university20']);
						echo "$university20";
						break;
			default: break;
		}
		$j2--;
	}
	$j2 = $j;
	while ($j2 > 0) 
	{
		switch ($j2) {
			case '1':	$field1 = mysqli_real_escape_string($con, $_POST['field1']);
						echo "$field1";
						break;
			case '2': 	$field2 = mysqli_real_escape_string($con, $_POST['field2']);
						echo "$field2";
						break;
			case '3': 	$field3 = mysqli_real_escape_string($con, $_POST['field3']);
						echo "$field3";
						break;
			case '4': 	$field4 = mysqli_real_escape_string($con, $_POST['field4']);
						echo "$field4";
						break;
			case '5': 	$field5 = mysqli_real_escape_string($con, $_POST['field5']);
						echo "$field5";
						break;
			case '6': 	$field6 = mysqli_real_escape_string($con, $_POST['field6']);
						echo "$field6";
						break;
			case '7': 	$field7 = mysqli_real_escape_string($con, $_POST['field7']);
						echo "$field7";
						break;
			case '8': 	$field8 = mysqli_real_escape_string($con, $_POST['field8']);
						echo "$field8";
						break;
			case '9': 	$field9 = mysqli_real_escape_string($con, $_POST['field9']);
						echo "$field9";
						break;
			case '10': 	$field10 = mysqli_real_escape_string($con, $_POST['field10']);
						echo "$field10";
						break;
			case '11': 	$field11 = mysqli_real_escape_string($con, $_POST['field11']);
						echo "$field11";
						break;
			case '12': 	$field12 = mysqli_real_escape_string($con, $_POST['field12']);
						echo "$field12";
						break;
			case '13': 	$field13 = mysqli_real_escape_string($con, $_POST['field13']);
						echo "$field13";
						break;
			case '14': 	$field14 = mysqli_real_escape_string($con, $_POST['field14']);
						echo "$field14";
						break;
			case '15': 	$field15 = mysqli_real_escape_string($con, $_POST['field15']);
						echo "$field15";
						break;
			case '16': 	$field16 = mysqli_real_escape_string($con, $_POST['field16']);
						echo "$field16";
						break;
			case '17': 	$field17 = mysqli_real_escape_string($con, $_POST['field17']);
						echo "$field17";
						break;
			case '18': 	$field18 = mysqli_real_escape_string($con, $_POST['field18']);
						echo "$field18";
						break;
			case '19': 	$field19 = mysqli_real_escape_string($con, $_POST['field19']);
						echo "$field19";
						break;
			case '20': 	$field20 = mysqli_real_escape_string($con, $_POST['field20']);
						echo "$field20";
						break;
			default: break;
		}
		$j2--;
	}
	$j2 = $j;
	while ($j2 > 0) 
	{
		switch ($j2) {
			case '1':	$degree1 = mysqli_real_escape_string($con, $_POST['degree1']);
						echo "$degree1";
						break;
			case '2': 	$degree2 = mysqli_real_escape_string($con, $_POST['degree2']);
						echo "$degree2";
						break;
			case '3': 	$degree3 = mysqli_real_escape_string($con, $_POST['degree3']);
						echo "$degree3";
						break;
			case '4': 	$degree4 = mysqli_real_escape_string($con, $_POST['degree4']);
						echo "$degree4";
						break;
			case '5': 	$degree5 = mysqli_real_escape_string($con, $_POST['degree5']);
						echo "$degree5";
						break;
			case '6': 	$degree6 = mysqli_real_escape_string($con, $_POST['degree6']);
						echo "$degree6";
						break;
			case '7': 	$degree7 = mysqli_real_escape_string($con, $_POST['degree7']);
						echo "$degree7";
						break;
			case '8': 	$degree8 = mysqli_real_escape_string($con, $_POST['degree8']);
						echo "$degree8";
						break;
			case '9': 	$degree9 = mysqli_real_escape_string($con, $_POST['degree9']);
						echo "$degree9";
						break;
			case '10': 	$degree10 = mysqli_real_escape_string($con, $_POST['degree10']);
						echo "$degree10";
						break;
			case '11': 	$degree11 = mysqli_real_escape_string($con, $_POST['degree11']);
						echo "$degree11";
						break;
			case '12': 	$degree12 = mysqli_real_escape_string($con, $_POST['degree12']);
						echo "$degree12";
						break;
			case '13': 	$degree13 = mysqli_real_escape_string($con, $_POST['degree13']);
						echo "$degree13";
						break;
			case '14': 	$degree14 = mysqli_real_escape_string($con, $_POST['degree14']);
						echo "$degree14";
						break;
			case '15': 	$degree15 = mysqli_real_escape_string($con, $_POST['degree15']);
						echo "$degree15";
						break;
			case '16': 	$degree16 = mysqli_real_escape_string($con, $_POST['degree16']);
						echo "$degree16";
						break;
			case '17': 	$degree17 = mysqli_real_escape_string($con, $_POST['degree17']);
						echo "$degree17";
						break;
			case '18': 	$degree18 = mysqli_real_escape_string($con, $_POST['degree18']);
						echo "$degree18";
						break;
			case '19': 	$degree19 = mysqli_real_escape_string($con, $_POST['degree19']);
						echo "$degree19";
						break;
			case '20': 	$degree20 = mysqli_real_escape_string($con, $_POST['degree20']);
						echo "$degree20";
						break;
			default: break;
		}
		$j2--;
	}
// university end

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