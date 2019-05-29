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
$staffID = $_SESSION["CR_STAFFID"];
unset($_SESSION['CR_STAFFID']);

if (isset($_POST['Cancel'])) {
  //Delete
  $sql = "DELETE FROM staff WHERE staffID='$staffID'";


  if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php');
  } else {
    echo "Something went wrong, can't delete";
    //header('Location: http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php');
  }
}
else
{
  header('Location: http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php');
}
$conn->close();

?>
