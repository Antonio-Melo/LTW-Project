<?php
	function getAllRestaurants() {
    global $db;
		$stmt = $db->prepare('SELECT * FROM restaurant');
		$stmt->execute();
		return $stmt->fetchAll();
	}

  function getRestaurant($name) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM restaurant WHERE name = ?');
    $stmt->execute(array($name));
    return $stmt->fetch();
  }

   function getRestaurantId($id) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM restaurant WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

    function getRestaurantOwner($owner) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM restaurant WHERE owner = ?');
    $stmt->execute(array($owner));
    return $stmt->fetchAll();
  }

  function searchRestaurant($string) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM restaurant WHERE name = ?');
    $stmt->execute(array($string));
    return $stmt->fetchAll();
  }

  function addRestaurant($name, $type, $description,$address, $owner, $open, $close){
      global $db;
      echo $address;
      $stmt =$db->prepare('INSERT INTO restaurant (id, name, type, description,address, owner, rating, open, close)
                                      VALUES(NULL, ?, ?, ?, ?,?, 3.0, ?, ?)');
      $stmt->execute(array($name, $type, $description,$address, $owner, $open, $close));
       
  }

  function SetRestName($id, $name){
    global $db;
    $stmt = $db->prepare('UPDATE restaurant SET name = ? WHERE id = ?');
    $stmt->execute(array($name, $id));
  }
 
  function SetRestDescri($id, $description){
    global $db;
    $stmt = $db->prepare('UPDATE restaurant SET description = ? WHERE id = ?');
    $stmt->execute(array($description, $id));
  }

  function SetRestType($id, $type){
    global $db;
    $stmt = $db->prepare('UPDATE restaurant SET type = ? WHERE id = ?');
    $stmt->execute(array($type, $id));
  }

  function DeleteRestaurant($name){
    global $db;
    $stmt= $db->prepare('DELETE FROM restaurant WHERE name = ?');
    $stmt->execute(array($name));
  }
?>
