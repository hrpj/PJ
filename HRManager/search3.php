<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// escape variables for security
	$search = mysqli_real_escape_string($con, $_POST['search']);


	$result = mysqli_query($con,"SELECT staffID FROM staff WHERE staffId LIKE '$search'");
	$count=$result->num_rows;
	if ((empty($count)))
	{
		header("Location: http://localhost/HRPJ/HRManager/P03-1ERROR-search.php");
	}

	while ($row = mysqli_fetch_array($result))
	{
		echo $row['staffID'];
		$_SESSION["search"] = $row['staffID'];
		if ($result != False )
		{
			header("Location: http://localhost/HRPJ/HRManager/P03-2-PaymentSearch.php");
		}
		else
		{
			header("Location: http://localhost/HRPJ/HRManager/P03-1ERROR-search.php");
		}
	}

	mysqli_close($con);
?>
