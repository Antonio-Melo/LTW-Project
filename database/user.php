<?php
	function addUser($db, $username, $name, $email, $password, $datebirth){
		$stmt = $db->prepare('INSERT INTO user (username, name, email, password, dateBirth) 
									 VALUES (?, ?, ?, ?, ?)');
		$stmt->execute(array($username, $name, $email, $password, $datebirth));
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

	function getUserPassword($db,$username, $hashPass){
		$stmt = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
		$stmt->execute(array($username, $hashPass));
		return $stmt->fetch() !== false;
	}

	function setUserName($db, $username, $name){
		$stmt = $db->prepare('UPDATE user SET name = ? WHERE username = ?');
		$stmt->bindParam(array($name, $username));
		$stmt->execute();
	}

	function setUserPassword($db, $username, $password){
		$stmt = $db->prepare('UPDATE user SET password = ? WHERE username = ?');
		$stmt->bindParam(array($password, $username));
		$stmt->execute();
	}

	function setUserEmail($db, $username, $email){
		$stmt = $db->prepare('UPDATE user SET email = ? WHERE username = ?');
		$stmt->bindParam(array($email, $username));
		$stmt->execute();
	}

	function setUserDate($db, $username, $date){
		$stmt = $db->prepare('UPDATE user SET dateBirth = ? WHERE username = ?');
		$stmt->bindParam(array($date, $username));
		$stmt->execute();
	}
?>
