<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$f == 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment Slip</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="stylepaymentedit2.css" rel="stylesheet">
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
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/HRManager/TimeAttendanceSearchForHR-01.php">Time Attendance</a>
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
						<a class="dropdown-item" href="#">New Staff</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewBranchForHR.html">New Branch</a>
						<a class="dropdown-item" href="#">New Department</a>
						<a class="dropdown-item" href="#">New Training Course</a>
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
<?php
			$search = $_SESSION["FoundID2"];
			$date = $_SESSION["date"];
			$type = $_SESSION["type"];

			$day = explode("-", $date);
			$year = $day[0];
			$month = $day[1] . '-'. $day[2];

			$result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$search'");
            while ($row = mysqli_fetch_array($result))
            {
                $positionID = $row['positionID'];
            }
            $result = mysqli_query($con,"SELECT * FROM position WHERE positionID LIKE '$positionID'");
            while ($row = mysqli_fetch_array($result))
            {
				$positionName = $row['positionName'];
                $departmentID = $row['departmentID'];
            }
            $result = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID'");
            while ($row = mysqli_fetch_array($result))
            {
                $departmentName = $row['departmentName'];
				$branchName = $row['BranchName'];
            }
?>
<body>
    <div class = "Payment"><h3>Payment Slip</h></div>
    <div align ="center"><img src="IMG_1543.jpg" width="400" height="300"></div>

    <!-- Information -->
    <div class="Infor"><i class="fas fa-address-card"></i>Staff ID : <?php echo $search ; ?><br>
		<br><i class="fas fa-layer-group"></i>Department : <?php echo $departmentName ; ?><br>
		<br><i class="fas fa-calendar-alt"></i>Month : <?php echo $day[1] ; ?>
	</div>
    <div class="Infor2"><br><br><i class="fas fa-briefcase"></i>Position : <?php echo $positionName ; ?><br>
		<br><i class="fas fa-map-marker-alt"></i></i>Branch :<?php echo $branchName ; ?><br>
		<br><i class="fas fa-history"></i>Year : <?php echo $year ; ?>
	</div>

<?php	$result = mysqli_query($con,"SELECT * FROM increasesalaryrecord WHERE staffID LIKE '$search' AND year LIKE '$year' And date < '$month%' Order by date Desc");

		$count=$result->num_rows;
		if ( empty($count) )
		{
			$salary = "Not found Salary";
			$f == 0;
		}
		else
		{
			while ($row = mysqli_fetch_array($result))
			{
				$salary = $row['salary'];
			}
			$f == 1;
		}
?>
    <!-- End Information -->
	<form action="P02-3.25-editSalary.php" method="POST">
		<div class="Salary"><h5>Salary :
			<div class="SalaryFill">
				<input type='hidden' name='month' value=".<?php echo $month ; ?>.">
				<input type='hidden' name='year' value=".<?php echo $year ; ?>.">
				<input type='hidden' name='search' value=".<?php echo $search ; ?>.">
				<input type='hidden' name='f' value=".<?php echo $f ; ?>.">
				<input type="text" name="newSalary" class="form-control" id="Type" aria-describedby="Type" placeholder="<?php echo $salary ; ?>"></h>
			</div>
		</div>
		<div class ="SaveSalary">
			<button href="#" type="submit" class="button-link" style="border: none; background-color:white" >Save</button>
		</div>
	</form>
		<div class="table1">
			Bonus
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Type</th>
					<th scope="col">Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" class="form-control" id="Type" aria-describedby="Type" placeholder="Original Type"></td>
					<td><input type="text" class="form-control" id="Amount" aria-describedby="Amount" placeholder="Original Amount"></td>
				</tr>
				<tr>
					<td><input type="text" class="form-control" id="Type" aria-describedby="Type"></td>
					<td><input type="text" class="form-control" id="Amount" aria-describedby="Amount"></td>
				</tr>
			</tbody>
		</table>

	<div class ="SaveBonus"><a href="BranchToDepartment.html" class="button-link">Save</a></div>
	<div class ="AddBonus"><a href="BranchToDepartment.html" class="button-link">Add</a></div>
    <table class="Back">
		<tr><td>
			<button type="button" class="btn btn-dark" onclick="window.location.href = 'ListOfBill.html';">Back</button>
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
