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
      $address = $_POST['address'];
      $type = $_POST['type'];
      $owner = $_GET['owner'];
      $open = $_POST['Opening_time'];
      $close = $_POST['Closing_time'];

var_dump($_POST);
        
    addRestaurant($name, $type, $description,$address, $owner, $open, $close);
    header('Location: ../home.php');
?>



