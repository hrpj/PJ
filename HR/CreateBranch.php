<?php
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
$branchName = mysqli_real_escape_string($link, $_REQUEST['branchName']);
$address = mysqli_real_escape_string($link, $_REQUEST['branchAddress']);
$telNo = mysqli_real_escape_string($link, $_REQUEST['telNo']);
$code = mysqli_real_escape_string($link, $_REQUEST['manageID']);


$sql = "INSERT INTO branch (branchName, address, tellNo, code)
VALUES ($branchName, $address, $telNo, $code)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
