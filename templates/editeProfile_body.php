<?php session_start();
?>

    <form action="../action/editeProfile.php" method="post">
    <label>Username: <?php echo($_SESSION['username']); ?><br>
     </label>
    <label>Name:
       <input type="text" name="name" value="<?=$user['name']?>" required> <br>
    </label>
      <label>Email:
        <input type="e-mail" name="email" value="<?=$user['email']?>" required><br>
      </label>
      <label>New Password:
        <input type="password" name="password" ><br>
      </label>
      <label>Confirm password:
        <input type="password" name="confirm" ><br>
      </label>
      <label>Date of Birth:
        <input type="date" name="dateBirth" value="<?=$user['dateBirth']?>" required><br>
      </label>
      <input type="submit" value="edite">
    </form>
