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


if (isset($_POST['edit']))
{
  //edit
  $_SESSION["BRANCH"] = $_POST['edit'];
  //currently not doing anything
  header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/EditBranch2.php');
  //end edit
}
else if (isset($_POST['delete']))
{
  //delete
  $whichBranch = $_POST['delete'];
  $sql = "DELETE FROM branch WHERE branchName='$whichBranch'";
  if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.";
    header('Location: http://localhost/HRPJ/HRManager/BranchEdit_HRManager/EditBranch1.php');
  }
  else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
  }
  //end delete
}

$conn->close();

?>
