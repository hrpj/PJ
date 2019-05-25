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
    <title>Show result </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="font.css" rel="stylesheet">
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
        <li class="nav-item ">
        <a class="nav-link" href="http://localhost/HRPJ/HR/WelcomeSignoutForHR.php">Page</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Only Me</a>
          <a class="dropdown-item" href="#">Any Staffs</a>
          <a class="dropdown-item" href="#">Branch</a>
        </div>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="http://localhost/HRPJ/HR/TimeAttendanceSearchForHR-01.php">Time Attendance<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Payment Slip</a>
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
            <a class="dropdown-item" href="NewStaff.html">Age Range of Staffs</a>
            <a class="dropdown-item" href="NewBranchForHR.html">Salary in every position and department</a>
            <a class="dropdown-item" href="NewDepartment.html">Top 5 Highest Concern Score</a>
            <a class="dropdown-item" href="NewTraining.html">Concern Score in Bang Khae Branch</a>
            <a class="dropdown-item" href="NewStaff.html">Daily Attendance in Bang Khae Branch</a>
            <a class="dropdown-item" href="NewStaff.html">Work time of any position</a>
            <a class="dropdown-item" href="NewStaff.html">Work time and Salary of position in any department</a>
            <a class="dropdown-item" href="NewStaff.html">The highest average competency score of each department</a>
            <a class="dropdown-item" href="NewStaff.html">Amount of leave of each staff of each department in Bang Khae</a>
            <a class="dropdown-item" href="NewStaff.html">The highest amount of leave in each department in Bang Khae</a>
            <a class="dropdown-item" href="NewStaff.html">Field and Degree in IT department</a>
            <a class="dropdown-item" href="NewStaff.html">Income table of each Staff</a>
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
  
  <?php
		$result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$search'");
		while ($row = mysqli_fetch_array($result))
		{
			$name = $row['staffName'] ;
			$branch = $row['branchName'] ;
			$positionID = $row['positionID'];
		}
		
		$result = mysqli_query($con,"SELECT * FROM position WHERE positionID LIKE '$positionID'");
		while ($row = mysqli_fetch_array($result))
		{
			$positionName = $row['positionName'] ;
			$departmentID = $row['departmentID'] ;
		}
		
		$result = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID'");
		while ($row = mysqli_fetch_array($result))
		{
			$departmentName = $row['departmentName'] ;
		}
		
		?>
		
			
      <br>
      <h2>&nbsp;&nbsp;&nbsp;Attendance Manage</h2>
      <hr>
	  
	  
      <!-- Search -->
      <form action="search.php" method="POST" class="form-inline my-2 my-lg-0">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Staff ID&nbsp;&nbsp;
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="window.location.href = '#';">Search</button>
    </form>
	
    <!-- End Search -->
    <br><br>
    <!-- Information -->
    <div align ="center"><img src="images/<?php echo $row['pro_image']; ?>" width="400px" height="300px"></div><br><br>
    <dl class="row">
  <dt class="col-sm-3" align='right'>Name : </dt>
  <dd class="col-sm-9"><?php echo "$name" ;?></dd>
<br><br>
  <dt class="col-sm-3" align='right'>Branch : </dt>
  <dd class="col-sm-9"><?php echo "$branch" ;?></dd>
<br><br>
  <dt class="col-sm-3" align='right'>Department : </dt>
  <dd class="col-sm-9"><?php echo "$departmentName" ;?></dd>
<br><br>
  <dt class="col-sm-3" align='right'>Position : </dt>
  <dd class="col-sm-9"><?php echo "$positionName" ;?></dd>
  </dd>
    </dl>
    <!-- End Information -->
    <br><br><br>
    <div class="edit">
    <button type="button" class="btn btn-dark" onclick="window.location.href = 'http://localhost/HRPJ/HR/TimeManageFindForHR-03.php'">Confirm</button> 
	<button type="button" class="btn btn-light" onclick="window.location.href = 'http://localhost/HRPJ/HR/TimeAttendanceSearchForHR-01.php'">Cancel</button>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
<?php mysqli_close($con);?>
</html>
