<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tourismdata";

  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed" . mysqli_connect_error());

  if(isset($_GET['lEmail']) && isset($_GET['lPassword'])) {
    $lEmail = $_GET['lEmail'];
    $lPassword = $_GET['lPassword'];
  }

  $sql = "INSERT INTO `logIn` (`email`, `password`) VALUES ('$lEmail', '$lPassword')";

  $query = mysqli_query($conn, $sql);
  if($query) {
    echo "Entry Successfull";
  }else {
    echo "Error Occurred";
  }
  
  header('Location: logIn.php');
?>