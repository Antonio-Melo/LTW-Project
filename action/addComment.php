<?php
    echo('include addComment.php');
    include_once('../database/connection.php');
    include_once('../database/comment.php');

      $name = $_POST['name'];
      $description = $_POST['description'];
      $type = $_POST['type'];
      $owner = $_GET['owner'];
        
    addRestaurant($db, $name, $type, $description, $owner);
    header('Location: ../templates/addRestaurant_body.php');
?>



