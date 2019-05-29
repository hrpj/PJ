<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$accomplishmentDelete = mysqli_real_escape_string($con, $_POST['accomplishmentDelete']);

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
	$result = mysqli_query($con,"DELETE FROM competence WHERE staffID LIKE '$id' AND accomplishment LIKE '$accomplishmentDelete'; ");

	if (empty($result))
		echo "ERROR!!! : No result returned.";
	else
		echo "Deleted successfully.";
	header("Location:http://localhost/HRPJ/HRManager/CompetenceEditForHR.php?id=$id");
?>