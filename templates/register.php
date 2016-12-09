    <form action="../action/create.php" method="post">
      <label>UserName:
        <input type="text" name="username" required="required"><br>
      </label>
      <label>Name:
        <input type="text" name="name" required="required"><br>
      </label>
      <label>Email: 
        <input type="e-mail" name="email" required="required" /><br> <!-- nao apagar ^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$ -->
      </label>
      <label>Password:
         <input type="password"  name="password" required="required" pattern=".{5,}" title="Password must be at least 5 characters long!" /><br>
      </label>
      <label>Confirm password:
        <input type="password" name="confirm" required="required"/><br>
      </label>
      <label>Date of Birth:
        <input type="date" name="dateBirth" required="required" /><br>
      </label>
      <input type="submit" value="Register">
    </form>


