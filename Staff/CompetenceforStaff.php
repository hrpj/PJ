<?php
session_start();
  $con=mysqli_connect("localhost","root","","hrmanager");
  // Check connection
  if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $id = $_GET["id"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Behavior</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="stylebehaviorhr.css" rel="stylesheet">
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
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Information
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://localhost/HRPJ/Staff/InforMeStaff.php">Only Me</a>
            <a class="dropdown-item" href="http://localhost/HRPJ/Staff/Schedule.php">Training Course</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/HRPJ/Staff/TimeManageFindForStaff.php">Time Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/HRPJ/Staff/P01-1-PaymentSearchForStaff.php">Payment Slip</a>
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
      <div class = "Behavior"><h3>Behavior</h></div>
    <!-- Competence -->
    <div class="Compete">Competence</div>
    <div class="CompeteTable">
        <table class="table table-bordered bg-success text-white">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $result = mysqli_query($con,"SELECT * FROM competence WHERE staffId LIKE '$id'");
              $count=$result->num_rows;
              $i = 1;
              if ((empty($count)))
              {
                echo "<tr>";
                echo "<th scope='row'>".$i."</th>";
                echo "<td>No Data</td>";
                echo "</tr> ";
              }
              else
              {
                while ($row = mysqli_fetch_array($result))
                {
                  $accomplishment = $row['accomplishment'];
                  echo "<tr>";
                  echo "<th scope='row'>".$i."</th>";
                  echo "<td>".$accomplishment."</td>";
                  echo "</tr> ";
                  $i++;
                }
              }
            ?>
          </tbody>
        </table>
        <br><br><br><br><br><br>
</div>
<!-- End Competence -->
<!-- Concern -->
<div class="Concern">Concern</div>
<div class="ConcernTable">
    <table class="table table-bordered bg-danger text-white">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $result = mysqli_query($con,"SELECT * FROM concern WHERE staffId LIKE '$id'");
          $count=$result->num_rows;
          $i = 1;
          if ((empty($count)))
          {
            echo "<tr>";
            echo "<th scope='row'>".$i."</th>";
            echo "<td>No Data</td>";
            echo "</tr> ";
          }
          else
          {
            while ($row = mysqli_fetch_array($result))
            {
              $concernBehavior = $row['concernBehavior'];
              echo "<tr>";
              echo "<th scope='row'>".$i."</th>";
              echo "<td>".$concernBehavior."</td>";
              echo "</tr> ";
              $i++;
            }
          }
        ?>
      </tbody>
    </table>
    <br><br><br><br><br><br>
</div>
<!-- End Concern -->
<!-- Buttons -->
<table class="thebuttons">
    <tr>
      <td>
        <span><button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'http://localhost/HRPJ/Staff/InforMeStaff.php';">Cancle</button></span>
      </td>
    </tr>
</table>
<!-- End Buttons -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
