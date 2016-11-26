<?php
	function getAllComments($db) {
		$stmt = $db->prepare('SELECT * FROM comment');
		$stmt->execute();
		return $stmt->fetchAll();
	}

  function addComment($db, $id, $restaurantId, $author, $critic){
    $stmt = $db->prepare('INSERT INTO commment Values(:id, :restaurantId, :author, :critic) ');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':restaurantId', $restaurantId);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':critic', $critic);
    $stmt->execute();
  }

  function deleteComment($db, $id){
    $stmt = $db->prepare('DELETE FROM comment where id = ?');
    $stmt->bind_param(array($id));
    $stmt->execute();
  }
?>
