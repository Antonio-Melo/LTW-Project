<?php
  session_start();
  include_once('../database/connection.php');
  include_once('../database/comment.php');
  include_once('../database/answer.php');
  include_once('../database/restaurant.php');
  include_once('../database/user.php');

  $id= $_GET['id'];

	try {
		$restaurant = getRestaurantId($id);
		$comments = getAllComments($id);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

	include ('../templates/header.php');
	include ('../templates/listRestaurant.php');
	include ('../templates/footer.php');
?>
