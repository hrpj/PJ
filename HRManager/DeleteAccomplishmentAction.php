<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$i = mysqli_real_escape_string($con, $_POST['i']);
	$id = mysqli_real_escape_string($con, $_POST['id']);
			switch ($i) {
				case '1':	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete1']);
							break;
				case '2': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete2']);
							break;
				case '3': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete3']);
							break;
				case '4': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete4']);
							break;
				case '5': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete5']);
							break;
				case '6': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete6']);
							break;
				case '7': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete7']);
							break;
				case '8': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete8']);
							break;
				case '9': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete9']);
							break;
				case '10': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete10']);
							break;
				case '11':	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete11']);
							break;
				case '12': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete12']);
							break;
				case '13': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete13']);
							break;
				case '14': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete14']);
							break;
				case '15': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete15']);
							break;
				case '16': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete16']);
							break;
				case '17': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete17']);
							break;
				case '18': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete18']);
							break;
				case '19': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete19']);
							break;
				case '20': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete20']);
							break;
				case '21':	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete21']);
							break;
				case '22': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete22']);
							break;
				case '23': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete23']);
							break;
				case '24': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete24']);
							break;
				case '25': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete25']);
							break;
				case '26': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete26']);
							break;
				case '27': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete27']);
							break;
				case '28': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete28']);
							break;
				case '29': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete29']);
							break;
				case '30': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete30']);
							break;
				case '31':	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete31']);
							break;
				case '32': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete32']);
							break;
				case '33': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete33']);
							break;
				case '34': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete34']);
							break;
				case '35': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete35']);
							break;
				case '36': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete36']);
							break;
				case '37': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete37']);
							break;
				case '38': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete38']);
							break;
				case '39': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete39']);
							break;
				case '40': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete40']);
							break;
				case '41':	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete41']);
							break;
				case '42': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete42']);
							break;
				case '43': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete43']);
							break;
				case '44': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete44']);
							break;
				case '45': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete45']);
							break;
				case '46': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete46']);
							break;
				case '47': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete47']);
							break;
				case '48': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete48']);
							break;
				case '49': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete49']);
							break;
				case '50': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete50']);
							break;
				case '51':	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete51']);
							break;
				case '52': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete52']);
							break;
				case '53': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete53']);
							break;
				case '54': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete54']);
							break;
				case '55': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete55']);
							break;
				case '56': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete56']);
							break;
				case '57': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete57']);
							break;
				case '58': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete58']);
							break;
				case '59': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete59']);
							break;
				case '60': 	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete60']);
							break;
				default: break;
			}

//check if no input found
	if (empty($accomplishmentDelete))
	{
		echo("ERROR!!! : No data input found.");
	}
	if (empty($id))
	{
		echo("ERROR!!! : No ID found.");
	}
	
//mysql code to delete
	$result = mysqli_query($con,"DELETE FROM competence WHERE staffID LIKE '$id' AND accomplishment LIKE '".$accomplishmentDelete."'; ");

	if (empty($result))
		echo "ERROR!!! : No result returned.";
	else
		echo "Deleted successfully.";
	header("Location:http://localhost/HRPJ/HRManager/CompetenceEditForHR.php?id=$id");
?>