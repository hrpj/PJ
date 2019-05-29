<?php
session_start();
	$id = $_SESSION["ID"];
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$startDate = $_SESSION["STARTDATE"];
	$fName = $_SESSION["FNAME"];
	$lName = $_SESSION["LNAME"];
	$address = $_SESSION["ADDRESS"];
	$telNo = $_SESSION["TELNO"];
	$dateOfBirth = $_SESSION["DATEOFBIRTH"];
	$gender = $_SESSION["GENDER"];
	$bankAccount = $_SESSION["BANKACCOUNT"];
	$branchName = $_SESSION["BRANCHNAME"];

	$sql = "SELECT branchName FROM branch";
	$result = mysqli_query($con,$sql);

	$sql = "SELECT departmentName, departmentID FROM department WHERE branchName LIKE '$branchName'";
	$result2 = mysqli_query($con,$sql);
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
    <link href="stylenewstaff2.css" rel="stylesheet">
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
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/InforBranch.php">Training Course</a>
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
						<a class="dropdown-item" href="NewBranchForHR.html">New Training Course</a>
						<a class="dropdown-item" href="NewTraining.html">Edit Training Course</a>
						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/EditBranch1.php">Edit Branch</a>
						<a class="dropdown-item" href="NewTraining.html">Delete Staff</a>
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

<!-- _________________________________________Start Form__________________________________________ -->
<body>
  <div class = "NewStaff"><h3>Create New Staff</h></div>
<!-- Fill Date -->
<form action="CreateStaffController.php" method="post" id="staffForm">
      <div class="StartDate">
        Start Date : <input type="Date" name="startDate" value=<?php echo "$startDate"; ?> class="form-control" id="Start" placeholder="StartDate">
      </div>
      <div class="Firstname">
        First Name : <input type="text" name="fName" <?php echo "value=\"$fName\""; ?> class="form-control" placeholder="First Name">
      </div>
      <div class="Lastname">
        Last Name : <input type="text" name="lName" <?php echo "value=\"$lName\""; ?> class="form-control" placeholder="Last Name">
      </div>
      <div class="Address">
        Address : <input type="text" name="address" <?php echo "value=\"$address\""; ?> class="form-control" placeholder="Address">
      </div>
      <div class="Mobile">
        Mobilephone No. : <input type="text" name="telNo" <?php echo "value=\"$telNo\""; ?> class="form-control" placeholder="Mobile">
      </div>
      <div class="DOB">
        Date Of Birth : <input type="Date" name="dateOfBirth" value=<?php echo "$dateOfBirth"; ?> class="form-control" id="DOB" placeholder="DOB">
      </div>
      <div class="Gender">
          <div class="form-group">
      <label for="exampleFormControlSelect1">Gender</label>
      <select class="form-control" name="gender">
				<option value=<?php echo "$gender"; ?>><?php echo "$gender"; ?></option>
        <option value="female">Female</option>
        <option value="male">Male</option>
        <option value="transgender">Transgender</option>
      </select>
    </div>
      </div>
      <div class="Bank">
        Bank account : <input type="text" name="bankAccount" <?php echo "value = \"".$bankAccount."\""; ?> class="form-control" placeholder="Bank">
      </div>
      <div class="Branch">
          <div class="form-group">
      <label for="exampleFormControlSelect1">Branch</label>
      <select name="branchName" class="form-control" id="exampleFormControlSelect1">
        <option><?php echo "$branchName"; ?></option>
        <?php
         while($row = mysqli_fetch_array($result)) {
            $name = $row['branchName'];
            echo "<option value=".$name.">".$name."</option>";
         }
        ?>
      </select>
      <button type="submit" class="btn btn-primary btn-group-xs" name="Submit" value="SubmitBName">Find</button>
    </div>
  </div>

<!-- ____________________________________ Start Form 2 _________________________________________ -->
	<div class="Department">
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Department</label>
		    <select name="departmentID" class="form-control" id="exampleFormControlSelect1">
					<option>Choose Department</option>
					<?php
					 while($row = mysqli_fetch_array($result2)) {
							$dName = $row['departmentName'];
							$dId = $row['departmentID'];
							echo "<option value=\"".$dId."\">".$dName."</option>";
					 }
					?>
		    </select>
				<button type="submit" class="btn btn-primary btn-group-xs" name="Submit" value="SubmitDName">Find</button>
		</div>
	</div>
</form>

  <!-- End Fill -->
	<table class="thebuttons">
      <tr>
				<td>
      		<span><button type="button" class="btn btn-outline-dark" onclick="window.location.href = '/HRPJ/HRManager/WelcomeSignoutForHR.php';">Cancel</button></span>
  			</td>
			</tr>
  </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php $con->close(); ?>
  </body>
</html>
