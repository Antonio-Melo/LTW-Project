<!DOCTYPE html>
<html>
<head>
  <title>Food & Good Vibes</title>
  <!--<link rel="stylesheet" href="<?=$cssPath?>">-->
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
        <li><a href="../pages/addRestaurant.php">Add Restaurant</a></li>
        <?php } ?>
        <li>
          <form id="searchForm" action="../pages/searchResults.php" method="post">
            <label>Search:
                <input type="text" name="restaurant" required="required">
             </label>
            <input type="submit" value="Search">
          </form>
        </li>
      </ul>
    </div>
</div>
