<?php
echo('aqui');
     include_once('templates/header.php');
     include_once('database/connection.php');
     include_once('database/user.php');

      $username = $_POST['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $hashPass=md5($_POST['password']);
      $hashPass=md5($_POST['confirm']);
      $dateBirth=$_POST['dateBirth'];
    
    addUser($db, $username, $name, $email, $hashPass, $dateBirth);

    include_once('templates/footer');
?>


