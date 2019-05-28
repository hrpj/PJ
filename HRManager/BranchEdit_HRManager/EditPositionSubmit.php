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
$newName = mysqli_real_escape_string($conn, $_REQUEST['newName']);
$newMax = mysqli_real_escape_string($conn, $_REQUEST['newMax']);
$newMin = mysqli_real_escape_string($conn, $_REQUEST['newMin']);
$positionID = $_SESSION["POSID"];

$sql = "UPDATE position SET positionName='$newName', maxSalary='$newMax', minSalary='$newMin' WHERE positionID = $positionID";

if ($conn->query($sql) === TRUE) {
  echo "Update Success <br>";
  echo "<a href=\"javascript:history.go(-2)\">GO BACK</a>";
}
else {
    echo "Error updating record: " . $conn->error;
    echo "<a href=\"javascript:history.go(-2)\">GO BACK</a>";
}



$conn->close();

?>
