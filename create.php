<?php
     include_once('templates/header.php');
     include_once('database/connection.php');
     include_once('database/user.php');
     include_once('database/conection.php');

     $username = $_POST['username'];
     $name = $_POST['name'];
     $email = $_POST['email'];
  // $dateBirth = $_POST['dateBirth']);
     $hashPass=md5($_POST['password']);

   /*var_dump($username);
    var_dump($name);
    var_dump($dateBirth);
    var_dump($hashPass);
    var_dump($db);*/

    echo('____');
    addUser($db, $username, $name, $email, $hashPass, $dateBirth);
    echo('____');

    include_once('templates/footer');
?>


