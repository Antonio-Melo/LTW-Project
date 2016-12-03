<?php
	echo('include user.php');

	function addUser($db, $username, $name, $email, $hashPass, $datebirth){
		$stmt = $db->prepare('INSERT INTO user (username, name, email, password, dateBirth) 
									 VALUES (?, ?, ?, ?, ?)');
		$stmt->execute(array($username, $name, $email, $hashPass, $datebirth));
		echo('add User complete');
	}

	function getAllUsers($db) {
		$stmt = $db->prepare('SELECT * FROM user');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getUser($db, $username) {
		$stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
		$stmt->execute(array($username));
		return $stmt->fetch();
	}

	function getEmail($db, $email) {
		$stmt = $db->prepare('SELECT * FROM user WHERE email = ?');
		$stmt->execute(array($email));
		return $stmt->fetch();
	}

	function getUserPassword($db,$username, $hashPass){
		$stmt = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
		$stmt->execute(array($username, $hashPass));

		return $stmt->fetch();
	}
	
	function setUserName($db, $username, $name){
		$stmt = $db->prepare('UPDATE user SET name = ? WHERE username = ?');
		$stmt->execute(array($name, $username));
	}

	function setUserPassword($db, $username, $password){
		$stmt = $db->prepare('UPDATE user SET password = ? WHERE username = ?');
		$stmt->execute(array($password, $username));
	}

	function setUserEmail($db, $username, $email){
		$stmt = $db->prepare('UPDATE user SET email = ? WHERE username = ?');
		$stmt->execute(array($email, $username));
	}

	function setUserDate($db, $username, $date){
		$stmt = $db->prepare('UPDATE user SET dateBirth = ? WHERE username = ?');
		$stmt->execute(array($date, $username));
	}
?>
