<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$concernDelete = mysqli_real_escape_string($con, $_POST['concernDelete']);

//check if no input found
	if (empty($concernDelete))
	{
		echo("ERROR!!! : No data input found.");
	}
	if (empty($id))
	{
		echo("ERROR!!! : No ID found.");
	}

	$result = mysqli_query($con,"DELETE FROM concern WHERE staffID LIKE '$id' AND concernBehavor LIKE '$concernDelete';");

	if (empty($result))
		echo "ERROR!!! : No result returned.";
	else
		echo "Deleted successfully.";
	header("Location:http://localhost/HRPJ/HRManager/CompetenceEditForHR.php?id=$id");
?>