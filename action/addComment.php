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
      $content = htmlentities($_POST['content'], ENT_QUOTES, "UTF-8");
      $evaluation = $_POST['evaluation'];

    addComment($restaurantId, $userId, $content, $evaluation);
?>



