<?php
echo('include login.php');
    include_once('../database/user.php');
     include_once('../database/connection.php');

	    session_start();
         $username = $_POST['username'];
          $hashPass=md5($_POST['password']);


           if(getUserPassword($db,$username, $hashPass)){
           $info =  getUser($db, $username);
            $_SESSION['username'] = $info['username'];

            echo($_SESSION['username']);
               header('Location: ../templates/header.php');
          }
          else
      echo('erro');   /* */
     header('Location: ../templates/header.php');
?>