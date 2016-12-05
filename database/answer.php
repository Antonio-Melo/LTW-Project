<?php
	function getAllAnswer() {
    global $db;
		$stmt = $db->prepare('SELECT * FROM answer');
		$stmt->execute();
		return $stmt->fetchAll();
	}

  function addAnswer($restaurantId, $userId, $commentId, $content){
    global $db;
    $stmt = $db->prepare('INSERT INTO commment Values(Null, ?, ?, ?, ?)');
    $stmt->execute(array($restaurantId, $userId, $commentId,$content));
  }

  function deleteComment($id){
    global $db;
    $stmt = $db->prepare('DELETE FROM answer where id = ?');
    $stmt->bind_param(array($id));
    $stmt->execute();
  }
?>
