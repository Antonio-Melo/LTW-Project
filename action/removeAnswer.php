<?php
  session_start();

  include_once('../database/connection.php');
  include_once('../database/user.php');
  include_once('../database/answer.php');

  header('Location: ' . $_SERVER['HTTP_REFERER']);
  if(!isset($_SESSION['username'])){
    exit();
  }

  $user = getUser($_SESSION['username']);
  $answerId = $_POST['id'];
  deleteAnswer($answerId, $user['id']);

?>