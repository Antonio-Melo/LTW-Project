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
			<div class="userInfo"><p id="userInfo">Email: </p> <p> <?=$userProfile['email']?></p></div>
			<div class="userInfo"><p id="userInfo">Date of Birth: </p> <p><?=$userProfile['dateBirth']?></p></div>
		</section>
	</section>
</div>

<?php
		$Restaurants = getRestaurantOwner($userProfile['id']);
?>
<section class="restaurants">
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
