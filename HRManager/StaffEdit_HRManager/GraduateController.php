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
$university = mysqli_real_escape_string($conn, $_REQUEST['university']);
$degree = mysqli_real_escape_string($conn, $_REQUEST['degree']);
$field = mysqli_real_escape_string($conn, $_REQUEST['field']);
$year = mysqli_real_escape_string($conn, $_REQUEST['year']);


if (isset($_POST['create']))
{
  //create
  $sql = "INSERT INTO education (staffID, university, degree, field, year)
  VALUES ('$staffID', '$university', '$degree', '$field', '$year')";

  if ($conn->query($sql) === TRUE)
  {
    echo "Success";
    header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/GraduateHistory.php');
  }
  else
  {
    echo "Fail to insert, try again later";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  //end create
}
else if (isset($_POST['edit']))
{
  $whichYear = $_POST['edit'];
  //edit
  $_SESSION["YEAR"] = $whichYear;
  //currently not doing anything
  header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/GraduateEdit.php');
  //end edit
}
else if (isset($_POST['delete']))
{
  //delete
  $whichYear = $_POST['delete'];
  $sql = "DELETE FROM education WHERE year='$whichYear' AND staffID='$staffID'";
  if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.";
    header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/GraduateHistory.php');
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  //end delete
}
else if (isset($_POST['EditSubmit'])) {
  $whichYear = $_SESSION["STARTDATE"];
  unset($_SESSION['YEAR']);
  $sql = "UPDATE education
          SET university='$university', degree='$degree', field='$field'
            , year='$year'
          WHERE year='$whichYear' AND staffID='$staffID'";
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
