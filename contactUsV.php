<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tourismdata";

  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed:" . mysqli_connect_error());

  if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['subject']) && isset($_GET['message'])) {
    $cName = $_GET['name'];
    $cEmail = $_GET['email'];
    $cSubject = $_GET['subject'];
    $cMessage = $_GET['message']; 
  } 

  $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$cName', '$cEmail', '$cSubject', '$cMessage')";

  $query = mysqli_query($conn, $sql);
  if($query) {
    echo "Entry Successfull";
  }else {
    echo "Error Occurred";
  }

  header('Location: contactUs.php');
?>