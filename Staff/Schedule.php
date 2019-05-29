<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Training Course Schedule</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="styleschedule.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">

    <!-- Nav Bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<font color="#FFFFFF" size="5"> <i class="far fa-building"></i></font>
		<a class="navbar-brand" href="http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php">&nbsp;ILoveDB Company</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php">Page <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown active ">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Information
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/Staff/InforMeStaff.php">Only Me</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/Staff/Schedule.php">Training Course</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/Staff/TimeManageFindForStaff.php">Time Attendance</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/Staff/P01-1-PaymentSearchForStaff.php">Payment Slip</a>
				</li>
			</ul>
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/WelcomeSignin.html">Sign out</a>
				</li>
			</ul>
		</div>
	</nav>
</head>


<body>
    <br>
    <h2>&nbsp;&nbsp;&nbsp;Training Courses Schedule </h2>
    <!-- Table -->
    <table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Date</th>
				<th scope="col">Course ID</th>
				<th scope="col">Topic</th>
				<th scope="col">Location</th>
				<th scope="col">In charge person</th>
			</tr>
		</thead>
<?php
	date_default_timezone_set("Asia/Bangkok");
	$date = date("Y-m-d");

	$result = mysqli_query($con,"SELECT * FROM trainingschedule WHERE startDate >= '$date'");
	while ($row = mysqli_fetch_array($result))
	{
		$courseID = $row['courseID'];
		$place = $row['place'];
		$inChargePerson = $row['inChargePerson'];
		$startDate = $row['startDate'];
		$endDate = $row['endDate'];
		$scDate = $startDate.' - '.$endDate;
		
		$result2 = mysqli_query($con,"SELECT * FROM trainingcourse WHERE courseID LIKE '$courseID'");
		while ($row2 = mysqli_fetch_array($result2))
		{
			$courseName = $row2['courseName'];
			
		}
		echo "<tbody>
				<tr>
				<td>".$scDate."</td>
				<td>".$courseID."</td>
				<td>".$courseName."</td>
				<td>".$place."</td>
				<td>".$inChargePerson."</td>
				</tr>
			</tbody>";
	}
?>
    </table>
	
    <!-- End Table -->
    <table class="Back">
		<tr>
		<td>
			<button type="button" class="btn btn-dark" onclick="window.location.href = 'http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php';">Back</button>
		</td>
		</tr>
    </table>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
