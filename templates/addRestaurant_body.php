<?php
session_start();
    if(isset($_SESSION['username'])){?>

<form  action="../action/addRestaurant.php?owner=<?php echo($_SESSION['id'])?>" method="post">
    <h1> Add a restaurant </h1>
    <label>Restaurant name
        <input name="name" type="text" required="required" /></br>
    </label>
    <label>Type 
        <input name="type" type="text" required="required" /></br>
    </label>
    <label>Description 
        <input name="description" type="text" required="required" /></br>
    </label>

    <input type="submit" value="Add"/>
</form>
  <?php }  ?>

 <form action=header.php method=get >
    <input type=submit value='Back' />
</form>
