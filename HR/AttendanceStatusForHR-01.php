<?php 
session_start();
$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$search = $_SESSION["search"];
$year = $_SESSION["year"];
$dm = $_SESSION["result2"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AttendanceStatus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
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
            <a class="nav-link" href="http://localhost/HRPJ/HR/WelcomeSignoutForHR.php">Page</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Information
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Only Me</a>
              <a class="dropdown-item" href="#">All Staffs</a>
              <a class="dropdown-item" href="#">Branch</a>
            </div>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="http://localhost/HRPJ/HR/TimeAttendanceSearchForHR-01.php">Time Attendance</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Payment Slip
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="InforMeHR.html">Only Me</a>
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
                    <a class="nav-link" href="WelcomeSignin.html">Sign out</a>
                </li>
            </ul>
        </div>
    </nav>
  </head>
<?php 
	$result = mysqli_query($con,"SELECT * FROM staff WHERE staffId LIKE '$search'");

	while ($row = mysqli_fetch_array($result))
	{
		$name = $row["staffName"];
		$positionID = $row["positionID"];
	}
	
	$date = $year. '-' .$dm;
	$unixTimestamp = strtotime($date);
	$dayOfWeek = date("l", $unixTimestamp);

	$result = mysqli_query($con,"SELECT * FROM dailyworkingtime WHERE positionID LIKE '$positionID' AND day LIKE '$dayOfWeek'");
	$count = $result -> num_rows;
	if ((empty($count))) 
	{
		$timeIn = "--:--:--";
		$timeOut = "--:--:--";
	}
	else
	{
		while ($row = mysqli_fetch_array($result))
		{
			$timeIn = $row["timeIn"];
			$timeOut = $row["timeOut"];
		}
	}
?>  
  <body>
      <div class = "Attendance"><h3>Daily Attendance Status</h></div>
    <!-- Information -->
    <div class="Infor"><i class="fas fa-calendar-alt"></i>Date : <?php echo $year.'-'.$dm ?><br>
	<br><i class="fas fa-address-card"></i>Staff ID : <?php echo $search ?><br>
	<br><i class="fas fa-file-signature"></i>Name : <?php echo $name ?><br>
	<br><i class="fas fa-user-clock"></i>Arrival Time :<br>
	<br><i class="fas fa-door-open"></i>Exit Time :<br>
	<br><i class="fas fa-comment-alt"></i>Description :
	</div>
    <div class="Infor1"><i class="fas fa-clock"></i>Start time : <?php echo $timeIn ?><br>
	<br><i class="fas fa-stopwatch"></i>Finish time : <?php echo $timeOut ?><br>
		<br><i class="fas fa-user-check"></i>Approval Staff :
		</div>	
    <!-- End Information -->
	
    <!-- Fill Information -->
    <div class="form-group row">
    <div class="col-sm-10">
      <input type="ArrivalTime" name="class="form-control" id="inputTime" placeholder="ArrivalTime">
    </div>
  </div>
  <div class="form-group row">
      <div class="dropdown">
          <div class="Status">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Normal</a>
    <a class="dropdown-item" href="#">Miss</a>
    <a class="dropdown-item" href="#">Late</a>
  </div>
</div>
</div>
<form>
  <div class="ExitTime">
    <input type="Time" class="form-control" id="inputTime" placeholder="ExitTime">
  </div>
    <div class="dropdown1">
        <div class="Status1">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Normal</a>
    <a class="dropdown-item" href="#">Miss</a>
    <a class="dropdown-item" href="#">Early</a>
  </div>
   </div>
</div>
</form>
    <!-- End Fill -->
    <!-- Description -->
    <form>
<div class="form">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div></form>
  <!-- End Description -->
  <!-- Approval -->
  <form>
      <div class="Approval">
        <input type="text" class="form-control" placeholder="Firstname Lastname">
      </div>
  </form>
<!-- End Approval-->
<!-- Buttons -->
<table class="thebutton">
    <tr><td>
    <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'AttendanceStatusForHR.html';">Save</button>
</td></tr>
</table>
<!-- End Buttons -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
<?php mysqli_close($con); ?>
</html>
