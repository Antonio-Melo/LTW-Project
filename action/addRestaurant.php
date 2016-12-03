<?php
    echo('include addRestaurante.php');
     include_once('../database/connection.php');
    include_once('../database/restaurant.php');

      $name = $_POST['name'];
      $description = $_POST['description'];
      $type = $_POST['type'];
        
    addRestaurant($db, $name, $type, $description);
    header('Location: ../templates/addRestaurant_body.php');
?>



