<?php
echo('include create.php');
     include_once('../database/connection.php');
     include_once('../database/user.php');


      $username = $_POST['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $hashPass=md5($_POST['password']);
      $hashPassConfirm=md5($_POST['confirm']);
      $dateBirth=$_POST['dateBirth'];

      if($hashPass != $hashPassConfirm) 
             header('Location: ../templates/register.php');
    
    var_dump($hashPass);
    var_dump($hashPassConfirm);

    if(!getUser($db,$username)){
        if(! getEmail($db,$email))
                addUser($db, $username, $name, $email, $hashPass, $dateBirth);
            else{
                echo('email ja usado');
                header('Location: ../templates/register.php');}
    }
    else{
        echo('user ja usado');
        header('Location: ../templates/register.php');
        }

       // header('Location: ../templates/header.php');
?>


