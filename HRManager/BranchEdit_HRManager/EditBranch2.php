<?php
  session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

  $branchName = $_SESSION["BRANCH"];

  $result = mysqli_query($con,"SELECT *
                                FROM branch
                                WHERE branchName LIKE '$branchName'");
  $row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Department</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="styleview.css" rel="stylesheet">
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
          <a class="dropdown-item" href="InforMe.html">Only Me</a>
          <a class="dropdown-item" href="InforStaff.html">Any Staffs</a>
          <a class="dropdown-item" href="InforBranch.html">Branch</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Time Attendance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="PaymentSearchForHR.html">Daily Attendance Status</a>
              <a class="dropdown-item" href="PaymentStaffSearch.html">Leave</a>
        </div>
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
      <a class="dropdown-item" href="NewDepartment.html">Edit Branch</a>
      <a class="dropdown-item" href="NewTraining.html">Delete Staff</a>

    </div>
  </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Analysis Report
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="NewStaff.html">Age range of staffs</a>
        <a class="dropdown-item" href="NewBranchForHR.html">Salary in every position and department</a>
        <a class="dropdown-item" href="NewStaff.html">Daily Attendance in Bang Khae Branch</a>
        <a class="dropdown-item" href="NewStaff.html">Work time of any position</a>
        <a class="dropdown-item" href="NewStaff.html">Work time and Salary of position in any department</a>
        <a class="dropdown-item" href="NewStaff.html">Amount of miss of every staff in Bang Khae branch</a>
        <a class="dropdown-item" href="NewStaff.html">Amount of miss of IT department in Bang Khae</a>
        <a class="dropdown-item" href="NewStaff.html">The most leave type of month in company</a>
        <a class="dropdown-item" href="NewStaff.html">The people who has the most sick leave type</a>
        <a class="dropdown-item" href="NewStaff.html">Amount of staff in each branch</a>
        <a class="dropdown-item" href="NewStaff.html">The manager who has the most salary in company</a>
        <a class="dropdown-item" href="NewStaff.html">Amount of gender in this company</a>
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
  <body>
      <div class = "NameBranch"><h3>Edit Branch : </h3></div>
      <form action="EditBranchController2.php">
        <div class="Previous">
          <b>Previous Branch Name : <?php echo $row['branchName']; ?> </b>
        </div>
        <div class="New">
          New Branch Name : <input type="text" name="branchName" class="form-control" placeholder="Name">
        </div>
        <div class="PreviousMin">
          <b>Previous Branch Address : <?php echo $row['address']; ?></b>
        </div>
        <div class="NewMin">
          New Branch Address : <input type="text" name="branchAddress" class="form-control" placeholder="Address">
      </div>
        <div class="PreviousMin">
          <b>Previous Telephone No. : <?php echo $row['telNo']; ?></b>
        </div>
        <div class="NewMin">
          New Telephone No. : <input type="text" name="telNo" class="form-control" placeholder="Tel">
        </div>

        <table class="Back">
          <tr>
            <td>
              <button type="submit" class="btn btn-outline-dark" onclick="window.location.href = 'EditBranch1.html';">Save</button>
            </td>
            <td>
              <span>
                <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'NewDepartment.php';">Skip</button>
              </span>
            </td>
            <td>
              <span>
                <?php $_SESSION["BRANCH"] = $branchName ?>
                <button type="button" class="btn btn-outline-dark" onclick="window.location.href = '/HRPJ/HRManager/WelcomeSignoutForHR.php';">Cancel</button>
              </span>
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
