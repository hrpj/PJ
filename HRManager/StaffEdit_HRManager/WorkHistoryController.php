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
$staffID = $_SESSION["CR_STAFFID"];
$company = mysqli_real_escape_string($conn, $_REQUEST['company']);
$startDate = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
$endDate = mysqli_real_escape_string($conn, $_REQUEST['endDate']);
$departmentBefore = mysqli_real_escape_string($conn, $_REQUEST['departmentBefore']);
$PositionBefore = mysqli_real_escape_string($conn, $_REQUEST['positionBefore']);


if (isset($_POST['create']))
{
  //create
  $sql = "INSERT INTO workinghistory (staffID, company, departmentBefore, PositionBefore, startDate, endDate)
  VALUES ('$staffID', '$company', '$departmentBefore', '$PositionBefore', '$startDate', '$endDate')";

  if ($conn->query($sql) === TRUE)
  {
    echo "Success";
    header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/WorkHistory.php');
  }
  else
  {
    echo "Fail to insert, try again later";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  //end create
}
else if (isset($_POST['edit']))
{
  $whichTime = $_POST['edit'];
  //edit
  $_SESSION["STARTDATE"] = $whichTime;
  //currently not doing anything
  header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/WorkHistoryEdit.php');
  //end edit
}
else if (isset($_POST['delete']))
{
  //delete
  $whichTime = $_POST['delete'];
  $sql = "DELETE FROM workinghistory WHERE startDate='$whichTime' AND staffID='$staffID'";
  if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.";
    header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/WorkHistory.php');
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  //end delete
}
else if (isset($_POST['EditSubmit'])) {
  $whichTime = $_SESSION["STARTDATE"];
  unset($_SESSION['STARTDATE']);
  $sql = "UPDATE workinghistory
          SET company='$company', startDate='$startDate', endDate='$endDate'
            , departmentBefore='$departmentBefore', PositionBefore='$PositionBefore'
          WHERE startDate='$whichTime' AND staffID='$staffID'";
  if(mysqli_query($conn, $sql)){
    echo "Record was update successfully.";
    header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/WorkHistory.php');
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
}

$conn->close();

?>
