<html>
<head>
  <title>Food & Good Vibes</title>
  <!-- <link rel="stylesheet" href="style/design.css">
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
      <li> <?php echo( $_SESSION['username']);  ?> </li>
        <li><a href="">Homepage</a></li>
        <li><a href="">Take me to a Restaurant</a></li>
        <li> <?php include_once('login_body.php'); ?> </li>
      </ul>
    </div>
</div>

<?php
 include_once('footer.php');
  
////http://gnomo.fe.up.pt/~up201405342/projeto/templates/login_body.php
?>