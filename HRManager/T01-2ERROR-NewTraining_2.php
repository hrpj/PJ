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
    <title>Required Position</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="styletraining2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">

    <!-- Nav Bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<font color="#FFFFFF" size="5"> <i class="far fa-building"></i></font>
		<a class="navbar-brand" href="http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php">&nbsp;ILoveDB Company</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php">Page <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Information
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/InforMeHR.php">Only Me</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/SearchInforStaff-01.php">Any Staffs</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/InforBranch.php">Branch</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Schedule.php">Training Course</a>
					</div>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Time Attendance
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/TimeAttendanceSearchForHR-01.php">Daily Attendance Status</a>
					  <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/L01-Leave.php">Leave</a>
				</div>
			</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Payment Slip
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/P01-1-PaymentSearchForHR.php">Only Me</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/P02-1-PaymentStaffSearch.php">Any Staffs</a>
					</div>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Create
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/StaffEdit_HRManager/NewStaff1.php">New Staff</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewBranchForHR.html">New Branch</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/T01-1-NewTraining_1.php">New Training Course</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/T03-1-Edittraining.php">Edit Training Course</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/EditBranch1.php">Edit Branch</a>
						<a class="dropdown-item" href="StaffEdit_HRManager/SearchForEditStaff.php">Edit Staff</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Analysis Report
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis1.php">Amount of degree of staff that graduated</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis2.php">Salary in every position and department</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis3.php">Daily Attendance in Bang Khae Branch</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis4.php">Work time of any position</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis5.php">Work time and Salary of position in any department</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis6.php">Amount of miss of every staff in Bang Khae branch</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis7.php">Amount of miss of IT department in Bang Khae</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis8.php">The most leave type of month in company</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis9.php">The people who has the most sick leave type</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis10.php">Amount of staff in each branch</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis11.php">The manager who has the most salary in company</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/Analysis12.php">Amount of gender in this company</a>
					</div>
				</li>
			</ul>
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/WelcomeSignin.html">Sign out</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="alert alert-dismissible alert-warning">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4 class="alert-heading">Error!</h4>
		<p class="mb-0">Please select the position</p>
	</div>
</head>
<?php
	if( isset( $_REQUEST['modify'] ))
	{
		unset ($_SESSION["departmentID"]);
	}
?>

<body>
    <br>
    <h2>&nbsp;&nbsp;&nbsp;Required Position</h2>

    <!-- Search -->
	<form action="T01-2.25-PepareTrainingSearch.php" method="POST">
		<div class="Department">
		<div class="input-group-prepend">
			<label class="input-group-text" for="inputGroupSelect01">Department</label>
			<select class="custom-select" name="departmentID" id="inputGroupSelect01">
<?php
		$courseID = $_SESSION['courseID'];
		if(empty($_SESSION['departmentID']))
		{
			echo "<option value='' selected>Choose...</option>";
			$result = mysqli_query($con,"SELECT * FROM department");
			while ($row = mysqli_fetch_array($result))
			{
				$departmentID = $row['departmentID'];
				$departmentName = $row['departmentName'];
				$BranchName = $row['BranchName'];
				echo "<option value='".$departmentID."'>".$BranchName." - ".$departmentName."</option>";
			}
		}
		else
		{
			$departmentID = $_SESSION['departmentID'];
			$result = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID'");
			while ($row = mysqli_fetch_array($result))
			{
				$departmentID = $row['departmentID'];
				$departmentName = $row['departmentName'];
				$BranchName = $row['BranchName'];
				echo "<option value='".$departmentID."'>".$BranchName." - ".$departmentName."</option>";
			}
		}
?>			</select>
			<button type="submit" class="fas fa-search" style="border: none; background-color:white" ></button>
		</div>
	</form>

	<form action="T01-2.5-Addreq.php" method="POST">
    <div class="Position">
    <div class="input-group-prepend">
		<label class="input-group-text" for="inputGroupSelect01">Position</label>
		<select class="custom-select" name="positionID" id="inputGroupSelect01">
<?php
		if(empty($_SESSION['departmentID']))
		{
			echo "<option value='' selected>Choose...</option>";
			$result = mysqli_query($con,"SELECT * FROM position ");
			while ($row = mysqli_fetch_array($result))
			{
				$positionID = $row['positionID'];
				$positionName = $row['positionName'];
				$departmentID2 = $row['departmentID'];
				$result2 = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID2'");
				while ($row2 = mysqli_fetch_array($result2))
				{
					$departmentName2 = $row2['departmentName'];
				}
				echo "<option value='".$positionID."'>".$departmentName2." - ".$positionName."</option>";
			}
		}
		else
		{
			$departmentID = $_SESSION['departmentID'];
			echo "<option value='' selected>Choose...</option>";
			$result = mysqli_query($con,"SELECT * FROM position WHERE departmentID LIKE '$departmentID'");
			while ($row = mysqli_fetch_array($result))
			{
				$positionID = $row['positionID'];
				$positionName = $row['positionName'];
				$departmentID2 = $row['departmentID'];
				$result2 = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID2'");
				while ($row2 = mysqli_fetch_array($result2))
				{
					$departmentName2 = $row2['departmentName'];
				}
				echo "<option value='".$positionID."'>".$departmentName2." - ".$positionName."</option>";
			}
		}
?>		</select>
    </div>

    <!-- End Search -->
    <table class="NextBut">
    <tr><td>
    <button type="submit" class="btn btn-dark" name="loop" value="1" onclick="window.location.href = '#';">Add&nbsp;more</button>
    </td><td>
	<button type="submit" class="btn btn-dark" name="loop" value="" onclick="window.location.href = '#';">Save</button>
    </td><td>
	</form>
	<form id="clear">
		<button type="submit" form="clear" name="modify" value="Modify" class="btn btn-dark" onclick="window.location.href = 'http://localhost/HRPJ/HRManager/T01-2-NewTraining_2.php'">Clear</button>
    </form>
	</td><td>
    <button type="button" class="btn btn-dark" onclick="window.location.href = 'http://localhost/HRPJ/HRManager/T01-1-NewTraining_1.php';">Back</button>
    </td></tr>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
