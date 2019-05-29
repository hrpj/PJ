<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$accomplishmentAdd = mysqli_real_escape_string($con, $_POST['accomplishmentAdd']);

//check if no input found
	if (empty($accomplishmentAdd))
	{
		echo("ERROR!!! : No data input found.");
		header( " refresh: 2; url=http://localhost/HRPJ/HRManager/CompetenceAddForHR.php?id=$id");
	}
	if (empty($id))
	{
		echo("ERROR!!! : No ID found.");
		header( " refresh: 2; url=http://localhost/HRPJ/HRManager/CompetenceAddForHR.php?id=$id");
	}

//Date process
	date_default_timezone_set("Asia/Bangkok");
	$date = date("Y-m-d");
	$explode = explode("-", $date);
	$year = $explode[0];
	$month = $explode[1];
	$day = $explode[2];
	$date = $month."-".$day;
	echo $year." ".$date."<br>".$id."  ".$accomplishmentAdd."<br>";

	$result = mysqli_query($con,"INSERT INTO competence (staffID,accomplishment,date,year) VALUES ('$id','$accomplishmentAdd','$date','$year'); ");

	if (empty($result))
		echo "ERROR!!! : No result returned.";
	else
		echo "Added successfully.";
	header("Location:http://localhost/HRPJ/HRManager/CompetenceAddForHR.php?id=$id");
?>