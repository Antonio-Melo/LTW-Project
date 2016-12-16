<?php
/**
 * Created by PhpStorm.
 * User: AntonioMelo
 */

    $restaurants = searchRestaurant($_POST['restaurant']);
    //var_dump($restaurants);
?>
<div class="wrapper">
<div class="searchResults">
    <ul>
        <?php
        if(!empty($restaurants)){
            foreach ($restaurants as $restaurant) {
                $id = $restaurant["id"];
                $name = $restaurant['name'];
            ?>
            <h2><li>
                <a href="../pages/listRestaurant.php?id=<?php echo $id ?>"> <?php echo $name ?> </a>
            </li></h2>
        <?php }}else echo "No results found";?>

    </ul>
</div>
</div>
