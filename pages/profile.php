<?php
  	$cssPath = '../style/editeProfile.css';
	include_once('../database/connection.php');
	include_once('../database/user.php');
	include_once('../database/restaurant.php');

	$username = $_GET['username'];
	try{
		$userProfile = getUser($username);
	} catch(PDOException $e) {
		die($e->getMessage());
	}
	
	include('../templates/header.php');
	include('../templates/profile.php');
	include('../templates/footer.php');
?>
