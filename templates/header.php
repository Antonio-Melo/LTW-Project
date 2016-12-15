<!DOCTYPE html>
<html>
<head>
  <title>Food & Good Vibes</title>
   <link rel="stylesheet" href="<?=$cssPath?>">
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../scripts/script.js"></script>
 <!--  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
</head>
<!--<body background="style/resources/backgroundImg.jpg">-->
<body>
 <?php
 if(session_id() == '') {
     session_start();
 }?>

<div id="header">
    <a href="../pages/home.php">
        <img src="../style/resources/logo.png">
    </a>
    <div id="menu">
      <ul>
        <li> <?php include_once('login_body.php'); ?></li>
        <?php  if(isset($_SESSION['username'])) {?>
            <ul>
              <li><a href="../pages/addRestaurant.php">Add Restaurant</a></li>
            </ul>
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
