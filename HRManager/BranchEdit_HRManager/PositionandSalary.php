<?php
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  $departmentID = $_SESSION["DEPARTMENT"];
  $_SESSION["DEPARTMENT"] = $departmentID;
  $result = mysqli_query($con,"SELECT d.departmentName AS departmentName
                                FROM department d
                                WHERE departmentID LIKE $departmentID");
  $row = mysqli_fetch_array($result);
  $departmentName = $row['departmentName'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manage Position</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="stylepositionandsalary.css" rel="stylesheet">
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
  <!--____________________________________End Nav bar_____________________________________-->
  <body>
  <!--________________________________________________________________________________ -->

		<div class ="Branch"><h2>Position and Salary</h><hr>
			<h4>Branch : <?php echo $_SESSION["BRANCH"]; ?> </h4>
			 <h4>Department ID : <?php echo $_SESSION["DEPARTMENT"]; ?> </h4>
			 <h4>Department Name : <?php echo $departmentName; ?> </h4></div>

   <!---___________________________Table with Form__________________________________----------->
   <div align="center">
     <form name="ManagePosition" action="CreateEditDeletePosition.php" method="post">
        <?php
           $branch = $_SESSION["BRANCH"];
           $departmentID = $_SESSION["DEPARTMENT"];
           $sql = "SELECT * FROM position WHERE departmentID LIKE '$departmentID'";
           $result = mysqli_query($con,$sql);
         ?>
				 <br><br>

        <table class="table">
         <thead class="thead-dark">
           <tr>
             <th scope="col">Position ID</th>
             <th scope="col">Position Name</th>
             <th scope="col">Min Salary</th>
             <th scope="col">Max Salary</th>
             <th scope="col">Edit</th>
             <th scope="col">Delete</th>
           </tr>
         </thead>
        <tbody>
          <?php
           while($row = mysqli_fetch_array($result)) {
              $ID = $row['positionID'];
              $name = $row['positionName'];
              $min = $row['minSalary'];
              $max = $row['maxSalary'];
              echo "<tr>
               <td>".$ID."</td>
               <td>".$name."</td>
               <td>".$min."</td>
               <td>".$max."</td>
               <td>
                 <button type=\"submit\"
                   name=\"edit\"
                   value=\"".$ID."\"
                   class=\"btn btn-success\">
                   <h6>edit</h6>
                 </button>
               </td>
               <td>
                 <button type=\"submit\"
                   name=\"delete\"
                   value=\"".$ID."\"
                   class=\"btn btn-danger\">
                   <h6>delete</h6>
                 </button>
               </td>
              </tr>";
           }
          ?>
          <tr>
            <td>Auto-increment</td>
            <td><input type="text" name="positionName" class="form-control" id="Name"></td>
            <td><input type="text" name="minSalary" class="form-control" id="Min"></td>
            <td><input type="text" name="maxSalary" class="form-control" id="Max"></td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
        </table>

        <div align="center">
          <button type="submit" name="create" class="btn btn-dark"> <h4> Add </h4> </button>
        </div>
     </form>
   </div>
   <!---------------------------------------------------------------------------------------------------------------->


   <!--______________________________________________OK and Cancel__________________________________________________-->
   			<form method="post">
					<div class="OKCancel">
						<button type="button" class="btn btn-dark" onclick="window.location.href = 'NewDepartment.php';">OK</button>
						<button type="button" class="btn btn-dark" onclick="window.location.href = 'CancelDepartment.php';">Cancel</button>
					</div>
   			</form>
   <!---------------------------------------------------------------------------------------------------------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
