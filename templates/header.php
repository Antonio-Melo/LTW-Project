<!DOCTYPE html>
<html>
<head>
  <title>Food & Good Vibes</title>
  <link rel="stylesheet" href="../style/design.css">
  <script type="text/javascript" src="scripts/slideshowHomepage.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
 <?php session_start(); ?>

<div id="header">
    <h1>Food & Good Vibes</h1>
    <div id="menu">
      <ul>
        <li><a href="homepage.php">Homepage</a></li>
        <li><a href="searchRestaurant.php">Take me to a Restaurant</a></li>
        <li><a id="log" href="login_body.php">Login/Register</a></li>
        <?php  if(isset($_SESSION['username'])) {?>
        <li><a href="addRestaurant_body.php">Add Restaurant</a></li>
        <?php } ?>
      </ul>
    </div>
</div>
