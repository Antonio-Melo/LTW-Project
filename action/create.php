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
      $avatar=$_FILES['avatar'];
      var_dump($avatar);

      if($password != $confirm)
             header('Location: ../templates/register.php');

    var_dump($password);
    var_dump($confirm);

    if(!getUser($username)){
        if(! getEmail($email)){
          if($avatar["error"] == 0){
            $target_dir = "../database/avatars/";
            $target_file = $target_dir . basename($avatar["name"]);
            move_uploaded_file($avatar["tmp_name"],$target_file);
          }else{
            $target_file = "../database/avatars/default_avatar.png";
          }
          addUser($username, $name, $email, $password, $dateBirth,$target_file);
        }else{
                echo('email ja usado');
                header('Location: ../templates/register.php');
        }
    }else{
      echo('user ja usado');
      header('Location: ../templates/register.php');
    }

    //header('Location: ../home.php');
?>
