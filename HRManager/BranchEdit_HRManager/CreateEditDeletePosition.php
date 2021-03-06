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

$branchName = $_SESSION["BRANCH"];

// Escape user inputs for security
$positionName = mysqli_real_escape_string($conn, $_REQUEST['positionName']);
$minSalary = mysqli_real_escape_string($conn, $_REQUEST['minSalary']);
$maxSalary = mysqli_real_escape_string($conn, $_REQUEST['maxSalary']);
$departmentID = $_SESSION["DEPARTMENT"];



//-------------------------ID generate------------------------------
//Data Exist?
$sql = "SELECT count(*) AS total FROM position WHERE departmentID LIKE $departmentID";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row['total'] === '0')//No
{
  $positionID = 10000000 + $departmentID*1000 + 1;
  $positionID = ''.$positionID;
  $positionID = substr($positionID, 1);
}
else//Yes
{
  //After the last ID
  $sql = "SELECT MAX(positionID) AS lastID FROM position WHERE departmentID LIKE '$departmentID'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);

  $positionID = 10000000 + (int)$row['lastID'] + 1;
  $positionID = ''.$positionID.'';
  $positionID = substr($positionID, 1);
}

$_SESSION["BRANCH"] = $branchName;
$_SESSION["DEPARTMENT"] = $departmentID;


if (isset($_POST['create'])) {
  //create
  $sql = "INSERT INTO position (positionID, positionName, minSalary, maxSalary, departmentID)
  VALUES ('$positionID', '$positionName', '$minSalary', '$maxSalary', '$departmentID')";

  if ($conn->query($sql) === TRUE) {
    $_SERVER['REQUEST_URI'];
    echo "Insert Success <br>";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  else
  {
    echo "Fail to insert, try again later <br>";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  //end create
}
else if (isset($_POST['edit']))
{
  $_SESSION["POSID"] = $_POST['edit'];
  $whichID = $_POST['delete'];
  //edit
  //echo "currently not doing anything";

  header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/EditPosition.php');
  //end edit
}
else if (isset($_POST['delete']))
{
  //delete
  $whichID = $_POST['delete'];
  $sql = "DELETE FROM position WHERE positionID='$whichID'";
  if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.<br>";
    $_SERVER['REQUEST_URI'];
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
  }
  //end delete
}


$conn->close();

?>
