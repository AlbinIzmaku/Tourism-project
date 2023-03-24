<!DOCTYPE html>
<html>
  <head>
    <?php include_once 'head.php'; ?>
    <link rel="stylesheet" href="europe.css">
  </head> 
  <body>
    <?php include_once 'header.php'; ?>

    <form action="europeV.php" method="get">
      <label for="continents">Select a continent</label>
      <select name="continents" id="continents">
        <option value="a">--Choose a Continent--</option>
        <option value="Europe">Europe</option>
        <option value="America">America</option>
        <option value="Asia">Asia</option>
        <option value="Africa">Africa</option>
        <option value="Antarctica">Antarctica</option>
      </select> 
      <br>
      <label for="cities">Select a city</label>
      <select name="cities" id="cities">
        <option value="a">--Choose a city--</option>
      </select>
      <br>
      <label for="hotels">Select a hotel</label>
      <select name="hotels" id="hotels">
        <option value="">--Choose a hotel--</option>
        <option value="Hotel A">Hotel A</option>
        <option value="Hotel B">Hotel B</option>
        <option value="Hotel C">Hotel C</option>
        <option value="Hotel D">Hotel D</option>
        <option value="Hotel E">Hotel E</option>
      </select>
      <br>
      <label for="start-date">Start Date:</label>
      <input type="date" id="start-date" name="start-date">
      <br>
      <label for="end-date">End Date:</label>
      <input type="date" id="end-date" name="end-date">
      <br>
      <input type="submit" value="submit">
    </form>


    <script src="script.js"></script>
    <script>
      var continentSelect = document.getElementById('continents');
      var citySelect = document.getElementById('cities');

      continentSelect.addEventListener('change', function() {
        var selectedContinent = continentSelect.value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if(this. readyState == 4 && this.status == 200) {
            citySelect.innerHTML = this.responseText;
          }
        };
        xhr.open('GET', 'validation.php?continents=' + selectedContinent, true);
        xhr.send();
      });
    </script>
  </body>
</html>