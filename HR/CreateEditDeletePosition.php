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

// Escape user inputs for security
$positionName = mysqli_real_escape_string($conn, $_REQUEST['positionName']);
$minSalary = mysqli_real_escape_string($conn, $_REQUEST['minSalary']);
$maxSalary = mysqli_real_escape_string($conn, $_REQUEST['maxSalary']);
$departmentID = $_SESSION["DEPARTMENT"];

$sql = "SELECT positionID FROM position WHERE departmentID LIKE '$departmentID'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$positionID = 10000000 + (int)$departmentID*1000 + ;

if (isset($_POST['create'])) {
  //create
  $sql = "INSERT INTO position (positionID, positionName, minSalary, maxSalary, departmentID)
  VALUES ('$departmentID', '$departmentName', '$branchName')";

  if ($conn->query($sql) === TRUE) {
    $_SESSION["BRANCH"] = $branchName;
    header('Location: http://localhost/HRPJ/HR/NewDepartment.php');
  }
  else
  {
    echo "Fail to insert, try again later";
  }
  //end create
}
else if (isset($_POST['edit']))
{
  $whichID = $_POST['edit'];
  //edit
  //currently not doing anything
  header('Location: http://localhost/HRPJ/HR/NewDepartment.php');
  //end edit
}
else if (isset($_POST['delete']))
{
  //delete
  $whichID = $_POST['delete'];
  $sql = "DELETE FROM department WHERE departmentID='$whichID'";
  if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.";
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
  }
  //end delete
}



$_SESSION["BRANCH"] = $branchName;
$_SESSION["DEPARTMENT"] = $departmentID;

header('Location: http://localhost/HRPJ/HR/NewDepartment.php');

$conn->close();

?>
