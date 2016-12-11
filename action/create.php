<?php
echo('include create.php');
     include_once('../database/connection.php');
     include_once('../database/user.php');


      $username = trim(strip_tags($_POST['username']));
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password=$_POST['password'];
      $confirm=$_POST['confirm'];
      $dateBirth=$_POST['dateBirth'];
      //$avatar=$_FILES['avatar'];
      var_dump($avatar);

      if($password != $confirm)
             header('Location: ../templates/register.php');

    var_dump($password);
    var_dump($confirm);

    if(!getUser($username)){
        if(! getEmail($email)){
          $target_dir = "../database/avatars/";
          //$target_file = $target_dir . basename($_FILES["])
          addUser($username, $name, $email, $password, $dateBirth);
        }else{
                echo('email ja usado');
                header('Location: ../templates/register.php');}
    }
    else{
        echo('user ja usado');
        header('Location: ../templates/register.php');
        }

        header('Location: ../home.php');
?>
