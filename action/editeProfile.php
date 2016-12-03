<?php
    session_start();
     include_once('../database/connection.php');
     include_once('../database/user.php');
     $username = $_SESSION['username'];

      $name = $_POST['name'];
      $email = $_POST['email'];
      $hashPass=md5($_POST['password']);
      $hashPassConfirm=md5($_POST['confirm']);
      $dateBirth=$_POST['dateBirth'];

        if(! empty($name))
          setUserName($db, $username, $name);

          if(! empty($hashPass))
          setUserPassword($db, $username, $hashPass);

        if(! empty($email))
          setUserEmail($db, $username, $email);

            if(! empty($dateBirth))
          setUserDate($db, $username, $dateBirth);

      header('Location: ../templates/header.php');
?>