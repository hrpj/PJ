<?php
session_start();
	$id = $_SESSION["ID"];
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$staffID = $_SESSION["CR_STAFFID"];

	$result = mysqli_query($con,"SELECT *
																FROM staff
																WHERE staffID LIKE $staffID");
	$row = mysqli_fetch_array($result);

  $staffName = $row["staffName"];
  $positionID = $row["positionID"];
  $bankAccount = $row["bankAccount"];
  $dateOfBirth = $row["dateOfBirth"];
  $gender = $row["gender"];
  $address = $row["address"];
  $telNo = $row["telNo"];
  $startDate = $row["startDate"];
  $password = $row["password"];
  $picture = $row["picture"];
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
        <a class="navbar-brand" href="#">&nbsp;ILoveDB Company</a>
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
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewBranchForHR.php">New Branch</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/T01-1-NewTraining_1.php">New Training Course</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/T03-1-Edittraining.php">Edit Training Course</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/EditBranch1.php">Edit Branch</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/StaffEdit_HRManager/SearchForEditStaff.php">Edit Staff</a>
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
  <body>
      <div class = "StaffInfor">
        <h3>Staff Information</h>
      </div>
      <div align ="center">
        <img src="../../staffImage/<?php echo $picture ?>" >
      </div>
      <!-- Information -->
      <div class="Infor">
        <i class="fas fa-address-card"></i>
        Staff ID :<br><br>
        <i class="fas fa-file-signature"></i>
        Name : <br><br>
        <i class="fas fa-venus-mars"></i>
        Gender : <br><br>
        <i class="fas fa-birthday-cake"></i>
        Date of birth :<br><br>
        <i class="fas fa-hourglass-start"></i>
        Start Date :<br><br>
      </div>
      <div class="Infor1">
        <br><br>
        <i class="fas fa-layer-group"></i>
        Picture : <br><br>
        <i class="fas fa-briefcase"></i>
        Position : <br><br>
        <i class="fas fa-map-marker-alt"></i>
        <i class="fas fa-mobile-alt"></i>
        Mobilephone No. :<br><br>
        <i class="fas fa-building"></i>
        Address : <br><br>
        <i class="fas fa-money-check-alt"></i>
        Bank Account :
      </div>
      <!-- End Information -->
  <!--_______________________________________ Fill Information _____________________________________-->
      <form action="EditStaffController3.php" method="post" enctype="multipart/form-data">
          <div class="ID">
            <input type="text" name="staffID" class="form-control" <?php echo "value=\"".$staffID."\"" ?>  placeholder="Staff ID">
          </div>
          <div class="Name">
            <input type="text" name="staffName" class="form-control" <?php echo "value=\"".$staffName."\"" ?> placeholder="Firstname Lastname">
          </div>
          <div class="Gender">
              <select name="gender" class="btn btn-secondary" id="master_id" onchange="sSelect()">
                  <option <?php echo "value=\"".$gender."\"" ?> selected><?php echo $gender ?></option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                  <option value="transgender">Transgender</option>
              </select>
          </div>
          <div class="DOB">
            <input type="Date" name="dateOfBirth" <?php echo "value=\"".$dateOfBirth."\"" ?> class="form-control" id="DOB" placeholder="Date of Birth">
          </div>
          <div class="StartDate">
            <input type="Date" name="startDate" <?php echo "value=\"".$startDate."\"" ?> class="form-control" id="Start" placeholder="StartDate">
          </div>
          <div class="Department">
            <input type="file" name="picture">
          </div>
          <div class="Position">
            <input type="text" name="positionID" <?php echo "value=\"".$positionID."\"" ?> class="form-control" placeholder="Position">
          </div>
          <div class="Mobile">
            <input type="text" name="telNo" <?php echo "value=\"".$telNo."\"" ?> class="form-control" placeholder="Mobile">
          </div>
          <div class="Address">
            <input type="text" name="address" class="form-control" <?php echo "value=\"".$address."\"" ?> placeholder="Address">
          </div>
          <div class="Bank">
            <input type="text" name="bankAccount" <?php echo "value=\"".$bankAccount."\"" ?> class="form-control" placeholder="Bank">
          </div>


<!-- End Table Work History -->
<table class="thebuttons">
    <tr><td>
    <button type="submit" class="btn btn-outline-dark" onclick="window.location.href = 'StaffInfor.html';">Save</button>
</td><td>
    <span><button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'StaffInfor.html';">Cancel</button></span>
</td></tr>
</table>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
