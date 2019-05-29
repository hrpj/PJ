<?php
session_start();
$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
//escape variables
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$i = mysqli_real_escape_string($con, $_POST['i']);
	$j = mysqli_real_escape_string($con, $_POST['j']);

//Prevent Null value input
	if (!$i)
		$sql=1;
	if (!$j)
		$lalala=1;

//accomplishment
	$Temp = 1;
		while ($Temp <= $i)
		{
			switch ($Temp) {
				case '1':	$accomplishment[0] = mysqli_real_escape_string($con, $_POST['accomplishment1']);
							break;
				case '2': 	$accomplishment[1] = mysqli_real_escape_string($con, $_POST['accomplishment2']);
							break;
				case '3': 	$accomplishment[2] = mysqli_real_escape_string($con, $_POST['accomplishment3']);
							break;
				case '4': 	$accomplishment[3] = mysqli_real_escape_string($con, $_POST['accomplishment4']);
							break;
				case '5': 	$accomplishment[4] = mysqli_real_escape_string($con, $_POST['accomplishment5']);
							break;
				case '6': 	$accomplishment[5] = mysqli_real_escape_string($con, $_POST['accomplishment6']);
							break;
				case '7': 	$accomplishment[6] = mysqli_real_escape_string($con, $_POST['accomplishment7']);
							break;
				case '8': 	$accomplishment[7] = mysqli_real_escape_string($con, $_POST['accomplishment8']);
							break;
				case '9': 	$accomplishment[8] = mysqli_real_escape_string($con, $_POST['accomplishment9']);
							break;
				case '10': 	$accomplishment[9] = mysqli_real_escape_string($con, $_POST['accomplishment10']);
							break;
				case '11':	$accomplishment[10] = mysqli_real_escape_string($con, $_POST['accomplishment11']);
							break;
				case '12': 	$accomplishment[11] = mysqli_real_escape_string($con, $_POST['accomplishment12']);
							break;
				case '13': 	$accomplishment[12] = mysqli_real_escape_string($con, $_POST['accomplishment13']);
							break;
				case '14': 	$accomplishment[13] = mysqli_real_escape_string($con, $_POST['accomplishment14']);
							break;
				case '15': 	$accomplishment[14] = mysqli_real_escape_string($con, $_POST['accomplishment15']);
							break;
				case '16': 	$accomplishment[15] = mysqli_real_escape_string($con, $_POST['accomplishment16']);
							break;
				case '17': 	$accomplishment[16] = mysqli_real_escape_string($con, $_POST['accomplishment17']);
							break;
				case '18': 	$accomplishment[17] = mysqli_real_escape_string($con, $_POST['accomplishment18']);
							break;
				case '19': 	$accomplishment[18] = mysqli_real_escape_string($con, $_POST['accomplishment19']);
							break;
				case '20': 	$accomplishment[19] = mysqli_real_escape_string($con, $_POST['accomplishment20']);
							break;
				case '21':	$accomplishment[20] = mysqli_real_escape_string($con, $_POST['accomplishment21']);
							break;
				case '22': 	$accomplishment[21] = mysqli_real_escape_string($con, $_POST['accomplishment22']);
							break;
				case '23': 	$accomplishment[22] = mysqli_real_escape_string($con, $_POST['accomplishment23']);
							break;
				case '24': 	$accomplishment[23] = mysqli_real_escape_string($con, $_POST['accomplishment24']);
							break;
				case '25': 	$accomplishment[24] = mysqli_real_escape_string($con, $_POST['accomplishment25']);
							break;
				case '26': 	$accomplishment[25] = mysqli_real_escape_string($con, $_POST['accomplishment26']);
							break;
				case '27': 	$accomplishment[26] = mysqli_real_escape_string($con, $_POST['accomplishment27']);
							break;
				case '28': 	$accomplishment[27] = mysqli_real_escape_string($con, $_POST['accomplishment28']);
							break;
				case '29': 	$accomplishment[28] = mysqli_real_escape_string($con, $_POST['accomplishment29']);
							break;
				case '30': 	$accomplishment[29] = mysqli_real_escape_string($con, $_POST['accomplishment30']);
							break;
				case '31':	$accomplishment[30] = mysqli_real_escape_string($con, $_POST['accomplishment31']);
							break;
				case '32': 	$accomplishment[31] = mysqli_real_escape_string($con, $_POST['accomplishment32']);
							break;
				case '33': 	$accomplishment[32] = mysqli_real_escape_string($con, $_POST['accomplishment33']);
							break;
				case '34': 	$accomplishment[33] = mysqli_real_escape_string($con, $_POST['accomplishment34']);
							break;
				case '35': 	$accomplishment[34] = mysqli_real_escape_string($con, $_POST['accomplishment35']);
							break;
				case '36': 	$accomplishment[35] = mysqli_real_escape_string($con, $_POST['accomplishment36']);
							break;
				case '37': 	$accomplishment[36] = mysqli_real_escape_string($con, $_POST['accomplishment37']);
							break;
				case '38': 	$accomplishment[37] = mysqli_real_escape_string($con, $_POST['accomplishment38']);
							break;
				case '39': 	$accomplishment[38] = mysqli_real_escape_string($con, $_POST['accomplishment39']);
							break;
				case '40': 	$accomplishment[39] = mysqli_real_escape_string($con, $_POST['accomplishment40']);
							break;
				case '41':	$accomplishment[40] = mysqli_real_escape_string($con, $_POST['accomplishment41']);
							break;
				case '42': 	$accomplishment[41] = mysqli_real_escape_string($con, $_POST['accomplishment42']);
							break;
				case '43': 	$accomplishment[42] = mysqli_real_escape_string($con, $_POST['accomplishment43']);
							break;
				case '44': 	$accomplishment[43] = mysqli_real_escape_string($con, $_POST['accomplishment44']);
							break;
				case '45': 	$accomplishment[44] = mysqli_real_escape_string($con, $_POST['accomplishment45']);
							break;
				case '46': 	$accomplishment[45] = mysqli_real_escape_string($con, $_POST['accomplishment46']);
							break;
				case '47': 	$accomplishment[46] = mysqli_real_escape_string($con, $_POST['accomplishment47']);
							break;
				case '48': 	$accomplishment[47] = mysqli_real_escape_string($con, $_POST['accomplishment48']);
							break;
				case '49': 	$accomplishment[48] = mysqli_real_escape_string($con, $_POST['accomplishment49']);
							break;
				case '50': 	$accomplishment[49] = mysqli_real_escape_string($con, $_POST['accomplishment50']);
							break;
				case '51':	$accomplishment[50] = mysqli_real_escape_string($con, $_POST['accomplishment51']);
							break;
				case '52': 	$accomplishment[51] = mysqli_real_escape_string($con, $_POST['accomplishment52']);
							break;
				case '53': 	$accomplishment[52] = mysqli_real_escape_string($con, $_POST['accomplishment53']);
							break;
				case '54': 	$accomplishment[53] = mysqli_real_escape_string($con, $_POST['accomplishment54']);
							break;
				case '55': 	$accomplishment[54] = mysqli_real_escape_string($con, $_POST['accomplishment55']);
							break;
				case '56': 	$accomplishment[55] = mysqli_real_escape_string($con, $_POST['accomplishment56']);
							break;
				case '57': 	$accomplishment[56] = mysqli_real_escape_string($con, $_POST['accomplishment57']);
							break;
				case '58': 	$accomplishment[57] = mysqli_real_escape_string($con, $_POST['accomplishment58']);
							break;
				case '59': 	$accomplishment[58] = mysqli_real_escape_string($con, $_POST['accomplishment59']);
							break;
				case '60': 	$accomplishment[59] = mysqli_real_escape_string($con, $_POST['accomplishment60']);
							break;
				default: break;
			}
			$Temp++;
		}
	$count = 0;
	$result = mysqli_query($con,"SELECT * FROM competence WHERE staffID LIKE '$id'");
    while ($row = mysqli_fetch_array($result))
    {
    	$accomplishmentSearch[$count] = $row['accomplishment'];
    	$count++;
    }
    $count = 0;
    while ($count < $i)
    {
    	$sql = mysqli_query($con,"UPDATE competence SET accomplishment ='".$accomplishment[$count]."' WHERE staffID LIKE'".$id."' AND accomplishment LIKE '".$accomplishmentSearch[$count]."' ;");
    	echo $accomplishmentSearch[$count]."<br>" ;
		echo $accomplishment[$count]."<br>" ;
		$count++;
	}



//concern
	$Temp = 1;
		while ($Temp <= $j)
		{
			switch ($Temp) {
				case '1':	$concern[0] = mysqli_real_escape_string($con, $_POST['concern1']);
							break;
				case '2': 	$concern[1] = mysqli_real_escape_string($con, $_POST['concern2']);
							break;
				case '3': 	$concern[2] = mysqli_real_escape_string($con, $_POST['concern3']);
							break;
				case '4': 	$concern[3] = mysqli_real_escape_string($con, $_POST['concern4']);
							break;
				case '5': 	$concern[4] = mysqli_real_escape_string($con, $_POST['concern5']);
							break;
				case '6': 	$concern[5] = mysqli_real_escape_string($con, $_POST['concern6']);
							break;
				case '7': 	$concern[6] = mysqli_real_escape_string($con, $_POST['concern7']);
							break;
				case '8': 	$concern[7] = mysqli_real_escape_string($con, $_POST['concern8']);
							break;
				case '9': 	$concern[8] = mysqli_real_escape_string($con, $_POST['concern9']);
							break;
				case '10': 	$concern[9] = mysqli_real_escape_string($con, $_POST['concern10']);
							break;
				case '11':	$concern[10] = mysqli_real_escape_string($con, $_POST['concern11']);
							break;
				case '12': 	$concern[11] = mysqli_real_escape_string($con, $_POST['concern12']);
							break;
				case '13': 	$concern[12] = mysqli_real_escape_string($con, $_POST['concern13']);
							break;
				case '14': 	$concern[13] = mysqli_real_escape_string($con, $_POST['concern14']);
							break;
				case '15': 	$concern[14] = mysqli_real_escape_string($con, $_POST['concern15']);
							break;
				case '16': 	$concern[15] = mysqli_real_escape_string($con, $_POST['concern16']);
							break;
				case '17': 	$concern[16] = mysqli_real_escape_string($con, $_POST['concern17']);
							break;
				case '18': 	$concern[17] = mysqli_real_escape_string($con, $_POST['concern18']);
							break;
				case '19': 	$concern[18] = mysqli_real_escape_string($con, $_POST['concern19']);
							break;
				case '20': 	$concern[19] = mysqli_real_escape_string($con, $_POST['concern20']);
							break;
				case '21':	$concern[20] = mysqli_real_escape_string($con, $_POST['concern21']);
							break;
				case '22': 	$concern[21] = mysqli_real_escape_string($con, $_POST['concern22']);
							break;
				case '23': 	$concern[22] = mysqli_real_escape_string($con, $_POST['concern23']);
							break;
				case '24': 	$concern[23] = mysqli_real_escape_string($con, $_POST['concern24']);
							break;
				case '25': 	$concern[24] = mysqli_real_escape_string($con, $_POST['concern25']);
							break;
				case '26': 	$concern[25] = mysqli_real_escape_string($con, $_POST['concern26']);
							break;
				case '27': 	$concern[26] = mysqli_real_escape_string($con, $_POST['concern27']);
							break;
				case '28': 	$concern[27] = mysqli_real_escape_string($con, $_POST['concern28']);
							break;
				case '29': 	$concern[28] = mysqli_real_escape_string($con, $_POST['concern29']);
							break;
				case '30': 	$concern[29] = mysqli_real_escape_string($con, $_POST['concern30']);
							break;
				case '31':	$concern[30] = mysqli_real_escape_string($con, $_POST['concern31']);
							break;
				case '32': 	$concern[31] = mysqli_real_escape_string($con, $_POST['concern32']);
							break;
				case '33': 	$concern[32] = mysqli_real_escape_string($con, $_POST['concern33']);
							break;
				case '34': 	$concern[33] = mysqli_real_escape_string($con, $_POST['concern34']);
							break;
				case '35': 	$concern[34] = mysqli_real_escape_string($con, $_POST['concern35']);
							break;
				case '36': 	$concern[35] = mysqli_real_escape_string($con, $_POST['concern36']);
							break;
				case '37': 	$concern[36] = mysqli_real_escape_string($con, $_POST['concern37']);
							break;
				case '38': 	$concern[37] = mysqli_real_escape_string($con, $_POST['concern38']);
							break;
				case '39': 	$concern[38] = mysqli_real_escape_string($con, $_POST['concern39']);
							break;
				case '40': 	$concern[39] = mysqli_real_escape_string($con, $_POST['concern40']);
							break;
				case '41':	$concern[40] = mysqli_real_escape_string($con, $_POST['concern41']);
							break;
				case '42': 	$concern[41] = mysqli_real_escape_string($con, $_POST['concern42']);
							break;
				case '43': 	$concern[42] = mysqli_real_escape_string($con, $_POST['concern43']);
							break;
				case '44': 	$concern[43] = mysqli_real_escape_string($con, $_POST['concern44']);
							break;
				case '45': 	$concern[44] = mysqli_real_escape_string($con, $_POST['concern45']);
							break;
				case '46': 	$concern[45] = mysqli_real_escape_string($con, $_POST['concern46']);
							break;
				case '47': 	$concern[46] = mysqli_real_escape_string($con, $_POST['concern47']);
							break;
				case '48': 	$concern[47] = mysqli_real_escape_string($con, $_POST['concern48']);
							break;
				case '49': 	$concern[48] = mysqli_real_escape_string($con, $_POST['concern49']);
							break;
				case '50': 	$concern[49] = mysqli_real_escape_string($con, $_POST['concern50']);
							break;
				case '51':	$concern[50] = mysqli_real_escape_string($con, $_POST['concern51']);
							break;
				case '52': 	$concern[51] = mysqli_real_escape_string($con, $_POST['concern52']);
							break;
				case '53': 	$concern[52] = mysqli_real_escape_string($con, $_POST['concern53']);
							break;
				case '54': 	$concern[53] = mysqli_real_escape_string($con, $_POST['concern54']);
							break;
				case '55': 	$concern[54] = mysqli_real_escape_string($con, $_POST['concern55']);
							break;
				case '56': 	$concern[55] = mysqli_real_escape_string($con, $_POST['concern56']);
							break;
				case '57': 	$concern[56] = mysqli_real_escape_string($con, $_POST['concern57']);
							break;
				case '58': 	$concern[57] = mysqli_real_escape_string($con, $_POST['concern58']);
							break;
				case '59': 	$concern[58] = mysqli_real_escape_string($con, $_POST['concern59']);
							break;
				case '60': 	$concern[59] = mysqli_real_escape_string($con, $_POST['concern60']);
							break;
				default: break;
			}
			$Temp++;
		}
	$count = 0;
	$result2 = mysqli_query($con,"SELECT * FROM concern WHERE staffID LIKE '$id'");
    while ($row2 = mysqli_fetch_array($result2))
    {
    	$concernSearch[$count] = $row2['concernBehavior'];
    	$count++;
    }
    $count = 0;
    while ($count < $j)
    {
    	$sql2 = mysqli_query($con,"UPDATE concern SET concernBehavior ='".$concern[$count]."' WHERE staffID LIKE '$id' AND concernBehavior LIKE '".$concernSearch[$count]."' ;");
    	echo $concernSearch[$count]."<br>" ;
		echo $concern[$count]."<br>" ;
		$count++;
	}

// check
	mysqli_close($con);
	if ($sql)
	{
		if ($sql2)
		{
			header("Location:http://localhost/HRPJ/HRManager/CompetenceEditForHR.php?id=$id");
		}
		else
		echo "concern query error";
	}
	else
	{
		echo "competence query error";
	}
?>