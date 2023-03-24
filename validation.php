<!DOCTYPE html>
<html>
  <head>
  <?php include_once 'head.php'; ?>
  </head>

  <?php
  $continent = $_GET['continents'];

  if($continent == 'Europe') {
    $cities = array('Paris', 'London', 'Rome', 'Madrid', 'Berlin');
  }elseif($continent == 'America') {
    $cities = array('New York', 'Los Angeles', 'Mexico City', 'Brazili', 'San Mario');
  }elseif($continent == 'Asia') {
    $cities = array('Stambol', 'Moscow', 'Bejing', 'Tokyo', 'New Dehli');
  }elseif($continent == 'Africa') {
    $cities = array('Cairo', 'Lusaka', 'Maputo', 'Moroni', 'Rabat');
  }elseif($continent == 'Antarctica') {
    $cities = array('South Shetland Islands', 'Antarctic Peninsula', 'Drake Passage', 'South Georgia', 'Falkland Islands');
  }else {
    $cities = array();
  }

  $options = '';
  foreach($cities as $city) {
    $options .= '<option value="' . $city . '">' . $city . '</option>';
  }

  echo $options;
?>
</html>