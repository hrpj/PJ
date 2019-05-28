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
	$j = mysqli_real_escape_string($con, $_POST['j']);


	if (!$j)
		$university=1;

	while ($j <= $j)
	{
		switch ($Temp) {
			case '1':	$university = mysqli_real_escape_string($con, $_POST['university1']);
						$field = mysqli_real_escape_string($con, $_POST['field1']);
						$degree = mysqli_real_escape_string($con, $_POST['degree1']);
						break;
			case '2': 	$university = mysqli_real_escape_string($con, $_POST['university2']);
						$field = mysqli_real_escape_string($con, $_POST['field2']);
						$degree = mysqli_real_escape_string($con, $_POST['degree2']);
						break;
			case '3': 	$university = mysqli_real_escape_string($con, $_POST['university3']);
						$field = mysqli_real_escape_string($con, $_POST['field3']);
						$degree = mysqli_real_escape_string($con, $_POST['degree3']);
						break;
			case '4': 	$university = mysqli_real_escape_string($con, $_POST['university4']);
						$field = mysqli_real_escape_string($con, $_POST['field4']);
						$degree = mysqli_real_escape_string($con, $_POST['degree4']);
						break;
			case '5': 	$university = mysqli_real_escape_string($con, $_POST['university5']);
						$field = mysqli_real_escape_string($con, $_POST['field5']);
						$degree = mysqli_real_escape_string($con, $_POST['degree5']);
						break;
			case '6': 	$university = mysqli_real_escape_string($con, $_POST['university6']);
						$field = mysqli_real_escape_string($con, $_POST['field6']);
						$degree = mysqli_real_escape_string($con, $_POST['degree6']);
						break;
			case '7': 	$university = mysqli_real_escape_string($con, $_POST['university7']);
						$field = mysqli_real_escape_string($con, $_POST['field7']);
						$degree = mysqli_real_escape_string($con, $_POST['degree7']);
						break;
			case '8': 	$university = mysqli_real_escape_string($con, $_POST['university8']);
						$field = mysqli_real_escape_string($con, $_POST['field8']);
						$degree = mysqli_real_escape_string($con, $_POST['degree8']);
						break;
			case '9': 	$university = mysqli_real_escape_string($con, $_POST['university9']);
						$field = mysqli_real_escape_string($con, $_POST['field9']);
						$degree = mysqli_real_escape_string($con, $_POST['degree9']);
						break;
			case '10': 	$university = mysqli_real_escape_string($con, $_POST['university10']);
						$field = mysqli_real_escape_string($con, $_POST['field10']);
						$degree = mysqli_real_escape_string($con, $_POST['degree10']);
						break;
			default: break;
		}

	$delete = mysqli_query($con,"DELETE FROM education WHERE staffID LIKE '".$search."' AND university LIKE '".$university."' AND field LIKE '".$field."' AND degree LIKE '".$degree."';");

	if ($university)
	{
		echo "Yeah!!";
		if ($delete)
		{
			echo "Deleted!!";
			header("Location:http://localhost/HRPJ/HRManager/StaffInfor-02.php");
		}
		else
			echo "sql delete error";
	}
	else
		echo "sql company error";

mysqli_close($con);
?>