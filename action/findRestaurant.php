<?php
  include_once('../database/connection.php');
  include_once('../database/restaurant.php');

  //session_start();
  $restaurant = trim(strip_tags($_POST['restaurant']));
  var_dump($restaurant);

  $restaurantf = getRestaurant($restaurant);
  var_dump($restaurantf);
?>
