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
$branchName = mysqli_real_escape_string($conn, $_REQUEST['branchName']);
$address = mysqli_real_escape_string($conn, $_REQUEST['branchAddress']);
$telNo = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
$code = mysqli_real_escape_string($conn, $_REQUEST['manageID']);


$sql = "INSERT INTO branch (branchName, address, tellNo, code)
VALUES ('$branchName', '$address', '$telNo', '$code')";


if ($conn->query($sql) === TRUE) {
  $_SESSION["BRANCH"] = $branchName;
  header('Location: http://localhost/HRPJ/HR/NewDepartment.php');
} else {
  header('Location: http://localhost/HRPJ/HR/NewBranchForHR.html');
}




$conn->close();

?>
