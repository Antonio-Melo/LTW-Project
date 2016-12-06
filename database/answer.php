<?php
echo('include answer');
	function getAllAnswer($commentId) {
    global $db;
		$stmt = $db->prepare('SELECT * FROM answer where commentId = ?');
		$stmt->execute(array($commentId));
		return $stmt->fetchAll();
	}

  function addAnswer($restaurantId, $userId, $commentId, $content){
    global $db;
    $stmt = $db->prepare('INSERT INTO commment Values(Null, ?, ?, ?, ?)');
    $stmt->execute(array($restaurantId, $userId, $commentId,$content));
  }

  function deleteAnswer($id){
    global $db;
    $stmt = $db->prepare('DELETE FROM answer where id = ?');
    $stmt->execute(array($id));
  }
?>
