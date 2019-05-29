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
    <link href="stylebehavioredithr.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <font color="#FFFFFF" size="5"> <i class="far fa-building"></i></font>
      <a class="navbar-brand" href="http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php">&nbsp;ILoveDB Company</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php">Page <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Information
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/InforMeHR.php">Only Me</a>
              <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/SearchInforStaff-01.php">Any Staffs</a>
              <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/InforBranch.php">Branch</a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Time Attendance
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/TimeAttendanceSearchForHR-01.php">Daily Attendance Status</a>
                <a class="dropdown-item" href="#">Leave</a>
          </div>
      </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Payment Slip
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://localhost/HRPJ/HRManager/PaymentStaffForHR.php">Only Me</a>
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
              <a class="dropdown-item" href="NewBranchForHR.html">New Training Course</a>
              <a class="dropdown-item" href="NewDepartment.html">Edit Branch</a>
              <a class="dropdown-item" href="NewTraining.html">Delete Staff</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Analysis Report
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Age Range of Staffs</a>
              <a class="dropdown-item" href="#">Salary in every position and department</a>
              <a class="dropdown-item" href="#">Top 5 Highest Concern Score</a>
              <a class="dropdown-item" href="#">Concern Score in Bang Khae Branch</a>
              <a class="dropdown-item" href="#">Daily Attendance in Bang Khae Branch</a>
              <a class="dropdown-item" href="#">Work time of any position</a>
              <a class="dropdown-item" href="#">Work time and Salary of position in any department</a>
              <a class="dropdown-item" href="#">The highest average competency score of each department</a>
              <a class="dropdown-item" href="#">Amount of leave of each staff of each department in Bang Khae</a>
              <a class="dropdown-item" href="#">The highest amount of leave in each department in Bang Khae</a>
              <a class="dropdown-item" href="#">Field and Degree in IT department</a>
              <a class="dropdown-item" href="#">Income table of each Staff</a>
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
    <form action="competenceEditForHRAction.php" method="post" id="editForm">
      <input type="hidden" name="id" value="$id">
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
                    while ($row = mysqli_fetch_array($result))
                    {
                      $accomplishment = $row['accomplishment'];
                      echo "<tr>";
                      echo "<th scope='row'>".$i."</th>";
                      echo "<form action='DeleteAccomplishmentAction.php?id=$id' method='POST' id='deleteAccomplishment".$i."' >";
                      echo "<input type='hidden' name='accomplishmentDelete' value='".$accomplishment."'>";
                      echo "<input type='hidden' name='id' value='".$id."'>";
                      echo "</form>";
                      echo "<td><input type='text' class='form-control' name='accomplishment".$i."' value='".$accomplishment."'></td>";
                      echo "<td><button type='submit' form='deleteAccomplishment".$i."' class='fas fa-trash-alt' style='border: none; background: rgba(76, 175, 80, 0.1)'></button>";
                      echo "</tr> ";
                      $i++;
                      //<input type='checkbox' input'>
                    }
                    $i-=1;
                    echo "<input type='hidden' name='i' value='".$i."'>";
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
                $j = 1;
                while ($row = mysqli_fetch_array($result))
                {
                  $concernBehavior = $row['concernBehavior'];
                  echo "<tr>";
                  echo "<th scope='row'>".$j."</th>";
                  echo "<form action='DeleteConcernAction.php?id=$id' method='POST' id='deleteConcern' >";
                  echo "<input type='hidden' name='concernDelete' value='".$concernBehavior."'>";
                  echo "<input type='hidden' name='id' value='".$id."'>";
                  echo "</form>";
                  echo "<td><input type='text' class='form-control' name='concern".$j."' value='".$concernBehavior."'></td>";
                  echo "<td><button type='submit' form='deleteConcern' class='fas fa-trash-alt' style='border: none; background: rgba(76, 175, 80, 0.1)'></button>";
                  echo "</tr> ";
                  $j++;
                }
                $j-=1;
                echo "<input type='hidden' name='j' value='".$j."'>";
              ?>
            </tbody>
          </table>
          <br><br><br><br><br><br>
      </div>
      <!-- End Concern -->
    </form>
      <!-- Buttons -->
      <table class="thebuttons">
          <tr><!--
            <td>
              <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">Delete</button>
              
              <!-- Modal --><!--
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">Are you sure you want to delete?</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'CompetenceForHR.html';">Yes</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>-->
            <td>
              <button type="submit" form="editForm" class="btn btn-outline-dark" >Save</button>
            </td>
            <td>
              <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'http://localhost/HRPJ/HRManager/CompetenceForHR.php?id=<?php echo$id ?>';">Cancel</button>
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
