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
$startDate = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
$fName = mysqli_real_escape_string($conn, $_REQUEST['fName']);
$lName = mysqli_real_escape_string($conn, $_REQUEST['lName']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$telNo = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
$dateOfBirth = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
$gender = $_POST['gender'];  // Storing Selected Value In Variable
$bankAccout = mysqli_real_escape_string($conn, $_REQUEST['bankAccount']);
$branchName = $_POST['branchName'];
$departmentName = $_POST['departmentName'];
$positionName = $_POST['positionName'];
$staffID = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
//echo "You have selected :" .$selected_val;  // Displaying Selected Value




$sql = "INSERT INTO branch (branchName, address, telNo)
VALUES ('$branchName', '$address', '$telNo')";


if ($conn->query($sql) === TRUE) {
  $_SESSION["BRANCH"] = $branchName;
  header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewDepartment.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewBranchForHR.html');
}




$conn->close();

?>
