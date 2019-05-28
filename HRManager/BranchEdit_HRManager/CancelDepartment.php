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

$branchName = $_SESSION["BRANCH"];

// Escape user inputs for security
$departmentID = $_SESSION["DEPARTMENT"];

//Delete
$sql = "DELETE FROM department WHERE departmentID='$departmentID'";


if ($conn->query($sql) === TRUE) {
  $_SESSION["DEPARTMENT"] = "";
  $_SESSION["BRANCH"] = $branchName;
  header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewDepartment.php');
} else {
  echo "Something went wrong, can't delete department";
  //header('Location: http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php');
}

$conn->close();

?>
