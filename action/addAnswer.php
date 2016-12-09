<?php
    echo('include addAnswer.php');
    session_start();
    include_once('../database/connection.php');
    include_once('../database/comment.php');
    include_once('../database/answer.php');
    include_once('../database/user.php');

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    if(!isset($_SESSION['username'])){
        exit();
    }

    $info = getUser($_SESSION['username']);
    $userId = $info['id'];
    $commentId = $_POST['commentId'];
    $content = htmlentities($_POST['content'], ENT_QUOTES, "UTF-8");
    
    addAnswer($userId, $commentId, $content);
   //header('Location: ../templates/listRestaurant.php');
?>



