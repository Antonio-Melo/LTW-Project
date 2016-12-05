<?php
	echo('include user.php');

	function addUser($username, $name, $email, $hashPass, $datebirth){
		global $db;
		$stmt = $db->prepare('INSERT INTO user (id, username, name, email, password, dateBirth) 
									 VALUES (Null, ?, ?, ?, ?, ?)');
		$stmt->execute(array($username, $name, $email, $hashPass, $datebirth));
		echo('add User complete');
	}

	function getAllUsers() {
		global $db;
		$stmt = $db->prepare('SELECT * FROM user');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getUser($username) {
		global $db;
		$stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
		$stmt->execute(array($username));
		return $stmt->fetch();
	}

	function getEmail($email) {
		global $db;
		$stmt = $db->prepare('SELECT * FROM user WHERE email = ?');
		$stmt->execute(array($email));
		return $stmt->fetch();
	}

	function getUserPassword($username, $hashPass){
		global $db;
		$stmt = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
		$stmt->execute(array($username, $hashPass));

		return $stmt->fetch();
	}
	
	function setUserName($username, $name){
		global $db;
		$stmt = $db->prepare('UPDATE user SET name = ? WHERE username = ?');
		$stmt->execute(array($name, $username));
	}

	function setUserPassword($username, $password){
		global $db;
		$stmt = $db->prepare('UPDATE user SET password = ? WHERE username = ?');
		$stmt->execute(array($password, $username));
	}

	function setUserEmail($username, $email){
		global $db;
		$stmt = $db->prepare('UPDATE user SET email = ? WHERE username = ?');
		$stmt->execute(array($email, $username));
	}

	function setUserDate($username, $date){
		global $db;
		$stmt = $db->prepare('UPDATE user SET dateBirth = ? WHERE username = ?');
		$stmt->execute(array($date, $username));
	}
?>
