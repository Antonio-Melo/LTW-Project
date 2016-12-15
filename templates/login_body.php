<?php if(isset($_SESSION['username'])) { ?>

<label id="loggedas"> Logged in as:
    <a href="../pages/profile.php?username=<?php echo($_SESSION['username']) ?>"> <?php echo($_SESSION['username']) ?></a>
    <a id="logout" href="../action/logout.php">Logout</a>
</label>

<?php }else{ ?>

<form id="loginForm" action="../action/login.php" method="post">
  <label>Username:
       <input type="text"  size="10" name="username" required="required">
  </label>
  <label>Password:
       <input type="password" size="10" name="password" required="required">
  </label>
  <input class="register" type="submit" value="Login">
  <a href="../pages/register.php">Register </a>
</form>
<?php } ?>
