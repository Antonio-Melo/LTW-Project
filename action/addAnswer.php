<?php
    echo('include addAnswer.php');
    include_once('../database/connection.php');
    include_once('../database/comment.php');

    $restaurantId = $_POST('restaurantId');
    $userId = $_POST('userId');
    $commentId = $_POST('commentId');
    $content = $_POST('content');
    
    addAnswer($restaurantId, $userId, $commentId, $content);
   header('Location: ../templates/listRestaurant.php');
?>



