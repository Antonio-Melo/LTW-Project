<?php if(isset($_SESSION['username'])) { ?>

<label> Logged in as:
    <a href="editeProfile_body.php"> <?php echo($_SESSION['username']);?>   </a>
</label>
<a href="../action/logout.php">Logout</a>
<?php }else{ ?>

<form id="loginForm" action="../action/login.php" method="post">
  <label>Username:
       <input type="text" name="username" required="required">
  </label><br>
  <label>Password:
       <input type="password" name="password" required="required">
  </label>
  <br><input type="submit" value="Login">
</form>
<form action="register.php">
  <input type="submit" value="Register" />
</form>
<?php } ?>
