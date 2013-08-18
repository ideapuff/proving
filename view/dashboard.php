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
            <section class="activityInviteFriends">
                <p>Find Out Who Else is Using Proving Grounds</p>
                <p>Subtitle</p>
                <input type="email" placeholder="your@email.com">
                <input type="submit" value="Continue" class="btnWhite">
            </section>
            <section class="activityFeed">
                <p>Activity feed title (Example: Tim joined my team <a href="">Proving Grounds</a>.)</p>
                <p>Activity Time (Example: 5 secs ago)</p>
            </section>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php';
?>