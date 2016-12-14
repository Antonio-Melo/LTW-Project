<?php
echo('include login.php');
    include_once('../database/user.php');
    include_once('../database/connection.php');

    session_start();
    $username = trim(strip_tags($_POST['username']));
    $password = $_POST['password'];
    var_dump($username);

   if (verifyUser($username, $password)) {
        $_SESSION['username'] = $username;
        $info =  getUser($username);
        $_SESSION['id'] = $info['id'];
        echo($_SESSION['username']);
    }
    else
        echo('erro');
    echo('aqui');

    header('Location: ../home.php');
?>
