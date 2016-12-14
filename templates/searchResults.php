<?php
/**
 * Created by PhpStorm.
 * User: AntonioMelo
 */

    $restaurants = searchRestaurant($_POST['restaurant']);
    //var_dump($restaurants);
?>

<div class="searchResults">
    <ul>
        <?php
        if(!empty($restaurants)){
            foreach ($restaurants as $restaurant) {
                $id = $restaurant["id"];
                $name = $restaurant['name'];
            ?>
            <li>
                <a href="../pages/listRestaurant.php?id=<?php echo $id ?>"> <?php echo $name ?> </a>
            </li>
        <?php }}else echo "No results found";?>

    </ul>
</div>
