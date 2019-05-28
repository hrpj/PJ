<?php
session_start();
	session_destroy(); 
	//$_SESSION["search"] = $search;
	//$_SESSION["positionID"] = $positionID;
	//$_SESSION["departmentID"] = $departmentID;
	//$_SESSION["branchName"] = $branchName;
	//$con=mysqli_connect("localhost","root","","hrmanager");
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
    <title>Payment Slip Search</title>
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
	<div class="alert alert-dismissible alert-warning">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4 class="alert-heading">Warning!</h4>
		<p class="mb-0">Wrong Staff ID</p>
	</div>
</head>

<body>
    <br>
    <h2>&nbsp;&nbsp;&nbsp;Payment Slip Manage</h2>
    <!-- Search -->
		<form action="P02-1.25-PepareSearch.php" method="POST">
			<div class="StaffID">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-default">Staff ID</span>
					<input type="text" name="search" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php if(!empty($_SESSION["search"])){echo $_SESSION["search"];} else {echo "Input StaffID";} ?>" >
					<button type="submit" class="fas fa-search" style="border: none; background-color:white" ></i>

				</div>
			</div>
			
			<div class="Branch">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Branch</label>
				<select class="custom-select" name="branch" id="select1">
<?php     			if(!empty($_SESSION["search"]))
					{
						$search = $_SESSION["search"];
						$positionID = $_SESSION["positionID"];
						$positionName = $_SESSION["positionName"];
						$departmentID = $_SESSION["departmentID"];
						$branchName = $_SESSION["branchName"];
						$departmentName  = $_SESSION["departmentName"];
						echo "<option value=".$branchName.">".$branchName."</option>";
					}
					else if(empty($_SESSION["search"]) && !empty($branchName))
					{
						$branchName = $_SESSION["branchName"];
						
						echo "<option value=".$BranchName.">".$BranchName."</option>";
					}
					else
					{
						echo "<option selected >Choose...</option>";
						$result = mysqli_query($con,"SELECT * FROM branch ");
						while ($row = mysqli_fetch_array($result))
						{
							$BranchName = $row['branchName'];
							echo "<option value=".$BranchName.">".$BranchName."</option>";
						}
					}
?>
				</select>
				<button type="submit" class="fas fa-search" style="border: none; background-color:white" ></i>
			</div>
			
			<div class="Department">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Department</label>
				<select class="custom-select" name="department" id="inputGroupSelect01">
<?php     			if(!empty($_SESSION["search"]))
					{
						echo "<option value=".$departmentID.">".$departmentName."-".$branchName."</option>";
					}
					else
					{
						echo "<option selected>Choose...</option>";
						$result2 = mysqli_query($con,"SELECT * FROM department");
						while ($row = mysqli_fetch_array($result2))
						{
							$departmentID = $row['departmentID'];
							$departmentName = $row['departmentName'];
							$BranchName2 = $row['BranchName'];
							echo "<option value=".$departmentID.">".$departmentName."-".$BranchName."</option>";
						}
					}
?>
				</select> 
				<button type="submit" class="fas fa-search" style="border: none; background-color:white" ></i>
			</div>
			
			<div class="Position">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Position</label>
				<select class="custom-select" name="position" id="inputGroupSelect01">
					
<?php     			if(!empty($_SESSION["search"]))
					{
						echo "<option value=".$positionID.">".$departmentID."-".$positionName."</option>";
					}
					else
					{
						echo "<option selected>Choose...</option>";
						$result2 = mysqli_query($con,"SELECT * FROM position");
						while ($row = mysqli_fetch_array($result2))
						{
							$positionID = $row['positionID'];
							$positionName = $row['positionName'];
							$departmentID = $row['departmentID'];
							echo "<option value=".$positionID.">".$departmentID."-".$positionName."</option>";
						}
					}
?>
				</select>
			</div>
			<br><br>
		</form>
	<form action="P02-1.5-PepareSearch.php" method="POST">	
		<div class="Month">
			Month : <select class="form-control" name="month" id="exampleFormControlSelect1">
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
		<div class="Year">
			Year : <input type="text" class="form-control" placeholder="Year">
		</div>
		
		<!-- End Search -->
		<table class="NextBut">
			<tr>
				<td>
					<button type="button" class="btn btn-dark" onclick="window.location.href = '#';">Find</button>
				</td>
				<td>
					<button type="button" class="btn btn-dark" onclick="window.location.href = 'http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php';">Back</button>
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
