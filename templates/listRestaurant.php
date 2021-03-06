
<script src="../scripts/reply.js"></script>
<div class="listRestaurant">
<?php
  echo '<div class="restaurantInfo">';
  echo '<h2>' . $restaurant['name'] . '</h2>';
  echo '<p>' .'Rating : ' . $restaurant['rating'] . '</p>';
  echo '<h3>' .'Description' . '</h3>';
  echo '<h5>' . $restaurant['description'] .'</h5>';
  echo '<h4>' .'<hr width=10%>' . 'Hours' .'</h4>';
  echo '<p>' . $restaurant['open'] . ' - ' . $restaurant['close'] . '</p>';
  echo '<h4>' .'<hr width=10%>' . '</h4>';
  echo '</div>';

    // address to map
    $map_address = $restaurant['address'];
    $url = "http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=".urlencode($map_address);
    $lat_long = get_object_vars(json_decode(file_get_contents($url)));
    // pick out what we need (lat,lng)
    $lat_long = $lat_long['results'][0]->geometry->location->lat . "," . $lat_long['results'][0]->geometry->location->lng;
?>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAvQYsBrNenwfJwTtTJiBxdTFa73LEEkNM"></script>

    <div id="map" style="width:100%;height:400px"></div>

    <div class="comment">
<?php

  if(isset($_SESSION['username'])){
    if($restaurant['owner']== $_SESSION['id'] )
      $OWNER=1;
    else
      $OWNER=0;

     $sessionId = $_SESSION['id']; ?>

<form action="../action/addComment.php?userId=<?php echo($_SESSION['id']) ?> &restaurantId=<?php echo($restaurant['id']) ?>" class="comment" method="post">
  <label class="Classification">Classification:
    <span class="rating">  
        <input type="radio" class="rating-input" id="rating-input-1-5" name="evaluation" value="5"/>
        <label for="rating-input-1-5" class="rating-star"></label>

        <input type="radio" class="rating-input" id="rating-input-1-4" name="evaluation" value="4"/>
        <label for="rating-input-1-4" class="rating-star"></label>

        <input type="radio" class="rating-input" id="rating-input-1-3" name="evaluation" value="3"/>
        <label for="rating-input-1-3" class="rating-star"></label>

        <input type="radio" class="rating-input" id="rating-input-1-2" name="evaluation" value="2"/>
        <label for="rating-input-1-2" class="rating-star"></label>
        
        <input type="radio" class="rating-input" id="rating-input-1-1" name="evaluation" value="1"/>
        <label for="rating-input-1-1" class="rating-star"></label>

  </span>
    </label>
  <br>
    <textarea class="CommentRestaurant" rows="4" cols="60" name="content"></textarea>
  <button class="CommentButton"> Post </button>
</form>

<?php } ?>
<br>
</div>
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
                  </div>
                
                
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
<?php }
    $address = "Rua das Flores Portugal"?>
</ul>

<script>
    (function() {
        function initialize() {
            var myLatlng = new google.maps.LatLng(<?php echo $lat_long ?>),
                mapOptions = {
                    zoom: 18,
                    center: myLatlng
                },
                map = new google.maps.Map(document.getElementById('map'), mapOptions),
                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: '<?php echo $map_address; ?>'
                });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    })();
</script>
