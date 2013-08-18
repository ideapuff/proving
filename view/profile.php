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
							<img src="<?= BASE_URL ?>/public/images/photo2.png" alt="">
						</div>
					</div>
					<div class="large-8 columns">
						<h2>Nickname</h2>
						<h6>Hi, I'm Jarvan. I mostly play aggressive ADC, main Vayn and Tristana. Looking for a 5s rank team!</h6><br><br>
						<a href="" class="btnWhite" style="margin-right: 20px;">Message</a>
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
						<h5>Status, what do you have in mind?</h5>
					</div>
				</div>
				<div class="row profileNumbers text-center">
					<hr>
					<div class="small-4 columns">
						<h2>41</h2>
						<h5>Followers</h5>
					</div>
					<div class="small-4 columns">
						<h2>82</h2>
						<h5>Following</h5>
					</div>
					<div class="small-4 columns" style="border-right: 0;">
						<h2>277</h2>
						<h5>Honors</h5>
					</div>
					<hr>
				</div>
			</section>
			<section class="badges row">
				<div class="small-6 large-3 columns">
					<p>Badge 1</p>
				</div>
				<div class="small-6 large-3 columns">
					<p>Badge 2</p>
				</div>
				<div class="small-6 large-3 columns">
					<p>Badge 3</p>
				</div>
				<div class="small-6 large-3 columns">
					<p>Badge 4</p>
				</div>
			</section>
		</div>
	</div>
</section>
<?php
include 'includes/footer.php';
?>