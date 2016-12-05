<?php
echo('include login.php');
    include_once('../database/user.php');
    include_once('../database/connection.php');

    session_start();
    $username = $_POST['username'];
    $hashPass=md5($_POST['password']);
    echo($hashPass);

    if(getUserPassword($username, $hashPass)){
        $info =  getUser($username);
        $_SESSION['username'] = $info['username'];
        $_SESSION['id'] = $info['id'];
        echo($_SESSION['username']);
    }
    else
        echo('erro');
        
    header('Location: ../home.php');
?>