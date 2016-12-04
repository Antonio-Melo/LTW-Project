<?php  if(isset($_SESSION['username'])) {?> <li><a href="addRestaurant_body.php">Add Restaurant</a></li> <?php } ?>

<?php
     session_start();
    if(isset($_SESSION['username'])){
?>

<label> Logged in as:
    <a href="editeProfile_body.php"> <?php echo($_SESSION['username']);?>   </a>
</label>
<a href="../action/logout.php">Logout</a>
<?php }else{ ?>

<form id="loginForm" action="../action/login.php" method="post">
  <label>Username:
       <input type="text" name="username" required="required">
  </label>
  <label>Password:
       <input type="password" name="password" required="required">
  </label>
  <input type="submit" value="Login">
    <a href="register.php">Register </a>
</form>
<?php } ?>
