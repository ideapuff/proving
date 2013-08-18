<?php
include 'includes/header.php';
?>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            $(".scollOffset").css("padding", "100px");
        });
    });
</script>
<section class="mainContent scollOffset">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="large-8 columns mainContainer">
			<section class="profileMain row">
                <div class="small-4 columns">
                	<h2>14</h2>
                	<h5>Followers</h5>
                </div>
                <div class="small-4 columns">
                	<h2>14</h2>
                	<h5>Following</h5>
                </div>
                <div class="small-4 columns">
                	<h2>14</h2>
                	<h5>Honors</h5>
                </div>
            </section>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php';
?>