<?php
    echo('include addRestaurante.php');
    session_start();
     include_once('../database/connection.php');
    include_once('../database/restaurant.php');
    
     
     if(!isset($_SESSION['username'])){
        exit();
    }
    echo('aqui');

      $name = $_POST['name'];
      $description = $_POST['description'];
      $type = $_POST['type'];
      $owner = $_GET['owner'];
      $open = $_POST['open'];
      $close = $_POST['close'];

var_dump($_POST);
        
    addRestaurant($name, $type, $description, $owner, $open, $close);
    header('Location: ../home.php');
?>



