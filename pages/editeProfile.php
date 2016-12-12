<?php
$cssPath = "../style/editeProfile.css";
	include_once('../database/connection.php');
	include_once('../database/user.php');
	include_once('../database/restaurant.php');
	include_once('../templates/header.php');


	
	if(!isset($_SESSION['username']))
		die();

	  $username = $_SESSION['username'];

	try {
		$user = getUser($username);
	}catch(PDOException $e){
		die($e->getMessage());
 		}

	include_once('../templates/editeProfile_body.php');
	include_once('../templates/footer.php');	
?>