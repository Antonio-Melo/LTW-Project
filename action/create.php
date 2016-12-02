<?php
     include_once('../database/connection.php');
     include_once('../database/user.php');


      $username = $_POST['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $hashPass=md5($_POST['password']);
      $hashPassConfirm=md5($_POST['confirm']);
      $dateBirth=$_POST['dateBirth'];

      //if($hashPass !=$hashPassConfirm)
  if(!getUser($db,$username))
    addUser($db, $username, $name, $email, $hashPass, $dateBirth);

    header('Location: ../templates/header.php');
?>


