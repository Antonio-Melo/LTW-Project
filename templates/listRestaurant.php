<?php
  session_start();
  include_once('../database/connection.php');
  include_once('../database/restaurant.php');
 
  $name='Name';
  $restaurant = getRestaurant($name);
?>
<?php
  echo '<div class="restaurantInfo">';
  echo '<h3>' .  $result['name'] . '</h3>';
  echo '<p>' . $result['description'] .'</p>';
  echo '</div>';
?>

<?php
  if(isset($_SESSION['username'])){
     $id = $_SESSION['id'];?>

<form action="../action/addComment.php?userId=<?php echo($_SESSION['id']) ?> &restaurantId=<?php echo($restaurant['id']) ?>" class="comment" method="post">
  <label>Classification: [
    1:<input type="radio" name="evaluation" value="1"></input> 
    2:<input type="radio" name="evaluation" value="2"></input> 
    3:<input type="radio" name="evaluation" value="3" checked></input> 
    4:<input type="radio" name="evaluation" value="4"></input> 
    5:<input type="radio" name="evaluation" value="5"></input> ]
  </label>
  <br>
  <label>
    Comment:
    <textarea rows="4" cols="60" name="content"></textarea>
  </label>
  <button class="CommentButton"> Post </button>
</form>

<?php }

/*
$reviews = getReviews($id);
?>


<div class="reviews">

  <ul>
<?php
foreach ($reviews as $review) {?>
    <li>
      <h4>
        <a href="../pages/user_profile.php?username=<?php echo $review['username']?>" ?>
        <?php echo $review['nome'] ?>
        </a>
      </h4>
      <h6> <?php echo $review['rating'] ."/5" ?> </h6>
      <p> <?php echo $review['description']?> </p>
<?php
  if(isset($_SESSION['username'])){
?>
      <a class="reply" reviewID=<?php echo '"'.$review['id'].'"' ?> ;> Reply </a>
<?php
  if(isset($_SESSION['id']))
    if($_SESSION['id']== $review['user_id']) { ?>
      <a class="delete-review" reviewID=<?php echo '"'.$review['id'].'"' ?> ;> Delete </a>
<?php
      }
  }
?>
      <ul>
<?php
$answers = getAnswers($review['id']);
  foreach($answers as $answer){?>
        <li>
          <h5>
            <a href="../pages/user_profile.php?username=<?php echo $answer['username']?>" ?>
              <?php echo $answer['nome'] ?>
            </a>
          </h5>
          <p>
            <?php echo $answer['content'] ?>
          </p>
<?php
    if(isset($_SESSION['id']))
      if($_SESSION['id'] == $answer['user_id']) { ?>
          <a class="delete-comment" commentID=<?php echo '"'.$answer['id'].'"' ?> ;> Delete </a>
<?php }?>
        </li>
<?php
  }?>
      </ul>
    </li>
<?php
}?>
  </ul>

</div>

<?php include_once('../templates/footer.php'); */

?>
