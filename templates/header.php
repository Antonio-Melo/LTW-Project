<!DOCTYPE html>
<html>
<head>
  <title>Food & Good Vibes</title>
  <link rel="stylesheet" href="<?=$cssPath?>">
 <!--<link rel="stylesheet" href="../style/design.css">
  <script type="text/javascript" src="scripts/slideshowHomepage.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
</head>
<!--<body background="style/resources/backgroundImg.jpg">-->
<body>
 <?php session_start(); ?>

<div id="header">
    <h1>Food & Good Vibes</h1>
    <div id="menu">
      <ul>
        <li><a href="">Take me to a Restaurant</a></li>
        <li> <?php include_once('login_body.php'); ?></li>
        <?php  if(isset($_SESSION['username'])) {?>
        <li><a href="addRestaurant_body.php">Add Restaurant</a></li>
        <?php } ?>
        <li><?php include_once('searchRestaurant.php'); ?></li>
      </ul>
    </div>
</div>
