<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hrmanager";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $staffID = $_SESSION["CR_STAFFID"];
  $sql = "SELECT * FROM education WHERE staffID LIKE '$staffID'";
  $result = mysqli_query($conn,$sql);
  $i = (int)0;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Graduate History</title>
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
  <body>
      <div class = "NewStaff"><h3>Graduate History: <?php echo $staffID; ?> </h></div>
<!-- ___________________________________Univ. Table_____________________________________ -->
<form action="GraduateController.php" method="post">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">University</th>
          <th scope="col">Field</th>
          <th scope="col">Degree</th>
          <th scope="col">Year</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <?php
       while($row = mysqli_fetch_array($result)) {
          $i = $i+1;
          $university = $row['university'];
          $degree = $row['degree'];
          $field = $row['field'];
          $year = $row['year'];
          echo "<tr>
           <td>".$i."</td>
           <td>".$university."</td>
           <td>".$degree."</td>
           <td>".$field."</td>
           <td>".$year."</td>
           <td>
             <button type=\"submit\"
               name=\"edit\"
               value=\"".$year."\"
               class=\"btn btn-success\">
               <h6>edit</h6>
             </button>
           </td>
           <td>
             <button type=\"submit\"
               name=\"delete\"
               value=\"".$year."\"
               class=\"btn btn-danger\">
               <h6>delete</h6>
             </button>
           </td>
          </tr>";
       }
      ?>
      <tbody>
        <tr>
          <th scope="row"> # </th>
          <td><input class="form-control" type="text" name="university" placeholder="University Name"></td>
          <td><input class="form-control" type="text" name="degree" placeholder="Field"></td>
          <td><input class="form-control" type="text" name="field" placeholder="Degree"></td>
          <td><input class="form-control" type="year" name="year" placeholder="Year"></td>
          <td>-</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
    <div class="Add">
      <button type="submit" name="create" class="btn btn-primary">Add</button>
    </div>
  </form>

<!-- End Table -->
  <form action="CancelStaff.php" method="post">
    <table class="threebuttons">
      <tr>
        <td>
          <button type="submit" name="OK" class="btn btn-dark" onclick="window.location.href = 'WorkHistory.html';">Next</button>
        </td>
        <td>
          <span><button type="submit" name="Cancel" class="btn btn-outline-dark" onclick="window.location.href = 'WelcomeSignoutForHR.html';">Cancel</button></span>
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
