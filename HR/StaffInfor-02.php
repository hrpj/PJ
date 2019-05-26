<?php 
session_start();
  $search = $_SESSION["search"];
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
    <title>Information Myself</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="styleinforHR.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">

    <!-- Nav Bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<font color="#FFFFFF" size="5"> <i class="far fa-building"></i></font>
		<a class="navbar-brand" href="http://localhost/HRPJ/HR/WelcomeSignoutForHR.php">&nbsp;ILoveDB Company</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/HR/WelcomeSignoutForHR.php">Page <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Information
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/HR/InforMeHR.php">Only Me</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HR/SearchInforStaff-01.php">Any Staffs</a>
						<a class="dropdown-item" href="#">Branch</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/HRPJ/HR/TimeAttendanceSearchForHR-01.php">Time Attendance</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Payment Slip
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://localhost/HRPJ/HR/PaymentStaffForHR.php">Only Me</a>
						<a class="dropdown-item" href="#">Any Staffs</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Create
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">New Staff</a>
						<a class="dropdown-item" href="#">New Branch</a>
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
            $result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$search'");
            while ($row = mysqli_fetch_array($result))
            {
            	$staffName = $row['staffName'];
                $gender = $row['gender'];
                $DOB = $row['dateOfBirth'];
                $bankAccount = $row['bankAccount'];
                $telNOStaff = $row['mobilePhoneNo'];
                $staffAddress = $row['address'];
                $startDate = $row['startDate'];
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
                $BranchName = $row['BranchName'];
            }
?>
<body>
      <div class = "StaffInfor"><h3>Staff Information</h></div>
      <div align ="center"><img src="IMG_1543.jpg" width="400" height="300"></div>
      <!-- Information -->
      <div class="Infor"><i class="fas fa-address-card"></i>Staff ID : <?php echo "$search"; ?><br>
	  <br><i class="fas fa-file-signature"></i>Name : <?php echo "$staffName"; ?><br>
	  <br><i class="fas fa-venus-mars"></i>Gender : <?php echo "$gender"; ?><br>
	  <br><i class="fas fa-birthday-cake"></i>Date of birth : <?php echo "$DOB"; ?><br>
	  <br><i class="fas fa-hourglass-start"></i>Start Date : <?php echo "$startDate"; ?><br>
	  <br>Check behavior point : <a href="CompetenceforHR.html" class="button-link">Click here!</a></div>
      <div class="Infor1"><br>
	  <br><i class="fas fa-layer-group"></i>Department : <?php echo "$departmentName"; ?><br>
	  <br><i class="fas fa-briefcase"></i>Position : <?php echo "$positionName"; ?><br>
	  <br><i class="fas fa-map-marker-alt"></i></i>Branch : <?php echo "$BranchName"; ?> <br>
	  <br><i class="fas fa-mobile-alt"></i>Mobilephone No. : <?php echo "$telNOStaff"; ?><br>
	  <br><i class="fas fa-building"></i>Address : <?php echo "$staffAddress"; ?><br>
	  <br><i class="fas fa-money-check-alt"></i>Bank Account : <?php echo "$bankAccount"; ?></div>
      <!-- End Information -->
	  
	  
      <!-- Table Work History -->
      <div class = "WorkHis"><h4>Work History</h></div>
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Intel</td>
      <td>01-03-2014</td>
      <td>01-03-2015</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Central Group</td>
      <td>01-06-2016</td>
      <td>01-12-2017</td>
    </tr>
  </tbody>
</table>
<div class = "Graduate"><h4>Graduate History</h></div>
    <table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">University</th>
<th scope="col">Field</th>
<th scope="col">Degree</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Chulalongkorn University</td>
<td>Engineering</td>
<td>Bachelor</td>
</tr>
<tr>
<th scope="row">2</th>
<td>Mahidol University</td>
<td>Marketing</td>
<td>Doctor</td>
</tr>
</tbody>
</table>
<!-- End Table Work History -->
<table class="thebuttons">
    <tr><td>
    <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'StaffInforEdit.html';">Edit</button>
</td><td>
    <span><button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'http://localhost/HRPJ/HR/SearchInforStaff-01.php';">Back</button></span>
</td></tr>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
