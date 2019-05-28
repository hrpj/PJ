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
$branchName = $_SESSION["BRANCH"];

//Delete
$sql = "DELETE FROM branch WHERE branchName='$branchName'";


if ($conn->query($sql) === TRUE) {
  $_SESSION["BRANCH"] = "";
  header('Location: http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php');
} else {
  echo "Something went wrong, can't delete branch";
  //header('Location: http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php');
}

$conn->close();

?>
