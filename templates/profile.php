<form id="formEdit" action="../pages/editeProfile.php" method="post">
	<input id="btnEdit" type="submit" value="Edit Profile" />
</form>
<div class="namesInfo">
	<section id="namesInfo">
		<h3 id="name"><p><?=$userProfile['name']?></h3>
		<h4 id='username'>@<?=$userProfile['username']?></h4>

		<section id="personalInfo">
			<h4> Personal Information </h4>
			<img src=<?=$userProfile['avatar']?> >
			<p id="email">Email: <?=$userProfile['email']?></p>
			<p id="birthday">Date of Birth: <?=$userProfile['dateBirth']?></p>
		</section>
	</section>
</div>

<?php
		$Restaurants = getRestaurantOwner($userProfile['id']);
?>
<section class="restaurants">
		<h3>Owner: <?=$userProfile['name']?></h3>
		<?php foreach($Restaurants as $restaurant) { ?>
				<article class="restaurant">
					<h2><p>Restaurant</p> </h2>
					<h3>
						<?php
							$linkAddress = "../pages/listRestaurant.php?id=" . $restaurant['id'];
							echo "<a href=\"$linkAddress\">";
							echo $restaurant['name'] . "</a> ";
						?>
					</h3>
					<p><?php echo $restaurant['description']; ?></p>
				</article>
		<?php } ?>
</section>
