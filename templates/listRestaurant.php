<?php
  session_start();
  include_once('../database/connection.php');
  include_once('../database/comment.php');
  include_once('../database/answer.php');
  include_once('../database/restaurant.php');
  include_once('../database/user.php');
 
  $name='Name';
  $restaurant = getRestaurant($name);
  $restaurantId = $restaurant['id'];
?>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="../scripts/reply.js"></script>
<?php
  echo '<div class="restaurantInfo">';
  echo '<h3>' . $restaurant['name'] . '</h3>';
  echo '<p>' . $restaurant['description'] .'</p>';
  echo '</div>';
?>

<?php
  if(isset($_SESSION['username'])){
     $sessionId = $_SESSION['id']; ?>

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
  $comments = getAllComments($restaurantId);
 
  
?>

<div class="comments">

  <ul>
<?php
foreach ($comments as $comment) {
    $userId = $comment['userId'];
    $commentId = $comment['id']; 
    $user = getUsername($userId);?>
    <li>
      <h4>
        <a href="../pages/user_profile.php?username=<?php echo $review['username']?>" ?>
        <?php echo $user['username'] ?>
        </a>
      </h4>
      <h6> <?php echo $comment['evaluation'] ."/5" ?> </h6>
      <p> <?php echo $comment['content']?> </p>
    <?php
      if(isset($_SESSION['username'])){?>
          <a class="reply" commentId=<?php echo '"'.$commentId.'"' ?> ;> Answer </a>
    <?php
      if(isset($_SESSION['id']))
        if($_SESSION['id'] == $comment['userId']) { ?>
          <a class="delete-review" commentId=<?php echo '"'.$commentId.'"' ?> ;> Delete </a>
          <?php
        }
      }
    ?>
  <ul> 
      <?php 
      $answers = getAllAnswer($comment['id']);
        foreach($answers as $answer){   
            $owner = $answer['userId'];
            $userAnswer = getUsername($owner);?>
              <li>
                <h5>
                  <a href="../pages/user_profile.php?username=<?php echo $answer['username']?>" ?>
                    <?php echo $userAnswer['username'] ?>
                  </a>
                </h5>
                <p>
                  <?php echo $answer['content'] ?>
                </p>
              <?php if(isset($_SESSION['id']))
                      if($_SESSION['id'] == $answer['user_id']) { ?>
                        <a class="delete-comment" commentID=<?php echo '"'.$answer['id'].'"' ?> ;> Delete </a><?php }?>
              </li>
        <?php 
        } ?>
  </ul>
    </li>
<?php
}?>
</ul>
</div>
<?php include_once('../templates/footer.php'); 
?>
