<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$j = mysqli_real_escape_string($con, $_POST['j']);
	$id = mysqli_real_escape_string($con, $_POST['id']);
			switch ($j) {
				case '1':	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete1']);
							break;
				case '2': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete2']);
							break;
				case '3': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete3']);
							break;
				case '4': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete4']);
							break;
				case '5': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete5']);
							break;
				case '6': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete6']);
							break;
				case '7': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete7']);
							break;
				case '8': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete8']);
							break;
				case '9': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete9']);
							break;
				case '10': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete10']);
							break;
				case '11':	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete11']);
							break;
				case '12': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete12']);
							break;
				case '13': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete13']);
							break;
				case '14': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete14']);
							break;
				case '15': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete15']);
							break;
				case '16': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete16']);
							break;
				case '17': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete17']);
							break;
				case '18': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete18']);
							break;
				case '19': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete19']);
							break;
				case '20': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete20']);
							break;
				case '21':	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete21']);
							break;
				case '22': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete22']);
							break;
				case '23': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete23']);
							break;
				case '24': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete24']);
							break;
				case '25': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete25']);
							break;
				case '26': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete26']);
							break;
				case '27': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete27']);
							break;
				case '28': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete28']);
							break;
				case '29': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete29']);
							break;
				case '30': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete30']);
							break;
				case '31':	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete31']);
							break;
				case '32': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete32']);
							break;
				case '33': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete33']);
							break;
				case '34': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete34']);
							break;
				case '35': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete35']);
							break;
				case '36': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete36']);
							break;
				case '37': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete37']);
							break;
				case '38': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete38']);
							break;
				case '39': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete39']);
							break;
				case '40': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete40']);
							break;
				case '41':	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete41']);
							break;
				case '42': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete42']);
							break;
				case '43': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete43']);
							break;
				case '44': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete44']);
							break;
				case '45': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete45']);
							break;
				case '46': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete46']);
							break;
				case '47': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete47']);
							break;
				case '48': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete48']);
							break;
				case '49': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete49']);
							break;
				case '50': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete50']);
							break;
				case '51':	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete51']);
							break;
				case '52': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete52']);
							break;
				case '53': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete53']);
							break;
				case '54': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete54']);
							break;
				case '55': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete55']);
							break;
				case '56': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete56']);
							break;
				case '57': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete57']);
							break;
				case '58': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete58']);
							break;
				case '59': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete59']);
							break;
				case '60': 	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete60']);
							break;
				default: break;
			}

//check if no input found
	if (empty($concernDelete))
	{
		echo("ERROR!!! : No data input found.");
	}
	if (empty($id))
	{
		echo("ERROR!!! : No ID found.");
	}

//sql code for delete
	$result = mysqli_query($con,"DELETE FROM concern WHERE staffID LIKE '$id' AND concernBehavior LIKE '$concernDelete';");

	if (empty($result))
		echo "ERROR!!! : No result returned.";
	else
		echo "Deleted successfully.";
	header("Location:http://localhost/HRPJ/HRManager/CompetenceEditForHR.php?id=$id");
?>