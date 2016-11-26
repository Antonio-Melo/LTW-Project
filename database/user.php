<?php
	function getAllUsers($db) {
		$stmt = $db->prepare('SELECT * FROM user');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getUserId($db, $id) {
		$stmt = $db->prepare('SELECT * FROM user WHERE id = ?');
		$stmt->execute(array($id));
		return $stmt->fetch();
	}

	function setUserName($db, $id, $name){
		$stmt = $db->prepare('UPDATE user SET name = ? WHERE id = ?');
		$stmt->bindParam(array($name, $id));
		$stmt->execute();
	}

	function setUserPasswrd($db, $id, $password){
		$stmt = $db->prepare('UPDATE user SET password = ? WHERE id = ?');
		$stmt->bindParam(array($password, $id));
		$stmt->execute();
	}

	function setUserEmail($db, $id, $email){
		$stmt = $db->prepare('UPDATE user SET email = ? WHERE id = ?');
		$stmt->bindParam(array($email, $id));
		$stmt->execute();
	}
?>
