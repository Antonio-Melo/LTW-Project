<div class="wrapper">
 <div class="editeprofile">
     <div class="link">
         <h4>  <?php  echo('@ '. $_SESSION['username']); ?></h4>
     </div>
   <form action="../action/editeProfile.php" method="post" enctype="multipart/form-data">
       <label>Name:
        <input type="text" name="name" size="40" value="<?=$user['name']?>" required="required" > <br>
       </label>

      <label>Email:
        <input type="e-mail" name="email" size=40" value="<?=$user['email']?>" required="required" ><br>
      </label>

      <label>New Password:
          <input type="password" size="30" name="password"  required="required">
      </label>

      <label>Confirm password:
        <input type="password" size="27" name="confirm" ><br>
      </label>

      <label>Date of Birth:
        <input type="date"name="dateBirth" value="<?=$user['dateBirth']?>" required ><br>
      </label>

      <label>Avatar:
          <input type="file" name="avatar" id="fileToUpload"><br>
      </label>
      <input type="submit"  style="background:url('../style/resources/save.png') no-repeat;height:70px; width:70px;border: 0px solid;" value="">
    </form>
 </div>
</div>
