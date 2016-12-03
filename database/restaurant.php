<?php
  echo('include restaurant.php');
	function getAllRestaurants($db) {
		$stmt = $db->prepare('SELECT * FROM restaurant');
		$stmt->execute();
		return $stmt->fetchAll();
	}

  function getRestaurantName($db, $name) {
    $stmt = $db->prepare('SELECT * FROM restaurant WHERE name = ?');
    $stmt->execute(array($name));
    return $stmt->fetch();
  }

  function addRestaurant($db,$name, $type, $description){
      $stmt =$db->prepare('INSERT INTO restaurant (name, type, description)
                                      VALUES(:name, :type, :description)');
      $stmt->bindParam(':name',$name);
      $stmt->bindParam(':type',$type);
      $stmt->bindParam(':description',$description);
      $stmt->execute();
  }
  /*
  function SetRestName($db, $id, $name){
    $stmt = $db->prepare('UPDATE restaurant SET name = ? WHERE id = ?');
    $stmt->execute(array($name, $id));
  }*/
 
  function SetRestDescri($db, $name, $description){
    $stmt = $db->prepare('UPDATE restaurant SET description = ? WHERE name = ?');
    $stmt->execute(array($description, $name));
  }

  function SetRestType($db, $name, $type){
    $stmt = $db->prepare('UPDATE restaurant SET type = ? WHERE name = ?');
    $stmt->execute(array($type, $name));
  }

  function DeleteRestaurant($db, $name){
    $stmt= $db->prepare('DELETE FROM restaurant WHERE name = ?');
    $stmt->execute(array($name));
  }
?>
