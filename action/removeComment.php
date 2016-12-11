<?php

  session_start();

  include_once('../database/connection.php');
  include_once('../database/user.php');
  include_once('../database/comment.php');

 

  header('Location: ' . $_SERVER['HTTP_REFERER']);
  if(!isset($_SESSION['username'])){
    exit();
  }

  $user = getUser($_SESSION['username']);
  $commentId = $_POST['id'];
  deleteComment($commentId, $user['id']);
?>