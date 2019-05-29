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

if (isset($_POST['edit']))
{
  $whichStaff = $_POST['edit'];
  //edit
  $_SESSION["CR_STAFFID"] = $whichStaff;
  //currently not doing anything
  header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/EditStaffInfo.php');
  //end edit
}
else if (isset($_POST['delete']))
{
  //delete
  $whichStaff = $_POST['delete'];
  $sql = "DELETE FROM staff WHERE staffID='$whichStaff'";
  if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  //end delete
}
else if (isset($_POST['EditSubmit'])) {
  $whichYear = $_SESSION["YEAR"];
  unset($_SESSION['YEAR']);
  $sql = "UPDATE education
          SET university='$university', degree='$degree', field='$field'
            , year='$year'
          WHERE year='$whichYear' AND staffID=$staffID";
  if(mysqli_query($conn, $sql)){
    echo "Record was update successfully.";
    header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/GraduateHistory.php');
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
}

$conn->close();

?>
