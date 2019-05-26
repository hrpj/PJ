<?php 
session_start();
  $id = $_SESSION["ID"];
  $positionID = $_SESSION['positionID'];
  $departmentID = $_SESSION['departmentID'];
  $BranchName = $_SESSION['BranchName'];
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
        <a class="navbar-brand" href="http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php">&nbsp;ILoveDB Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php">Page <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/HRPJ/Staff/InforMeStaff.php">Information</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/HRPJ/Staff/TimeManageFindForStaff.php">Time Attendance</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="http://localhost/HRPJ/Staff/PaymentStaffForStaff.php">Payment Slip</a>
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
      <div class = "Payment"><h3>Payment Slip</h></div>
      <div align ="center"><img src="ImageStaff.jpg" width="400" height="300"></div>

      <!-- Information -->
      <div class="Infor"><i class="fas fa-address-card"></i>Staff ID : <?php echo $id; ?>
          <br><br><i class="fas fa-layer-group"></i>Department : <?php 
            $result = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID'");
            while ($row = mysqli_fetch_array($result))
            {
                echo $row['departmentName'];
            }?>
          <br><br><i class="fas fa-calendar-alt"></i>Month : DEC
      </div>
      <div class="Infor1">
          <br><br><i class="fas fa-briefcase"></i>Position : <?php 
            $result = mysqli_query($con,"SELECT * FROM position WHERE positionID LIKE '$positionID'");
            while ($row = mysqli_fetch_array($result))
            {
                echo $row['positionName'];
            }?>
          <br><br><i class="fas fa-map-marker-alt"></i></i>Branch : <?php echo $BranchName; ?>
          <br><br><i class="fas fa-history"></i>Year : 2018
      </div>
      <!-- End Information -->

      <form>
          <div class="table1">
              Income
      <table class="table">
      <thead class="thead-dark">
      <tr>
      <th scope="col">Type</th>
      <th scope="col">Amount</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>Salary</td>
      <td>27000</td>
      </tr>
      </tbody>
      </table>
      <div class="table2">
          Deduction
      <table class="table">
      <thead class="thead-dark">
      <tr>
      <th scope="col">Type</th>
      <th scope="col">Amount</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>Withholding Tax</td>
      <td>2500</td>
      </tr>
      </tbody>
      </table>
  </div>
</form>
      <table class="AddNCancel">
          <tr><td>
      <button type="button" class="btn btn-dark" onclick="window.location.href = 'WelcomeSignoutForHR.html';">Back</button>
      </td></tr>
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
