<?php
    include_once('../database/connection.php');
    include_once('../database/user.php');

    $user = getUser($_GET['username']);
    echo json_encode($user == true);   // true if query returns empty
?>