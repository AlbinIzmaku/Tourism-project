<!DOCTYPE html>
<html>
  <head>
    <?php include_once "head.php" ?>
    <link rel="stylesheet" href="contactUs.css">
    <style>
      input {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php include_once "header.php" ?>

    <h2>Contact Us</h2>
    <p>Please use this form to contact us and we will get back to you as soon as possible!</p>

    <form action="contactUsV.php" method="get">
      <label for="name">Name</label>
      <input type="text" id="name" name="name">
      <br>
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email">
      <br>
      <label for="subject">Subject</label>
      <input type="text" name="subject" id="subject">
      <br>
      <label for="message">Message</label>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter message here..."></textarea>
      <br>
      <input type="submit" value="Send Message" onclick="myFunction()">
    </form>

    <script src="script.js"></script>
    <script>
      function myFunction() {
        alert("We will contact you soon!")
      }
    </script>
  </body>
</html>