<?php 
session_start();
$con=mysqli_connect("localhost","root","","hrmanager");
// Check connection
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$search = $_SESSION["ID"];
$year = $_SESSION["year"];
$dm = $_SESSION["result2"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TimeManageSuccess</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="font.css" rel="stylesheet">
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
        <li class="nav-item ">
        <a class="nav-link" href="http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php">Page <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/HRPJ/Staff/InforMeStaff.php">Information</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="http://localhost/HRPJ/Staff/TimeManageFindForStaff.php">Time Attendance</a>
        </li>
        <li class="nav-item">
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
    <br><div align="right"><i class="fas fa-user-clock"></i>
        Staff ID :<?php echo "$search" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <hr>
<!-- Date -->
<form action="getDateStaff.php" method="POST" >
<div class = "Date">
<input type="date" name="date" id="myDate" value="<?php echo $year.'-'.$dm ?>">
<p>Click the button to get the status of the date.</p>
<input type="hidden" name="search" value="<?php echo "$id" ?>">
<button type="submit" onclick="window.location.href = '#' ">Submit</button>
</div>
</form>
<!-- End Date -->
<!-- Table -->
<div class="TableStatus">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Time</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
  $result = mysqli_query($con,"SELECT * FROM timeattendance WHERE staffId LIKE '$search' AND year LIKE '$year' AND date LIKE '$dm'");
  $count=$result->num_rows;
  if ((empty($count))) 
  {
    header("Location: http://localhost/HRPJ/Staff/TimeManageFindForStaffError.php?");
  }

  while ($row = mysqli_fetch_array($result))
  {
    $Type = $row['type'];
    $Time = $row['time'];
    $Status = $row['status'];
    echo "<tr>";
    echo "<td>".$Type."</td>";
    echo "<td>".$Time."</td>";
    echo "<td>".$Status."</td>";
    echo "</tr> ";
  }
?>
  </tbody>
</table>
</div>


<!-- End Table -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <?php mysqli_close($con);?>
</html>
