<?php
     include_once('templates/header.php');
     include_once('database/connection.php');
     include_once('database/user.php');
     include_once('database/conection.php');

    try {
          $username = $_POST['username'];
          $hashPass=md5($_POST['password']);
        if(getUserPassword($db,$username, $hashPass))
          {
            echo("valid");
            return "true";
          }
        else
          {
              echo("error");
              return "Invalid UserName or Password";
          }
    } 
    catch (PDOException $e) {
      echo $e->getMessage();
    }
    include_once('templates/footer');
?>