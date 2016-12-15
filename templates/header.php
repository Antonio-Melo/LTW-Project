<!DOCTYPE html>
<html>
<head>
  <title>FoodBack</title>
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
        <img src="../style/resources/logo">
    </a>
    <div id="menu">
      <ul>
        <li> <?php include_once('login_body.php'); ?></li>
        <?php  if(isset($_SESSION['username'])) {?>
              <a id="addR" href="../pages/addRestaurant.php">Add Restaurant</a>
         <?php } ?>
        <li>
          <form id="searchForm" action="../pages/searchResults.php" method="post">

                <input type="text" size="50" name="restaurant" required="required" placeholder="Search Restaurant">

            <input type="submit" id="butSearch" value="Search">
          </form>
        </li>
      </ul>
    </div>
</div>
