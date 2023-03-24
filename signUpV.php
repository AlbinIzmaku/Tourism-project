<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tourismdata";

  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed:" . mysqli_connect_error());

  if(isset($_GET['sName']) && isset($_GET['sLastName']) && isset($_GET['sEmail']) && isset($_GET['sPassword']) && isset($_GET['sCpassword']) && isset($_GET['sBday']) && isset($_GET['sPhone'])) {
    $sName = $_GET['sName'];
    $sLastName = $_GET['sLastName'];
    $sEmail = $_GET['sEmail'];
    $sPassword = $_GET['sPassword'];
    $sCpassword = $_GET['sCpassword'];
    $sBday = $_GET['sBday'];
    $sPhone = $_GET['sPhone'];
  }

  $sql = "INSERT INTO `signUP` (`name`, `lastname`, `email`, `password`, `cpassword`, `bday`, `phone`) VALUES ('$sName', '$sLastName', '$sEmail', '$sPassword', '$sCpassword', '$sBday', '$sPhone')";

  $query = mysqli_query($conn, $sql);
  if($query) {
    echo "Entry Successfull";
  }else {
    echo "Error Occurred";
  }

  header("Location: logIn.php?sEmail=" . urlencode($sEmail) . "&sPassword=" . urlencode(($sPassword)));
  exit(); 
?>