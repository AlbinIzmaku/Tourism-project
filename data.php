<?php
  
  if(isset($_GET['submit'])) {
    //Europe Data
    $selectedContinent = $_GET['continents'];
    $selectedCity = $_GET['cities'];
    $selectedHotel = $_GET['hotels'];
    $StartDate = date("F j, Y", strtotime($_GET['start-date']));
    $EndDate = date('F j, Y', strtotime($_GET['end-date']));
    echo $selectedContinent;
  }else {
    echo "Albin";
  }
  if(isset($_GET['submit'])){
    //Bus Data
    $selectedPeople = $_GET['people'];
    $selectedChilds = $_GET['childs'];
    $selectedDirection = $_GET['yesNo'];
    $selectedBadrooms = $_GET['badrooms'];
    $selectedCloseBeach = $_GET['beach'];
    echo $selectedPeople;
  }
  if(isset($_GET['submit']))
  {
    //ContactUs Data
    $cName = $_GET['name'];
    $cEmail = $_GET['email'];
    $cSubject = $_GET['subject'];
    $cMessage = $_GET['message'];
    echo $cName;
  }
  if(isset($_GET['submit'])){
    //SignUp Data
    $sName = $_GET['sName'];
    $sLastName = $_GET['sLastName'];
    $sEmail = $_GET['sEmail'];
    $sPassword = $_GET['sPassword'];
    $sCpassword = $_GET['sCpassword'];
    $sBday = $_GET['sBday'];
    $sPhone = $_GET['sPhone'];
  }
  if(isset($_GET['submit'])){
    //LogIn Data
    $lEmail = $_GET['lEmail'];
    $lPassword = $_GET['lPassword'];
  }

  // header("Location: logIn.php?sEmail=" . urlencode($sEmail) . "&sPassword=" . urlencode(($sPassword)));
  // exit(); 
  
?>