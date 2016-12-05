<?php
    echo('include addComment.php');
    include_once('../database/connection.php');
    include_once('../database/comment.php');


      $restaurantId = $_GET['restaurantId'];
      $userId = $_GET['userId'];
      $content = $_POST['content'];
      $evaluation = $_POST['evaluation'];

    addComment($restaurantId, $userId, $content, $evaluation);
   header('Location: ../templates/listRestaurant.php');
?>



