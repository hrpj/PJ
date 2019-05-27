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
$departmentName = mysqli_real_escape_string($conn, $_REQUEST['departmentName']);
$branchName = $_SESSION["BRANCH"];
$_SESSION["BRANCH"] = $branchName;


if (isset($_POST['create']))
{
  //create
  $sql = "INSERT INTO department (departmentID, departmentName, BranchName)
  VALUES (NULL, '$departmentName', '$branchName')";

  if ($conn->query($sql) === TRUE)
  {
    $result = mysqli_query($conn,"SELECT d.departmentID AS departmentID
                                  FROM department d
                                  WHERE departmentName LIKE '$departmentName'
                                  AND BranchName LIKE '$branchName'");
    $row = mysqli_fetch_array($result);
    $_SESSION["DEPARTMENT"] = $row['departmentID'];

    header('Location: http://localhost/HRPJ/HR/PositionandSalary.php');
  }
  else
  {
    echo "Fail to insert, try again later";
  }
  //end create
}
else if (isset($_POST['edit']))
{
  $whichID = $_POST['edit'];
  //edit
  $result = mysqli_query($conn,"SELECT d.departmentID AS departmentID
                                FROM department d
                                WHERE departmentName LIKE '$departmentName'
                                AND BranchName LIKE '$branchName'");
  $row = mysqli_fetch_array($result);
  $_SESSION["DEPARTMENT"] = $row['departmentID'];
  //currently not doing anything
  header('Location: http://localhost/HRPJ/HR/editDe.php');
  //end edit
}
else if (isset($_POST['delete']))
{
  //delete
  $whichID = $_POST['delete'];
  $sql = "DELETE FROM department WHERE departmentID='$whichID'";
  if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.";
    header('Location: http://localhost/HRPJ/HR/NewDepartment.php');
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
  }
  //end delete
}

$conn->close();

?>
