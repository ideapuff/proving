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
        <div class="large-4 columns sidebar">
            <div class="sidebarBox">
                <div class="userPhoto">
                    <div class="cropBox">
                        <img src="<?= BASE_URL ?>/public/images/photo.jpg" alt="">
                    </div>
                    <h2>UserName</h2>
                    <h4>Level 2</h4>
                </div>
                <ul>
                    <li><a href="">Profile</a></li>
                    <li><a href="">Achievements</a></li>
                    <li><a href="">Sub nav</a></li>
                    <li><a href="">Sub nav</a></li>
                </ul>
            </div>
            <section class="sidebarWidget">
                <h4>Who's Viewed My Profile</h4>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </section>
            <section class="sidebarWidget">
                <h4>Summoners List</h4>
            </section>
        </div>
        <div class="large-8 columns mainContent">
            <section class="activityFeed">
                <p>Find Out Who Else is Using Proving Grounds</p>
                <p>Subtitle</p>
                <input type="email" placeholder="your@email.com">
                <input type="submit" value="Continue">
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