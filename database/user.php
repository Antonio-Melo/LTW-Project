<?php

	function addUser($username, $name, $email, $password, $datebirth,$target_file){
		global $db;
		 $options = ['cost' => 12];
    	 $hashPass = password_hash($password, PASSWORD_DEFAULT, $options);
		$stmt = $db->prepare('INSERT INTO user (id, username, name, email, password, dateBirth,avatar) 
									 VALUES (Null, ?, ?, ?, ?, ?,?)');
		$stmt->execute(array($username, $name, $email, $hashPass, $datebirth,$target_file));
	}

	function verifyUser($username, $password) {
		global $db;  
		$stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
		$stmt->execute(array($username));
		$user = $stmt->fetch();
		return ($user !== false && password_verify($password, $user['password']));
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
	
	function getUsername($id) {
		global $db;
		$stmt = $db->prepare('SELECT username FROM user WHERE id = ?');
		$stmt->execute(array($id));
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
		$options = ['cost' => 12];
    	$hashPass = password_hash($password, PASSWORD_DEFAULT, $options);
		$stmt = $db->prepare('UPDATE user SET password = ? WHERE username = ?');
		var_dump($stmt);
		$stmt->execute(array($hashPass, $username));
		echo($hashPass);
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
