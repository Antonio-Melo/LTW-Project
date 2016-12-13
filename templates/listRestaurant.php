
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="../scripts/reply.js"></script>
<div class="listRestaurant">
<?php
  echo '<div class="restaurantInfo">';
  echo '<h3>' . $restaurant['name'] . '</h3>';
  echo '<h5>' . $restaurant['description'] .'</h5>';
  echo '<p>' . 'Open from ' . $restaurant['open'] . '  until ' . $restaurant['close'] . '</p>';
  echo '<br>';
  echo '</div>';
?>

<div class="comment">
<?php

  if(isset($_SESSION['username'])){
    if($restaurant['owner']== $_SESSION['id'] )
      $OWNER=1;
    else
      $OWNER=0;

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
    <textarea rows="4" cols="60" name="content"></textarea>
  <button class="CommentButton"> Post </button>
</form>

<?php } ?>
<br>
</div>



  <ul>
<?php
foreach ($comments as $comment) {
    $userId = $comment['userId'];
    $commentId = $comment['id'];
    $user = getUsername($userId);
    ?>
   <div class="comments">
    <li>
      
      
        <div class="user">
        <h4>
        <li>
        <a href="../pages/profile.php?username=<?php echo $user['username']?>"?>
        <?php echo $user['username']; ?></a>
        
        <?php $starts=$comment['evaluation'];     
            for ($i = 1; $i <= $starts; $i++) {?>        
                <span>☆</span>
              <?php }?> 
              </li>
      </h4>

      </div>
      <p> <?php echo $comment['content']?> </p>
    <?php
      if(isset($_SESSION['username']) ){?>
          <a class="reply" commentId=<?php echo '"'.$commentId.'"' ?> ;> Answer </a>
    <?php
      if(isset($_SESSION['id']))
        if($_SESSION['id'] == $comment['userId'] || $OWNER) { ?>
          <a class="delete-comment" commentId=<?php echo '"'.$commentId.'"' ?>> Delete </a>
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
             <div class="answers">
              <li>
                  <div class="userAnswer">
                    <h4>
                    <a href="../pages/profile.php?username=<?php echo $userAnswer['username']?>">
                      <?php echo $userAnswer['username'] ?>
                    </a>
                  </h4>
                  <div>
                
                
                <p>
                  <?php echo $answer['content'] ?>
                </p>
              <?php if(isset($_SESSION['id']) )
                      if($_SESSION['id'] == $answer['userId'] || $OWNER) { ?>
                        <a class="delete-answer" answerId=<?php echo '"'.$answer['id'].'"' ?>> Delete </a><?php }?>
              </li>
              </div>
        <?php
        } ?>
  </ul>

    </li>
    </div>
<?php }?>
</ul>

</div>

