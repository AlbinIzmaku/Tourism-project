<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tourismdata";

  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed:" . mysqli_connect_error());

  if(isset($_GET['people']) && isset($_GET['childs']) && isset($_GET['yesNo']) && isset($_GET['badrooms']) && isset($_GET['beach'])) {
    $selectedPeople = $_GET['people'];
    $selectedChilds = $_GET['childs'];
    $selectedDirection = $_GET['yesNo'];
    $selectedBadrooms = $_GET['badrooms'];
    $selectedCloseBeach = $_GET['beach'];
  }

  $sql = "INSERT INTO `bus` (`people`, `childs`, `dirSea`, `badrooms`, `closebeach`) VALUES ('$selectedPeople', '$selectedChilds', '$selectedDirection', '$selectedBadrooms', '$selectedCloseBeach')";

  $query = mysqli_query($conn, $sql);
  if($query) {
    echo "Entry Successfull";
  }else {
    echo "Error Occurred";
  }

  header('Location: bus.php');


?>