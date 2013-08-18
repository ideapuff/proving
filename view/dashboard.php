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
                <!-- <p>Subtitle</p> -->
                <input type="email" placeholder="friends@email.com">
                <input type="submit" value="Continue" class="btnWhite">
            </section>
            <section class="activityFeed">
                <p class="left">Finckys.Marque has just created a team.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">Finckys.Marque has just created a team.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">Dyrus.Liliana Dose any team looking for a Top player? My style is aggressive.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">Yueling I am usually play a support, and looking to joy some team, where needed a support role and play often.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">Galaxywar inviting you to join their team.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">Boppppppp starting to follow you.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">wentorr added to your summoner list.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">launching champion looking for another AD player, to replace our current main AD, who will stop the frequency of playing for a while.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
                <p class="left">Boppppppp starting to follow you.</p>
                <p class="right">5 secs ago</p>
                <br class="clear">
            </section>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php';
?>