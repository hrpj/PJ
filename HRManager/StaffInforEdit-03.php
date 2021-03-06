<?php
session_start();
  $search = $_SESSION["search"];
  $branchName = $_SESSION["branchName"];
  //echo $_SESSION["branchName"];
  $departmentName = $_SESSION["departmentName"];
  //echo $_SESSION["departmentName"];
//  echo $_SESSION["checkFirst"];
  $departmentID2 = $_SESSION["departmentID"];
//  echo "$departmentID2";
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
        <title>Information Myself</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="styleinforHR.css" rel="stylesheet">
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
    				<li class="nav-item dropdown">
    					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    						Create
    					</a>
    					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/StaffEdit_HRManager/NewStaff1.php">New Staff</a>
    						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewBranchForHR.html">New Branch</a>
    						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/T01-1-NewTraining_1.php">New Training Course</a>
    						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/T03-1-Edittraining.php">Edit Training Course</a>
    						<a class="dropdown-item" href="http://localhost/HRPJ/HRManager/BranchEdit_HRManager/EditBranch1.php">Edit Branch</a>
    						<a class="dropdown-item" href="StaffEdit_HRManager/SearchForEditStaff.php">Edit Staff</a>
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
        <div class = "StaffInfor"><h3>Staff Information</h></div>
        <div align ="center"><img src="IMG_1543.jpg" width="400" height="300"></div>
        <!-- Information -->
        <div class="Infor">
            <i class="fas fa-address-card"></i>Staff ID : &nbsp&nbsp&nbsp&nbsp<?php echo $search ?>
            <br><br><i class="fas fa-file-signature"></i>Name :
            <br><br><i class="fas fa-venus-mars"></i>Gender :
            <br><br><i class="fas fa-birthday-cake"></i>Date of birth :
            <br><br><i class="fas fa-hourglass-start"></i>Start Date :
            <br><br>Check behavior point : <a href="http://localhost/HRPJ/HRManager/CompetenceForHR.php?id=<?php echo $_SESSION['search'] ?>" class="button-link">Click here!</a>
        </div>
        <div class="Infor1">
          <!--  <br><br><i class="fas fa-layer-group"></i>Department : -->
            <br><br><i class="fas fa-briefcase"></i>Position :
          <!--  <br><br><i class="fas fa-map-marker-alt"></i></i>Branch : -->
            <br><br><i class="fas fa-mobile-alt"></i>Mobilephone No. :
            <br><br><i class="fas fa-building"></i>Address :
            <br><br><i class="fas fa-money-check-alt"></i>Bank Account :
        </div>
        <!-- End Information -->
        <br><br><br><br><div class="Training">Check Training Course : <a href="http://localhost/HRPJ/HRManager/TrainingCourse.php?id=<?php echo $_SESSION['search'] ?>" class="button-link">Click here!</a></div>


        <!-- PHP code for value -->
        <?php
            $result = mysqli_query($con,"SELECT * FROM staff WHERE staffID LIKE '$search'");
            while ($row = mysqli_fetch_array($result))
            {
                $staffName = $row['staffName'];
                $gender = $row['gender'];
                $DOB = $row['dateOfBirth'];
                $bankAccount = $row['bankAccount'];
                $telNOStaff = $row['telNo'];
                $staffAddress = $row['address'];
                $startDate = $row['startDate'];
                $positionID = $row['positionID'];
            }
            $result = mysqli_query($con,"SELECT * FROM position WHERE positionID LIKE '$positionID'");
            while ($row = mysqli_fetch_array($result))
            {
                $positionName = $row['positionName'];
                $departmentID = $row['departmentID'];
            }
            $result = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID'");
            while ($row = mysqli_fetch_array($result))
            {
                $departmentName = $row['departmentName'];
                $branchName = $row['BranchName'];
            }
        ?>
        <!-- End PHP code for value -->

        <!-- Fill Information -->
        <form id="formSave" action="StaffInforEditAction.php" method="post">
            <div class="Name">
                <input type="text" class="form-control" name="staffName" value="<?php echo "$staffName"; ?>">
            </div>
            <div class="Gender">
                <select class="btn btn-secondary" name="gender" onchange="sSelect()">
                    <option value="Female"<?php if(!strcasecmp($gender,"female"))
                    echo "selected = 'true';"?> >Female</option>
                    <option value="Male"<?php if(!strcasecmp($gender,"male"))
                    echo "selected = 'true';"?> >Male</option>
                </select>
            </div>
            <div class="DOB">
                <input type="Date" class="form-control" name="DOB" value="<?php echo "$DOB"; ?>">
            </div>
            <div class="StartDate">
                <input type="Date" class="form-control" name="start" value="<?php echo "$startDate"; ?>">
            </div>
            <!--<div class="Department">
                  <select class="btn btn-secondary" name="departmentName" onchange="sSelect()">
                    <?php
                      $sqlDepartment = "SELECT * FROM department WHERE branchName LIKE '$branchName'";
                      $deparmentSelect = mysqli_query($con,$sqlDepartment);
                      while ($row = mysqli_fetch_array($deparmentSelect))
                      {
                        $DepartmentNameRow = $row['departmentName'];
                        $BranchNameRow = $row['BranchName'];
                        echo "<option value='".$DepartmentNameRow."'";
                        if(!strcasecmp($departmentName,$DepartmentNameRow))
                          echo "selected = 'true'";
                        echo ">".$BranchNameRow." - ".$DepartmentNameRow."</option>";
                      }
                    ?>
                  </select>
            </div> -->

            <div class="Position">
                <select class="btn btn-secondary" name="positionID" onchange="sSelect()">
                  <?php
                    $sqlPosition = "SELECT * FROM position ";
                    $positionSelect = mysqli_query($con,$sqlPosition);
                    while ($row = mysqli_fetch_array($positionSelect))
                    {
                      $PositionNameRow = $row['positionName'];
                      $positionIDRow = $row['positionID'];
                      $departmentID = $row['departmentID'];
                      $departmentSearch = mysqli_query($con,"SELECT * FROM department WHERE departmentID LIKE '$departmentID'");
                      while ($row = mysqli_fetch_array($departmentSearch))
                      {
                        $departmentNameRow = $row['departmentName'];
                        $branchNameRow = $row['BranchName'];
                        echo "<option value='".$positionIDRow."'";
                        if(!strcasecmp($positionIDRow,$positionID))
                          echo "selected = 'true';";
                        echo ">".$branchNameRow."-".$departmentNameRow."-".$PositionNameRow."</option>";
                      }
                    }
                  ?>
                </select>
            </div>
            <!--<div class="Branch">
                <select class="btn btn-secondary" name="branchName" onchange="sSelect()">
                  <?php
                    if ($_SESSION["checkFirst"]==1)
                    {
                      $branchSelect = mysqli_query($con,"SELECT * FROM branch ");
                      while ($row = mysqli_fetch_array($branchSelect))
                      {
                        $BranchNameRow = $row['branchName'];
                        echo "<option value='".$BranchNameRow."'";
                        if(!strcasecmp($branchName,$BranchNameRow))
                          echo "selected = 'true';";
                        echo ">".$BranchNameRow."</option>";
                      }
                    }
                    else
                    {
                      $branchSelect = mysqli_query($con,"SELECT * FROM branch WHERE branchName LIKE '$branchName'");
                      while ($row = mysqli_fetch_array($branchSelect))
                      {
                        $BranchNameRow = $row['branchName'];
                        echo "<option value='".$BranchNameRow."'";
                        echo ">".$BranchNameRow."</option>";
                      }
                    }
                  ?>
                </select>
            </div> -->
            <div class="Mobile">
                <input type="text" class="form-control" name="telNo" value="<?php echo "$telNOStaff"; ?>">
            </div>
            <div class="Address">
                <input type="text" class="form-control" name="staffAddress" value="<?php echo "$staffAddress"; ?>">
            </div>
            <div class="Bank">
                <input type="text" class="form-control" name="bankAccount" value="<?php echo "$bankAccount"; ?>">
            </div>
          <!-- Table Work History -->
            <div class = "WorkHis"><h4>Work History</h></div>
              <table class="table">
                  <thead class="thead-dark">
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Company&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                          <th scope="col">Start Date</th>
                          <th scope="col">End Date</th>
                          <th scope="col">Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                          $result = mysqli_query($con,"SELECT * FROM workinghistory WHERE staffID LIKE '$search'");
                          $count=$result->num_rows;
                          $i = 1;
                          while ($row = mysqli_fetch_array($result))
                          {
                              $company = $row['company'];
                              $startDate = $row['startDate'];
                              $endDate = $row['endDate'];
                              echo "<tr>";
                              echo "<form id='companyDelete' action='StaffInforWorkAction.php' method='post' >";
                              echo "<th scope='row'>".$i."</th>";
                              echo "<input type='hidden' name='company".$i."' value = '".$company."' >";
                              echo "<input type='hidden' name='startDate".$i."' value = '".$startDate."' >";
                              echo "<input type='hidden' name='endDate".$i."' value = '".$endDate."' >";
                              echo "<input type='hidden' name='i' value='".$i."'>";
                              echo "</form>";
                              echo "<td><input class='form-control' name='company".$i."' type='text' value='".$company."'</td>";
                              echo "<td><input type='Date' class='form-control' name='startDate".$i."' value='".$startDate."''></td>";
                              echo "<td><input type='Date' class='form-control' name='endDate".$i."' value='".$endDate."''></td>";
                              echo "<td><button type='submit'form='companyDelete' class='btn btn-outline-dark'>Delete</button>";
                              echo "</tr>";
                              $i++;
                          }
                          $i-=1;
                          echo "<input type='hidden' name='i' value='".$i."'>";
                      ?>
                      <tr>
                      </tr>
                  </tbody>
              </table>
          <!-- End Table Work History -->
          <!-- Start Table Graduate -->
            <div class = "Graduate"><h4>Graduate History</h></div>
              <table class="table">
                  <thead class="thead-dark">
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">University</th>
                          <th scope="col">Field</th>
                          <th scope="col">Degree</th>
                          <th scope="col">Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                          $result = mysqli_query($con,"SELECT * FROM education WHERE staffID LIKE '$search'");
                          $count=$result->num_rows;
                          $j = 1;
                          while ($row = mysqli_fetch_array($result))
                          {
                              $university = $row['university'];
                              $field = $row['field'];
                              $degree = $row['degree'];
                              echo "<tr>";
                              echo "<form id='educationDelete' action='StaffInforEducationAction.php' method='post' >";
                              echo "<th scope='row'>".$j."</th>";
                              echo "<input type='hidden' name='university".$j."' value='".$university."'>";
                              echo "<input type='hidden' name='field".$j."' value='".$field."''>";
                              echo "<input type='hidden' name='degree".$j."' value='".$degree."''>";
                              echo "<input type='hidden' name='j' value='".$j."'>";
                              echo "</form>";
                              echo "<td><input class='form-control' type='text' name='university".$j."' value='".$university."'></td>";
                              echo "<td><input class='form-control' type='text' name='field".$j."' value='".$field."''></td>";
                              echo "<td><input class='form-control' type='text' name='degree".$j."' value='".$degree."''></td>";
                              echo "<td><button type='submit' form='educationDelete' class='btn btn-outline-dark'>Delete</button>";
                              echo "</tr>";
                              $j++;
                          }
                          $j-=1;
                          echo "<input type='hidden' name='j' value='".$j."'>";
                      ?>
                  </tbody>
              </table>
          <!-- End Table Graduate -->
        </form>

          <!-- Button at buttom of page -->
            <table class="thebuttons">
                <tr>
                    <td>
                        <button type="submit" form="formSave" class="btn btn-outline-dark" >Save</button>
                    </td>
                    <td>
                        <span>
                            <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'http://localhost/HRPJ/HRManager/SearchInforStaff-01.php';">Cancel</button>
                        </span>
                    </td>
                </tr>
            </table>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
