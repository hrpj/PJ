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

$staffID = $_SESSION["CR_STAFFID"];
$staffName = mysqli_real_escape_string($conn, $_REQUEST['staffName']);
$positionID = mysqli_real_escape_string($conn, $_REQUEST['positionID']);
$bankAccount = mysqli_real_escape_string($conn, $_REQUEST['bankAccount']);
$dateOfBirth = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
$gender = $_POST['gender'];
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$telNo = mysqli_real_escape_string($conn, $_REQUEST['telNo']);
$startDate = mysqli_real_escape_string($conn, $_REQUEST['startDate']);


  //___________________________________________________Insert Picture__________________________________________________
  $ext = pathinfo(basename($_FILES['picture']['name']), PATHINFO_EXTENSION);
  $newImageName = 'img_'.uniqid().'.'.$ext;
  $imagePath = "../../staffImage/";
  $uploadPath = $imagePath.$newImageName;
  //___________________________________________upload__________________________________________________________

  $successs = move_uploaded_file($_FILES['picture']['tmp_name'],$uploadPath);

  if($successs){
    $picture = $newImageName; //
  //__________________________________________Insert all__________________________________________________________
    $sql = "UPDATE staff
              SET staffName = '$staffName',
                  positionID = '$positionID',
                  bankAccount = '$bankAccount',
                  dateOfBirth = '$dateOfBirth',
                  gender = '$gender',
                  address = '$address',
                  telNo = '$telNo',
                  startDate = '$startDate',
                  picture = '$picture'
            WHERE staffID = '$staffID'";

    if ($conn->query($sql) === TRUE)
    {
      $_SESSION["CR_STAFFID"] = $staffID;
      echo "Insert successfully";
      header('Location: http://localhost/HRPJ/HRManager/StaffEdit_HRManager/WorkHistory.php');
      //echo "<a href=\"http://localhost/HRPJ/HRManager/WelcomeSignoutForHR.php\">GO BACK</a>";
    }
    else
    {
      echo "Fail to insert database, try again later";
      echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    }
  }
  else{
    echo "Error insert picture";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
  }

$conn->close();

?>
