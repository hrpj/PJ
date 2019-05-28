<?php
session_start();
	$id = $_SESSION["ID"];
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

  $qBranchName = NULL;
  $qDepartmentID = NULL;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create New Staff</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="stylenewstaff.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <font color="#FFFFFF" size="5"> <i class="far fa-building"></i></font>
        <a class="navbar-brand" href="#">&nbsp;ILoveDB Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="WelcomeSignoutForHR.html">Page</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="InforMeHR.html">Only Me</a>
          <a class="dropdown-item" href="SearchInforStaff.html">Any Staffs</a>
          <a class="dropdown-item" href="InforBranch.html">Branch</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="TimeAttendanceSearchForHR.html">Time Attendance</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Payment Slip
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="PaymentStaffForHR.html">Only Me</a>
              <a class="dropdown-item" href="PaymentStaffSearch.html">Any Staffs</a>
        </div>
    </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Create<span class="sr-only">(current)</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="NewStaff.html">New Staff</a>
          <a class="dropdown-item" href="NewBranchForHR.html">New Branch</a>
          <a class="dropdown-item" href="NewDepartment.html">New Department</a>
          <a class="dropdown-item" href="NewTraining.html">New Training Course</a>
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

<!-- _________________________________________Start Form__________________________________________ -->
<body>
  <div class = "NewStaff"><h3>Create New Staff</h></div>
<!-- Fill Date -->
<form>
    <div class="StartDate">
      Start Date : <input type="Date" name="startDate" class="form-control" id="Start" placeholder="StartDate">
    </div>
    <div class="Firstname">
      First Name : <input type="text" name="fName" class="form-control" placeholder="First Name">
    </div>
    <div class="Lastname">
      Last Name : <input type="text" name="lName" class="form-control" placeholder="Last Name">
    </div>
    <div class="Address">
      Address : <input type="text" name="address" class="form-control" placeholder="Address">
    </div>
    <div class="Mobile">
      Mobilephone No. : <input type="text" name="telNo" class="form-control" placeholder="Mobile">
    </div>
    <div class="DOB">
      Date Of Birth : <input type="Date" name="dateOfBirth" class="form-control" id="DOB" placeholder="DOB">
    </div>
    <div class="Gender">
        <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Female</option>
      <option>Male</option>
      <option>Transgender</option>
    </select>
  </div>
    </div>
    <div class="Bank">
      Bank account : <input type="text"  class="form-control" placeholder="Bank">
    </div>
    <div class="Branch">
        <div class="form-group">
    <label for="exampleFormControlSelect1">Branch</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Bang Khae <?php echo $qBranchName; ?></option>
      <option>Bang Ruk</option>
    </select>
  </div>
  <div class="Department">
      <div class="form-group">
  <label for="exampleFormControlSelect1">Department</label>
  <select class="form-control" id="exampleFormControlSelect1">
    <option>Finance</option>
    <option>Marketing</option>
  </select>
</div>
<div class="Position">
    <div class="form-group">
<label for="exampleFormControlSelect1">Position</label>
<select class="form-control" id="exampleFormControlSelect1">
  <option>Manager</option>
  <option>Staff</option>
</select>
</div>
<div class="StaffID">
  Staff ID : <input type="text" class="form-control" placeholder="StaffID">
</div>
<div class="Upload">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupFileAddon01">Profile picture (.jpg)</span>
</div>
<div class="custom-file">
<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
</div>
</div>
</div>
</form>
<!-- End Fill -->
<table class="thebuttons">
    <tr><td>
    <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'GraduateHistory.html';">Next</button>
</td><td>
    <span><button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'WelcomeSignoutForHR.html';">Cancel</button></span>
</td></tr>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php $con->close(); ?>
  </body>
</html>
