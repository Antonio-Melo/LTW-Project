<?php
    session_start();
     include_once('../database/connection.php');
     include_once('../database/user.php');
     $username = $_SESSION['username'];

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password =$_POST['password'];
      $hashPassConfirm=$_POST['confirm'];
      $dateBirth=$_POST['dateBirth'];
      $avatar=$_FILES['avatar'];
      var_dump($avatar);


        if(! empty($name))
          setUserName($username, $name);

        if(!empty($password))
          setUserPassword($username, $password);

        if(! empty($email))
          setUserEmail($username, $email);

        if(! empty($dateBirth))
          setUserDate($username, $dateBirth);
        if(! empty($avatar)){
            if($avatar["error"] == 0){
                $target_dir = "../database/avatars/";
                $target_file = $target_dir . basename($avatar["name"]);
                move_uploaded_file($avatar["tmp_name"],$target_file);
                setUserAvatar($username,$target_file);
                echo "mudei";
            }else{
                $target_file = "../database/avatars/default_avatar.png";
                echo "não mudei";
            }
        }

      header("Location: ../pages/profile.php?username=" . $username);
?>