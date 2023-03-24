<!DOCTYPE html>
<html>
  <head>
    <?php include_once "head.php" ?>
    <link rel="stylesheet" href="logIn.css">
    <style>     
      input {
        text-align: center;
      }
    </style>
  </head> 
  <body>
    <?php include_once "header.php" ?>

    <form action="logInV.php" method="get">
      <label for="lEmail">Email</label>
      <input type="email" id="lEmail" name="lEmail" onkeyup="validateEmail()" required>
      <label id="message1" style="display:none; color:red;">Email does not match</label>
      <br>
      <label for="lPassword">Password</label>
      <input type="password" id="lPassword" name="lPassword" onkeyup="validatePassword()" required>
      <label id="message2" style="display:none; color: red;">Password does not match</label>
      <br>
      <input type="submit" value="Log In" onclick="myFunction()">
      <p id="var"></p>
    </form>

    <script src="script.js"></script>
    <script>
      var email = new URLSearchParams(window.location.search).get("sEmail");
      var lEmail = document.getElementById("lEmail").value;
      function validateEmail() {
        var cEmail = event.target.value;
        if(email == null) {
          document.getElementById("message1").style.display = "none";
        }else if(email != cEmail) {
          document.getElementById("message1").style.display = "block";
        }
        else{
          document.getElementById("message1").style.display = "none";
        }
      }
      var password = new URLSearchParams(window.location.search).get("sPassword");
      var lPassword = document.getElementById("lPassword").value;
      function validatePassword() {
        var cPassword = event.target.value;
        if(password == null) {
          document.getElementById("message2").style.display = "none";
        }else if(password != cPassword) {
          document.getElementById("message2").style.display = "block";
        }else {
          document.getElementById("message2").style.display = "none";
        }
      }
      function myFunction() {
        alert("You are logged in");
      }
    </script>
    
  </body>
</html>