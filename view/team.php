<?php
include 'includes/header.php';
?>

<section class="mainContent scollOffset">
	<div class="row">
		<?php include 'includes/sidebar.php'; ?>
		<div class="large-8 columns mainContainer">
			<section class="profileMain row">
				<div class="row">
					<div class="large-4 columns">
						<div class="cropBox">
							<img src="<?= BASE_URL ?>/public/images/photo3.png" alt="">
						</div>
					</div>
					<div class="large-8 columns">
						<h2>TPA</h2>
						<h6>Hi, we are TPA from Taiwan. We are looking for new players higher than Silver. Our goal is to reach Platinum by the end of Season 3.</h6><br><br>
						<a href="" class="btnWhite" style="margin-right: 20px;">Apply</a>
						<a href="" class="btnWhite">Follow</a>
					</div>
				</div>
				<div class="row profileStatus">
					<div class="row">
						<div class="large-4 columns text-center">
							<img class="diamond" src="<?= BASE_URL ?>/public/images/diamond-up.png" alt="">
						</div>
					</div>
					<div class="large-12 columns">
						<h5>We just reached Gold II!</h5>
					</div>
				</div>
			</section>
			<section class="profileBadges row text-center">
				<h3 class="text-left">Achievements</h3>
				<hr>
				<div class="small-6 large-3 columns">
					<br><br><br><span class="icon-fire-station"></span>
					<h2>20<br><small>Followers</small></h2>
					<h5>FireHack</h5>
				</div>
				<div class="small-6 large-3 columns">
					<br><br><br><span class="icon-flash"></span>
					<h2>50<br><small>Followings</small></h2>
					<h5>Lightenillian</h5>
				</div>
				<div class="small-6 large-3 columns">
					<br><br><br><span class="icon-shield"></span>
					<h2>250<small>Honors</small></h2>
					<h5>RockZilian</h5>
				</div>
				<div class="small-6 large-3 columns">
					<br><br><br><span class="icon-target"></span>
					<h2>10<br><small>Summoners</small></h2>
					<h5>NinjiaStealthy</h5>
				</div>
			</section>
		</div>
	</div>
</section>
<?php
include 'includes/footer.php';
?>