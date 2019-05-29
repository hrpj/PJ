<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$courseID = $_SESSION['courseID'];
	$trainingTopic = mysqli_real_escape_string($con, $_POST['trainingTopic']);
	
	if(empty($courseID) || empty($trainingTopic))
	{
		header("Location: http://localhost/HRPJ/HRManager/T03-1ERROR-Edittraining.php");
	}
	
	mysqli_query($con,"UPDATE trainingcourse SET courseName='$trainingTopic' WHERE courseID LIKE '$courseID' ");

	echo "edit complete!!";
	unset ($_SESSION["courseID"]);	
	mysqli_close($con);
	header("Refresh:1.5 ; url=http://localhost/HRPJ/HRManager/T03-1-Edittraining.php");
?>
	
	
	
