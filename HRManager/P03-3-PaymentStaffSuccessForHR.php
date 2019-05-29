<?php
session_start();
	$id = $_SESSION["search"];
	$year = $_SESSION["YEAR"];
	$month = $_SESSION["MONTH"];

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
    <title>Payment Slip</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="stylepaymentedit.css" rel="stylesheet">
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
</head>
<?php       $result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$id'");
            while ($row = mysqli_fetch_array($result))
            {
                $positionID = $row['positionID'];
				$picture = $row['picture'];
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
    <div align ="center"><img src="../staffImage/<?php echo $picture; ?>"></div>

    <!-- Information -->
	<form action="searchMyPaymant2.php" method="POST">
		<div class="Infor"><i class="fas fa-address-card"></i>Staff ID : <?php echo $id ; ?><br>
			<br><i class="fas fa-layer-group"></i>Department : <?php echo $departmentID ; ?><br>
			<br><i class="fas fa-calendar-alt"></i>Month :
			<select class="form-control" name="month" id="exampleFormControlSelect1">
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select>
		</div>
		<div class="Infor1"><br><br><i class="fas fa-briefcase"></i>Position : <?php echo $positionName ; ?> <br>
			<br><i class="fas fa-map-marker-alt"></i></i>Branch : <?php echo "$branchName" ; ?> <br>
			<br><i class="fas fa-history"></i>Year : <input type="text" name="year" class="form-control" placeholder="Year">
		</div>

<?php	$result = mysqli_query($con,"SELECT * FROM increasesalaryrecord WHERE staffID LIKE '$id' AND year LIKE '$year' And date < '$month%' Order by date Desc");

		$count=$result->num_rows;
		if ( empty($count) )
		{
			$salary = "Not found Salary";
		}
		else
		{
			while ($row = mysqli_fetch_array($result))
			{
				$salary = $row['salary'];
			}
		}
?>
		<!-- End Information -->
		<form>
			<div class="tableone">
				Bonus
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Type</th>
							<th scope="col">Amount</th>
						</tr>
					</thead>

<?php	$result2 = mysqli_query($con,"SELECT * FROM bonus WHERE staffID LIKE '$id' AND year LIKE '$year' And date LIKE '$month%'");

		$count=$result2->num_rows;
		if ( empty($count) )
		{
			echo "<tbody><tr><td>-----</td><td>----</td></tr></tbody> ";
		}
		else
		{
			while($row = mysqli_fetch_array($result2))
			{
				$des = $row['description'];
				$amount = $row{'amount'};
				echo "<tbody>";
				echo "<tr>";
				echo "<td>".$des."</td>" ;
				echo "<td>".$amount."</td>";
				echo "</tr></tbody> ";
			}
		}
?>
				</table>

			<div class="tabletwo">
				Deduction
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Type</th>
							<th scope="col">Amount</th>
						</tr>
					</thead>
<?php	$result2 = mysqli_query($con,"SELECT * FROM deduction WHERE staffID LIKE '$id' AND year LIKE '$year' And date LIKE '$month%'");

		$count=$result2->num_rows;
		if ( empty($count) )
		{
			echo "<tbody>";
			echo "<tr>";
			echo "<td>----</td>" ;
			echo "<td>----</td>";
			echo "</tr></tbody> ";
		}
		else
		{
			while($row = mysqli_fetch_array($result2))
			{
				$des2 = $row['description'];
				$amount2 = $row{'amount'};
				echo "<tbody>";
				echo "<tr>";
				echo "<td>".$des."</td>" ;
				echo "<td>".$amount."</td>";
				echo "</tr></tbody> ";
			}
		}
?>
				</table>
			</div>

		</form>

		<table class="AddNCancel">
			<tr>
				<td>
					<button type="submit" class="btn btn-dark" onclick="window.location.href = '#';">Find</button>
				</td>
				<td>
					<button type="button" class="btn btn-dark" onclick="window.location.href = 'http://localhost/HRPJ/HRManager/P03-1-search.php';">Back</button>
				</td>
			</tr>
		</table>
	</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
