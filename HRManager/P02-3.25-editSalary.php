<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$search = mysqli_real_escape_string($con, $_POST['search']);
	$month = mysqli_real_escape_string($con, $_POST['month']);
	$year = mysqli_real_escape_string($con, $_POST['year']);
	$f = mysqli_real_escape_string($con, $_POST['f']);
	$newSalary = mysqli_real_escape_string($con, $_POST['newSalary']);
	
	if(f==0)
	{
		$sql="INSERT INTO increasesalaryrecord (staffID, salary, date, year) VALUES ('$search', '$newSalary', '$month', '$year')";
		if (!mysqli_query($con,$sql)) 
		{
			die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";
	}
	else
	{
		
		
		
	}

	









	mysqli_close($con);
?>