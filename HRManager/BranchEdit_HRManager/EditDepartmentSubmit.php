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
$departmentName = mysqli_real_escape_string($conn, $_REQUEST['NewDepartmentName']);
$departmentID = $_SESSION["DEPARTMENT"];

$sql = "UPDATE department SET departmentName='$departmentName' WHERE departmentID = $departmentID";

if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/NewDepartment.php');
}
else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();

?>
