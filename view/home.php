<?php
include 'includes/header.php';
?>
<section class="homeMain">
    <div class="row">
        <div class="large-5 columns homeMainLeft">
            <a name="learn-more" class="anchorOffset"></a>
            <h2 class="first-child">All about <span>YOU</span>.</h2>
            <p>We understand gaming is your profession, you deserve a profession profile page. let people know your real experience in gaming. get messages from people who interested in team up with you.</p>

            <h2>Have your own <span>Team and Community</span>.</h2>
            <p>create your own teams and communities, have an open conversation on the discussion board, get better on your skills.</p>

            <h2><span>Report and Verify</span> System.</h2>
            <p>When you notice someone tempts another gamer in the game, click the report button, we will begin our  investigation with time consuming. Request to be verified as a reliable member</p>
            <a href="#sign-in" class="haveAccount"><span class="icon-left-dir"></span> Sign-in</a>
        </div>
        <div class="large-2 columns">
            <div class="homeMainCenter">
                <img class="circle getStarted" src="<?= BASE_URL ?>/public/images/home-circle-get-started.png" alt="">
            </div>
        </div>
        <div class="large-5 columns homeMainRight text-right">
            <h2 class="first-child">Powerful <span>FILTER SEARCH</span>.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nemo, numquam, natus, ab quos ipsa consectetur quas eos placeat ad blanditiis provident dignissimos atque error eaque quisquam ullam. </p>
            <h2>It's all about YOU.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nemo, numquam, natus, ab quos ipsa consectetur quas eos placeat ad blanditiis provident dignissimos atque error eaque quisquam ullam. </p>
            <h2>It's all about YOU.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, </p>
            <a href="#sign-up" class="getStarted">Get Started <span class="icon-right-dir"></span></a>
        </div>
    </div>
</section>
<section class="homeSignup">
    <div class="row">
        <div class="large-5 columns homeSignupLeft">
            <a name="sign-up" class="anchorOffset"></a>
            <h2 class="first-child">All about <span>YOU</span>.</h2>
            <p>We understand gaming is your profession, you deserve a profession profile page. let people know your real experience in gaming. get messages from people who interested in team up with you.</p>

            <h2>Have your own <span>Team and Community</span>.</h2>
            <p>create your own teams and communities, have an open conversation on the discussion board, get better on your skills.</p>

            <h2><span>Report and Verify</span> System.</h2>
            <p>When you notice someone tempts another gamer in the game, click the report button, we will begin our  investigation with time consuming. Request to be verified as a reliable member, once we confirmed your information confirmed by us</p>

        </div>
        <div class="large-2 columns">
            <div class="homeSignupCenter">
                <img class="circle" src="<?= BASE_URL ?>/public/images/home-circle-3.png" alt="">
            </div>
        </div>
        <div class="large-5 columns homeSignupRight">
            <h2 class="first-child">Get Started - it’s free.</h2>
            <p><span>Register in easy 3 steps.</span></p>
            <form action="<?= BASE_URL?>/registration" method="POST">
                <div class="row">
                    <div class="large-12 columns">
                        <label>User Name</label>
                        <input type="text" placeholder="User Name">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Email</label>
                        <input type="text" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Password</label>
                        <input type="text" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Confirm Password</label>
                        <input type="text" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="actionBtn">
                    <div class="row">
                        <div class="large-6 columns">
                            <input type="submit" class="btnWhite" value="JOIN NOW">
                        </div>
                        <div class="large-6 columns">
                            <a href="#sign-in" class="haveAccount">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="homeSignin">
    <div class="row">
        <div class="large-5 columns homeSigninLeft">
            <a name="sign-in" class="anchorOffset"></a>
            <h2 class="first-child">Welcome Back.</h2>

            <form action="<?= BASE_URL?>/dashboard" method="POST">
                <div class="row">
                    <div class="large-12 columns">
                        <label>User Name</label>
                        <input type="text" placeholder="User Name">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Password</label>
                        <input type="text" placeholder="Password">
                    </div>
                </div>
                <div class="actionBtn">
                    <div class="row">
                        <div class="large-6 columns">
                            <input type="submit" class="btnWhite" value="Sign In">
                        </div>
                        <div class="large-6 columns">
                            <a href="#sign-up" class="dontHaveAccount">Don't have an account?</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="large-2 columns">
            <div class="homeSigninCenter">
                <img class="circle" src="<?= BASE_URL ?>/public/images/home-circle-3.png" alt="">
            </div>
        </div>
        <div class="large-5 columns homeSigninRight">
            <h2 class="first-child">All about <span>YOU</span>.</h2>
            <p>We understand gaming is your profession, you deserve a profession profile page. let people know your real experience in gaming. get messages from people who interested in team up with you.</p>

            <h2>Have your own <span>Team and Community</span>.</h2>
            <p>create your own teams and communities, have an open conversation on the discussion board, get better on your skills.</p>

            <h2><span>Report and Verify</span> System.</h2>
            <p>When you notice someone tempts another gamer in the game, click the report button, we will begin our  investigation with time consuming. Request to be verified as a reliable member, once we confirmed your information confirmed by us.</p>
        </div>
    </div>
</section>
<section class="diamondLine">
    <div class="row">
        <div class="large-12 large-centered columns text-center">
            <img class="diamond" src="<?= BASE_URL ?>/public/images/diamond-up.png" alt="">
        </div>
    </div>
</section>
<section class="homeWidget">
    <div class="row">
        <div class="large-4 columns latestNews">
            <h4>Latest News</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, vero, ratione saepe delectus beatae dolorum consequatur maxime explicabo accusantium asperiores perspiciatis molestias aut praesentium. Architecto corrupti eligendi dolorem consectetur itaque.</p>
            <p><small>Aug. 18. 2013</small></p>
        </div>
        <div class="large-8 columns">
            <h4>Check Out New Members</h4>
        </div>
    </div>
</section>
<!-- <section class="diamondLine">
    <div class="row">
        <div class="large-12 large-centered columns text-center">
            <img class="diamond" src="<?= BASE_URL ?>/public/images/diamond-up.png" alt="">
        </div>
    </div>
</section> -->
<section class="homeAbout">
    <a name="about"></a>
    <div class="row">
        <div class="large-12 columns">
            <h2>About <span>Proving Grounds</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, atque minus architecto ex repellendus culpa magnam ab unde necessitatibus error dignissimos quis ipsum tempora et obcaecati tenetur magni debitis voluptatum?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, atque minus architecto ex repellendus culpa magnam ab unde necessitatibus error dignissimos quis ipsum tempora et obcaecati tenetur magni debitis voluptatum?</p>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php';
?>