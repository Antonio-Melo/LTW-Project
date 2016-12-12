<?php
    include_once('../database/restaurant.php');
    include_once('../database/connection.php');

    //try{
        $restaurants = searchRestaurant($_GET['restaurant']);
        //var_dump($restaurants);
    //}catch(PDOException $e) {
        //die($e->getMessage());
    //}

    include('../templates/header.php');
    //include('../templates/searchResults.php');
    include('../templates/footer.php');
?>
