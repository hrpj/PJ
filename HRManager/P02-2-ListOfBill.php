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
    <title>List of Bill</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="stylepaymentsearch.css" rel="stylesheet">
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
					</div>
				</li>
				<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Time Attendance
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		              <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/TimeAttendanceSearchForHR-01.php">Daily Attendance Status</a>
		              <a class="dropdown-item" href="PaymentStaffSearch.html">Leave</a>
		        </div>
		    </li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Payment Slip
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/P01-1-PaymentSearchForHR.php">Only Me</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/P02-1-PaymentStaffSearch.php">Any Staffs</a>
					</div>
				</li>
				<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Create
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="NewStaff.html">New Staff</a>
		          <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewBranchForHR.html">New Branch</a>
		          <a class="dropdown-item" href="NewDepartment.html">New Training Course</a>
		          <a class="dropdown-item" href="NewTraining.html">Edit Branch</a>
		          <a class="dropdown-item" href="NewTraining.html">Delete Staff</a>
		        </div>
		      </li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Analysis Report
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Age Range of Staffs</a>
						<a class="dropdown-item" href="#">Salary in every position and department</a>
						<a class="dropdown-item" href="#">Top 5 Highest Concern Score</a>
						<a class="dropdown-item" href="#">Concern Score in Bang Khae Branch</a>
						<a class="dropdown-item" href="#">Daily Attendance in Bang Khae Branch</a>
						<a class="dropdown-item" href="#">Work time of any position</a>
						<a class="dropdown-item" href="#">Work time and Salary of position in any department</a>
						<a class="dropdown-item" href="#">The highest average competency score of each department</a>
						<a class="dropdown-item" href="#">Amount of leave of each staff of each department in Bang Khae</a>
						<a class="dropdown-item" href="#">The highest amount of leave in each department in Bang Khae</a>
						<a class="dropdown-item" href="#">Field and Degree in IT department</a>
						<a class="dropdown-item" href="#">Income table of each Staff</a>
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
</head>

<body>
    <br>
    <h2>&nbsp;&nbsp;&nbsp;List Of Bill </h2>

    <!-- Table -->
	<form action="P02-2.5-EditBill.php" method="POST">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">StaffID</th>
					<th scope="col">Position</th>
					<th scope="col">Date</th>
					<th scope="col">Type</th>
					<th scope="col">Edit</th>
				</tr>
			</thead>

<?php 		$search5 = $_SESSION["foundID"];
			$positionID = $_SESSION["posi"];
			$departmentID = $_SESSION["depart"];
			$branchName = $_SESSION["bran"];
			$month  = $_SESSION["month"];
			$year = $_SESSION["year"];


			if(!empty($search5))
			{
				$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE staffID LIKE '$search5' AND date LIKE '$month%' AND year LIKE '$year%'");
				$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE staffID LIKE '$search5' AND date LIKE '$month%' AND year LIKE '$year%'");
			}
			else if(empty($search5) && !empty($positionID))
			{
				$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID LIKE '$positionID')");
				$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID LIKE '$positionID')");
			}
			else if(empty($search5) && empty($positionID) && !empty($departmentID))
			{
				$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
												WHERE departmentID LIKE '$departmentID'))");
				$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
												WHERE departmentID LIKE '$departmentID'))");
			}
			else if(empty($search5) && empty($positionID) && empty($departmentID) && !empty($branchName))
			{
				$result1 = mysqli_query($con,"SELECT * FROM bonus WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
												WHERE departmentID IN (SELECT departmentID FROM department WHERE branchName LIKE '$branchName%')))");
				$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE date LIKE '$month%' AND year LIKE '$year%' AND staffID IN (SELECT staffID FROM staff WHERE positionID IN (SELECT positionID  FROM position
												WHERE departmentID IN (SELECT departmentID FROM department WHERE branchName LIKE '$branchName%'))");
			}


			while ($row1 = mysqli_fetch_array($result1))
			{
				$ID = $row1['staffID'];
				$month  =  $row1['date'];
				$year = $row1['year'];
				$date = $year . '-' . $month;

				$result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$ID'");
				while ($row = mysqli_fetch_array($result))
				{
					$positionID = $row['positionID'];
				}
				$result = mysqli_query($con,"SELECT positionName FROM position WHERE positionID LIKE '$positionID'");
				while ($row = mysqli_fetch_array($result))
				{
					$positionName = $row['positionName'];
				}
				echo "<tbody>";
				echo "<tr>";
				echo "<td>".$ID."</td>";
				echo "<td>".$positionName."</td>";
				echo "<td>".$date."</td>";
				echo "<td>bonus</td>";
				echo "<input type='hidden' name='edit2' value=".$date."</td>";
				echo "<input type='hidden' name='edit3' value='bounus'</td>";
				echo "<td><button type='submit' name='edit' value='".$ID."' class='button-link' class='fas fa-search' style='border: none; background-color:white' class='button-link'>Click to Edit</button></td>";
				echo "</tr>";
				echo "</tbody>";
			}

			while ($row2 = mysqli_fetch_array($result2))
			{
				$ID = $row2['staffID'];
				$month  =  $row2['date'];
				$year = $row2['year'];
				$date = $year . '-' . $month;

				$result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$ID'");
				while ($row = mysqli_fetch_array($result))
				{
					$positionID = $row['positionID'];
				}
				$result = mysqli_query($con,"SELECT positionName FROM position WHERE positionID LIKE '$positionID'");
				while ($row = mysqli_fetch_array($result))
				{
					$positionName = $row['positionName'];
				}
				echo "<tbody>";
				echo "<tr>";
				echo "<td>".$ID."</td>";
				echo "<td>".$positionName."</td>";
				echo "<td>".$date."</td>";
				echo "<td>deduction</td>";
				echo "<input type='hidden' name='edit2' value=".$date."</td>";
				echo "<input type='hidden' name='edit3' value='deduction'</td>";
				echo "<td><button type='submit' name='edit' value='".$ID."' class='button-link' class='fas fa-search' style='border: none; background-color:white' class='button-link'>Click to Edit</button></td>";
				echo "</tr>";
				echo "</tbody>";
			}
?>
		</table>
	</form>
    <!-- End Table -->


    <table class="AddNCancel">
		<tr><td>
			<button type="button" class="btn btn-dark" onclick="window.location.href = 'http://localhost/HRPJ/HRManager/P02-1-PaymentStaffSearch.php';">Back</button>
		</td></tr>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
<?php 	mysqli_close($con); ?>
</html>
