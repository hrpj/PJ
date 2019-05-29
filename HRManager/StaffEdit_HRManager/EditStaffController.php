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

$staffID = $_SESSION["staffID"] = mysqli_real_escape_string($conn, $_REQUEST['staffID']);
$branchName = $_SESSION["branchName"] = mysqli_real_escape_string($conn, $_REQUEST['branchName']);
$departmentName = $_SESSION["departmentName"] = mysqli_real_escape_string($conn, $_REQUEST['departmentName']);
$positionName = $_SESSION["positionName"] = mysqli_real_escape_string($conn, $_REQUEST['positionName']);

if ($staffID === "") {//Case 3 var
  $sql = "SELECT * FROM staff WHERE staffID LIKE '$staffID'";
}
else if($branchName === "" && $departmentName === "" && $positionName === "") {
  $sql = "SELECT * FROM staff";
}
else if($branchName === "" && $departmentName === "") {//Case

}
else if($branchName === "" && $departmentName === "") {

}
else if($branchName === "" && $departmentName === "") {

}


$conn->close();

?>
