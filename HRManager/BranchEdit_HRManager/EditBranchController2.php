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
$preBranchName = $_SESSION["BRANCH"];
// Escape user inputs for security
$branchName = mysqli_real_escape_string($conn, $_REQUEST['branchName']);
$address = mysqli_real_escape_string($conn, $_REQUEST['branchAddress']);
$telNo = mysqli_real_escape_string($conn, $_REQUEST['telNo']);

$sql = "UPDATE branch
        SET branchName='$branchName', address='$address', telNo='$telNo'
        WHERE branchName = '$preBranchName'";


if ($conn->query($sql) === TRUE) {
  $_SESSION["BRANCH"] = $branchName;
  header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewDepartment.php');
} else {
  echo "Error updating record: " . $conn->error;
  echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
}




$conn->close();

?>
