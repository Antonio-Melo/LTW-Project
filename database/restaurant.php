<?php
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

  function addRestaurant($db, $id, $name, $introduction, $description){
      $stmt =$db->prepare('INSERT INTO restaurant (id, name, intruction, description)
                                      VALUES(:id, :name, :introduction, :description)');
      $stmt->bindParam(':id',$id);
      $stmt->bindParam(':name',$name);
      $stmt->bindParam(':introdution',$introductio);
      $stmt->bindParam(':description',$description);
      $stmt->execute();
  }
  
  function SetRestName($db, $id, $name){
    $stmt = $db->prepare('UPDATE restaurant SET name = ? WHERE id = ?');
    $stmt->execute(array($name, $id));
  }

  function SetRestDescri($db, $id, $description){
    $stmt = $db->prepare('UPDATE restaurant SET description = ? WHERE id = ?');
    $stmt->execute(array($description, $id));
  }

  function SetRestIntro($db, $id, $introduction){
    $stmt = $db->prepare('UPDATE restaurant SET introduction = ? WHERE id = ?');
    $stmt->execute(array($introduction, $id));
  }

  function DeleteRestaurant($db, $name){
    $stmt= $db->prepare('DELETE FROM restaurant WHERE name = ?');
    $stmt->bind_param(array($name));
    $stmt->execute();
  }
?>
