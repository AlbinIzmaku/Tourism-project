<!DOCTYPE html>
<html>
  <head>
    <?php include_once 'head.php'; ?>
    <link rel="stylesheet" href="bus.css">
  </head>
  <body>
    <?php include_once 'header.php'; ?>

    <form action="busV.php" method="get" id="busForm">
      <label for="people">How many people</label>
      <input type="number" id="people" name="people">
      <br>
      <label for="childs">How many childs</label>
      <input type="number" id="childs" name="childs">
      <br>
      <p>Direction to sea</p>
      <input type="radio" id="yes" name="yesNo" value="Yes">
      <label for="yes">Yes</label>
      <input type="radio" id="no" name="yesNo" value="No">
      <label for="no">No</label>
      <br>
      <label for="badrooms">How many badrooms( + living room + bathroom)</label>
      <select name="badrooms" id="badrooms">
        <option value="a">Choose badrooms</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <br>
      <label for="beach">Close to beach(in meters)</label>
      <select name="beach" id="beach">
        <option value="200">200</option>
        <option value="300">300</option>
        <option value="400">400</option>
        <option value="500">500</option>
      </select>
      <br>
      <input type="submit" value="submit">
    </form>


    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      // $(document).ready(function() {
      //   $('#busForm').submit(function(event) {
      //     event.preventDefault(); // prevent default form submission
      //     $.ajax({
      //       url: 'data.php',
      //       method: 'get',
      //       data: $('#busForm').serialize(), // send form data
      //       success: function(response) {
      //         if (response.status === 'success') {
      //           alert('Thank you for submitting!');
      //         } else {
      //           alert('Oops! Something went wrong.');
      //         }
      //       }
            
      //     });
      //   });
      // });
    </script>
  </body>
</html>