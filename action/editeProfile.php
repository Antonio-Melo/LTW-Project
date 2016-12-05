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
          setUserName($username, $name);

          if(! empty($hashPass))
          setUserPassword($username, $hashPass);

        if(! empty($email))
          setUserEmail($username, $email);

            if(! empty($dateBirth))
          setUserDate($username, $dateBirth);

      header('Location: ../home.php');
?>