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

if ($_POST["Submit"] === 'SubmitBName') {
  //___________________________________________________Form1__________________________________________________________
  $_SESSION["STARTDATE"] = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
  $_SESSION["FNAME"] = mysqli_real_escape_string($conn, $_REQUEST['fName']);
  $_SESSION["LNAME"] = mysqli_real_escape_string($conn, $_REQUEST['lName']);
  $_SESSION["ADDRESS"] = mysqli_real_escape_string($conn, $_REQUEST['address']);
  $_SESSION["TELNO"] = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
  $_SESSION["DATEOFBIRTH"] = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
  $_SESSION["GENDER"] = $_POST['gender'];  // Storing Selected Value In Variable
  $_SESSION["BANKACCOUNT"] = mysqli_real_escape_string($conn, $_REQUEST['bankAccount']);
  $_SESSION["BRANCHNAME"] = $_POST['branchName'];
  header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/NewStaff2.php');
}
else if ($_POST["Submit"] === 'SubmitDName') {
  //_________________________________________________________Form2_____________________________________________
  $_SESSION["STARTDATE"] = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
  $_SESSION["FNAME"] = mysqli_real_escape_string($conn, $_REQUEST['fName']);
  $_SESSION["LNAME"] = mysqli_real_escape_string($conn, $_REQUEST['lName']);
  $_SESSION["ADDRESS"] = mysqli_real_escape_string($conn, $_REQUEST['address']);
  $_SESSION["TELNO"] = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
  $_SESSION["DATEOFBIRTH"] = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
  $_SESSION["GENDER"] = $_POST['gender'];  // Storing Selected Value In Variable
  $_SESSION["BANKACCOUNT"] = mysqli_real_escape_string($conn, $_REQUEST['bankAccount']);
  $_SESSION["BRANCHNAME"] = $_POST['branchName'];
  $_SESSION["DEPARTMENT"] = $_POST['departmentID'];
  header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/NewStaff3.php');
}
else if ($_POST["Submit"] === 'Submit') {
  //___________________________________________________Form3_______________________________________________________________

  $startDate = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
  $fName = mysqli_real_escape_string($conn, $_REQUEST['fName']);
  $lName = mysqli_real_escape_string($conn, $_REQUEST['lName']);
  $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
  $telNo = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
  $dateOfBirth = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
  $gender = $_POST['gender'];  // Storing Selected Value In Variable
  $bankAccount = mysqli_real_escape_string($conn, $_REQUEST['bankAccount']);
  $positionID = $_POST['positionID'];
  $password = $_POST['password'];

  //___________________________________________  Generate staffID _________________________ _______________

  $sql = "SELECT count(*) AS total FROM staff WHERE positionID LIKE $positionID";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);

  if($row['total'] === '0')//No
  {
    $staffID = 1000000000000 + (int)$positionID*100000 + 1;
    $staffID = ''.$staffID;
    $staffID = substr($staffID, 1);
  }
  else//Yes
  {
    //After the last ID
    $sql = "SELECT MAX(staffID) AS lastID FROM staff WHERE positionID LIKE '$positionID'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $staffID = 1000000000000 + (int)$row['lastID'] + 1;
    $staffID = ''.$staffID.'';
    $staffID = substr($staffID, 1);
  }

  //___________________________________________________Insert Picture__________________________________________________
  $ext = pathinfo(basename($_FILES['picture']['name']), PATHINFO_EXTENSION);
  $newImageName = 'img_'.$uniqueid().'.'.$ext;

  echo "SUCCESS".$staffID;

  echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
}

// Escape user inputs for security
/*$startDate = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
$fName = mysqli_real_escape_string($conn, $_REQUEST['fName']);
$lName = mysqli_real_escape_string($conn, $_REQUEST['lName']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$telNo = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
$dateOfBirth = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
$gender = $_POST['gender'];  // Storing Selected Value In Variable
$bankAccout = mysqli_real_escape_string($conn, $_REQUEST['bankAccount']);
$branchName = $_POST['branchName'];
$departmentName = $_POST['departmentName'];
$positionName = $_POST['positionName'];
$staffID = mysqli_real_escape_string($conn, $_REQUEST['telNo']);*/
//echo "You have selected :" .$selected_val;  // Displaying Selected Value




$conn->close();

?>
