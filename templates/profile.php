<form id="formEdit" action="../pages/editeProfile.php" method="post">
	<input id="btnEdit" type="submit" value="Edit Profile" />
</form>

<section id="namesInfo">
	<h3 id="name"><?=$userProfile['name']?></h3>
	<h4 id='username'>@<?=$userProfile['username']?></h4>

</section>

<section id="personalInfo">
	<h4> Personal Information </h4>
	<p id="email">Email: <?=$userProfile['email']?></p>
	<p id="birthday">Date of Birth: <?=$userProfile['dateBirth']?></p>
</section>

<?php
		$Restaurants = getRestaurantOwner($userProfile['id']);
?>
<section class="restaurants">
		<h3>Owner: <?=$userProfile['name']?></h3>
		<?php foreach($Restaurants as $restaurant) { ?>
				<article class="restaurant">
					<h3>
						<?php
							$linkAddress = "../pages/listRestaurant.php?id=" . $restaurant['id'];
							echo "<a href=\"$linkAddress\">";
							echo $restaurant['name'] . "</a> ";
						?>
					</h3>
					<p><?php echo $restaurant['description'];
							echo "<br>";?></p>
				</article>
		<?php } ?>
</section>
