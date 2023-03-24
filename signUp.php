<!DOCTYPE html>
<html>
  <head>
    <?php include_once "head.php" ?>
    <link rel="stylesheet" href="signUp.css">
  </head>
  <body>
    <?php include_once "header.php" ?>

    <form action="signUpV.php" method="get">
      <label for="sName">Name</label>
      <input type="text" id="sName" name="sName" required onkeyup="validateInputN(event)">
      <label id="message1" style="display:none; color:red;">Please enter only letters.</label>
      <br>
      <label for="sLastName">Last Name</label>
      <input type="text" id="sLastName" name="sLastName" required onkeyup="validateInputL(event)">
      <label id="message2" style="display:none; color:red;">Please enter only letters.</label>
      <br>
      <label for="sEmail">Email</label>
      <input type="email" id="sEmail" name="sEmail" required>
      <br>
      <label for="sPassword">Password</label>
      <input type="password" id="sPassword" name="sPassword" required>
      <br>
      <label for="sCpassword">Confirm Password</label>
      <input type="password" id="sCpassword" name="sCpassword" oninput="validatePasswords()" required >
      <label for="message3" id="message3" style="color: red; display: none;">Password don't match</label>
      <br>
      <label for="sBday">Birthday</label>
      <input type="date" id="sBday" name="sBday">
      <br>
      <label for="sPhone">Phone Number</label>
      <input type="tel" id="sPhone" name="sPhone" placeholder="+383 12-123-123" oninput="validatePhoneNumber()">
      <label for="message4" id="message4" style="display: none; color: red;">Please enter a valid phone number in the format +383 XX-XXX-XXX.</label>
      <br>
      <input type="submit" value="Sign Up" onclick="myFunction()">
    </form>
    
    <script src="script.js"></script>
    <script src="signUp.js"></script>
  </body>
</html>
 