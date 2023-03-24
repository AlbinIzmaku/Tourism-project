<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tourismdata";

 
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed:" . mysqli_connect_error());
    if(isset($_GET['continents']) && isset($_GET['cities']) && isset($_GET['hotels']) && isset($_GET['start-date']) && isset($_GET['end-date'])) {
      $selectedContinent = $_GET['continents'];
      $selectedCity = $_GET['cities'];
      $selectedHotel = $_GET['hotels'];
      $StartDate = $_GET['start-date'];
      $EndDate = $_GET['end-date'];

      $sql = "INSERT INTO `europe` (`continent`, `city`, `hotel`, `sDate`, `eDate`) VALUES ('$selectedContinent', '$selectedCity', '$selectedHotel', '$StartDate', '$EndDate')";

      $query = mysqli_query($conn, $sql);
      if($query) {
        echo "Entry Successfull";
      }else {
        echo "Error Occurred";
      }
    }

  header('Location: europe.php');
  exit;
?>