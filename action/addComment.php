<?php
    echo('include addComment.php');
    session_start();
    include_once('../database/connection.php');
    include_once('../database/comment.php');

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    if(!isset($_SESSION['username'])){
        exit();
    }

      $restaurantId = $_GET['restaurantId'];
      $userId = $_GET['userId'];
      $content = $_POST['content'];
      $evaluation = $_POST['evaluation'];

    addComment($restaurantId, $userId, $content, $evaluation);
?>



