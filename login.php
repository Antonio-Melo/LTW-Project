<?php
     include_once('templates/header.php');
     include_once('database/connection.php');
     include_once('database/user.php');
     include_once('database/conection.php');

     $username = $_POST['username'];
     $hashPass=md5($_POST['password']);

   /*var_dump($username);
    var_dump($hashPass);
    var_dump($db);*/

    echo('____');
    $pass = getUserPassword($db,$username);
    var_dump($pass);
   // var_dump($hashPass);
    if($pass == $hashPass )
     var_dump('pass certa');
    else
      var_dump('pass errada');

    include_once('templates/footer');
?>