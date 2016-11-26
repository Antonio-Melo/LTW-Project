<!DOCTYPE HTML SYSTEM>
<?php
    include_once('database/connection.php');
    include_once('database/comment.php');
    include_once('database/restaurant.php');

    $comments = getAllComments($db);

    var_dump($comments);

    include('templates/header.php');

?>

    <?php
include('templates/footer.php');

//http://gnomo.fe.up.pt/~up201405342/projeto/page.php
?>