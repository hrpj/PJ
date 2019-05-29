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

if ($staffID !== "") {//Case 3 var
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT * FROM staff WHERE staffID LIKE '$staffID'";
}
else if($branchName === "" && $departmentName === "" && $positionName === "") {
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT staffName ,staffID FROM staff";
}
else if($branchName === "" && $departmentName === "") {//Case 2 var
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT s.staffName AS staffName,s.staffID AS staffID
        FROM staff s, position p
        WHERE s.positionID = p.positionID
        AND p.positionName LIKE '$positionName'";
}
else if($positionName === "" && $departmentName === "") {
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT s.staffName AS staffName,s.staffID AS staffID
        FROM staff s, position p, department d, branch b
        WHERE s.positionID = p.positionID AND p.departmentID = d.departmentID AND d.BranchName = b.branchName
        AND b.branchName LIKE '$branchName'";
}
else if($branchName === "" && $positionName === "") {
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT s.staffName AS staffName,s.staffID AS staffID
        FROM staff s, position p, department d, branch b
        WHERE s.positionID = p.positionID AND p.departmentID = d.departmentID
        AND d.departmentName LIKE '$departmentName'";
}
else if($branchName === "") {//Case 1 Var
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT s.staffName AS staffName,s.staffID AS staffID
        FROM staff s, position p, department d, branch b
        WHERE s.positionID = p.positionID AND p.departmentID = d.departmentID AND d.BranchName = b.branchName
        AND d.departmentName LIKE '$departmentName' AND p.positionName LIKE '$positionName'";
}
else if($positionName === "") {
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT s.staffName AS staffName,s.staffID AS staffID
        FROM staff s, position p, department d, branch b
        WHERE s.positionID = p.positionID AND p.departmentID = d.departmentID AND d.BranchName = b.branchName
        AND d.departmentName LIKE '$departmentName' AND b.branchName LIKE '$branchName'";
}
else if($departmentName === "") {
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT s.staffName AS staffName,s.staffID AS staffID
        FROM staff s, position p, department d, branch b
        WHERE s.positionID = p.positionID AND p.departmentID = d.departmentID AND d.BranchName = b.branchName
        AND p.positionName LIKE '$positionName' AND b.branchName LIKE '$branchName'";
}
else{
  $_SESSION["SQL"] = $sql = "SELECT DISTINCT s.staffName AS staffName,s.staffID AS staffID
        FROM staff s, position p, department d, branch b
        WHERE s.positionID = p.positionID AND p.departmentID = d.departmentID AND d.BranchName = b.branchName
        AND p.positionName LIKE '$positionName' AND b.branchName LIKE '$branchName' AND d.departmentName LIKE '$departmentName'";
}

header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/EditStaffList.php');

$conn->close();
?>
