<?php
    if(isset($_SESSION['username'])){?>

<div class="addResaurant">
<form  class ="addForm" action="../action/addRestaurant.php?owner=<?php echo($_SESSION['id'])?>" method="post">
    <h1> Add </h1>
    <label>Restaurant name
        <input name="name" type="text" required="required" /></br>
    </label>

    <label>Type
        <input name="type" type="text" required="required" /></br>
    </label>

    <label>Description
        <input name="description" type="text" required="required" /></br>
    </label>

    <label>Address
        <input name="address" type="text" required="required" /></br>
    </label>

    <label>Open
        <input name="Opening_time" type="time" required="required" /></br>
    </label>

    <label>Close
        <input name="Closing_time" type="time" required="required" /></br>
    </label>

    <input  class="addBotton" type="submit" value="Add"/>
</form>
  <?php }  ?>
</form>
</div>
