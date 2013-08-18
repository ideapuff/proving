<?php
include 'includes/header.php';
?>
<section class="homeMain">
    <div class="row">
        <div class="large-5 columns homeMainLeft">
            <a name="learn-more" class="anchorOffset"></a>
            <h2 class="first-child">Filter <span>Search</span></h2>
            <p>Filter search by rankings, characters, prefered positions, and languages, then find the right person to play together.</p>

            <h2><span>Honor </span>system</h2>
            <p>Get endorsed by your friends and people who know you, increase your reputation in the community .</p>

            <h2>Access on <span>Any Device</span></h2>
            <p>A responsive framework provides an access on any size of screen, do not need to worry about the integrity of the information the website provided.</p>

            <a href="#sign-in" class="haveAccount actionBtn"><span class="icon-left-dir"></span> Sign-in</a>

        </div>
        <div class="large-2 columns">
            <div class="homeMainCenter">
                <img class="circle getStarted" src="<?= BASE_URL ?>/public/images/home-circle-get-started.png" alt="">
            </div>
        </div>
        <div class="large-5 columns homeMainRight text-right">
            <h2 class="first-child">All about <span>You</span></h2>
            <p>We understand gaming is your profession, you deserve a profession profile page. let people know your real experience in gaming. </p>
            <h2>Have your own <span>Team and Community</span></h2>
            <p>Create your own teams and communities, have an open conversation on the discussion board, get better on your skills.</p>
            <h2><span>Report and Verify</span> System</h2>
            <p>Notice someone tempts another gamer? Click the report button. Request to be verified, once we confirmed your information, your character information would not be used by other users anymore.</p>
            <a href="#sign-up" class="getStarted actionBtn">Get Started <span class="icon-right-dir"></span></a>
        </div>
    </div>
</section>
<section class="homeSignup">
    <div class="row">
        <div class="large-5 columns homeSignupLeft">
            <a name="sign-up" class="anchorOffset"></a>
            <h2 class="first-child">Get <span>Started</span></h2>
            <p>Create user name, and create password.</p>
            <h2>Basic <span>Information</span></h2>
            <p>A little about yourself</p>
            <h2>Add <span>Character</span></h2>
            <p>Input your character name in the game, data will automatically drag down from the gaming database.</p>

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
                        <input name="username" type="text" placeholder="User Name">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Email</label>
                        <input name="email" type="text" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Password</label>
                        <input name="password" type="password" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Confirm Password</label>
                        <input name="confirmPassword" type="password" placeholder="Confirm Password">
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
                        <input type="password" placeholder="Password">
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
            <h2 class="first-child">Try To Get <span>Honored</span></h2>
            <p>Get honored from other members, as the your honor goes up, you will be rewarded with special features.</p>

            <h2><span>Follow </span>People you like</h2>
            <p>Follow people doing good in the game, our real life activity feed will provide you with their live status and activities.</p>

            <h2>File A Report<span>Report</span></h2>
            <p>Do not only Blacklisted those unreliable members. Talk to us, report users you think whom took other peoples characters.</p>
            
            <h2><span>Referral</span> Your Friends</h2>
            <p>Increase your experience points, and get to the next level fast.</p>
            
<!--            <h2>Get <span>Verified</span></h2>
            <p>You will receiving a verified badge, which represents the information on your profile about the character is reliable, and no one will be able to be added again.</p>-->
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