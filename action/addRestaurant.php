<?php
    echo('include addRestaurante.php');
     include_once('../database/connection.php');
    include_once('../database/restaurant.php');
    
      $name = $_POST['name'];
      $description = $_POST['description'];
      $type = $_POST['type'];
      $owner = $_GET['owner'];
        
    addRestaurant($name, $type, $description, $owner);
    header('Location: ../templates/addRestaurant_body.php');
?>



