<?php
    echo('include addRestaurante.php');
    session_start();
     include_once('../database/connection.php');
    include_once('../database/restaurant.php');
    
     
     if(!isset($_SESSION['username'])){
        exit();
    }

      $name = $_POST['name'];
      $description = $_POST['description'];
      $type = $_POST['type'];
      $owner = $_GET['owner'];
        
    addRestaurant($name, $type, $description, $owner);
    header('Location: ../home.php');
?>



