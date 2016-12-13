<?php
/**
 * Created by PhpStorm.
 * User: AntonioMelo
 */

    $restaurants = searchRestaurant($_GET['restaurant']);
    //var_dump($restaurants);
?>

<div class="searchResults">
    <ul>
        <?php foreach ($restaurants as $restaurant) {
            $id = $restaurant["id"];
            $name = $restaurant['name'];
        ?>
        <li>
            <a href="../pages/listRestaurant.php?id=<?php echo $id ?>"> <?php echo $name ?> </a>
        </li>
        <?php } ?>
    </ul>
</div>
