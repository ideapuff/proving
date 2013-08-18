<!DOCTYPE html>
<html class="no-js" lang="en" >
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Proving Grounds</title>
        <meta name="description" content="Proving">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width">
        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="<?= BASE_URL?>/public/css/app.css">
        <link rel="stylesheet" href="<?= BASE_URL?>/public/css/main.css">
        <link rel="stylesheet" href="<?= BASE_URL?>/public/css/dashboard.css">
        <!-- JS
        ================================================== -->
        <script src="<?= BASE_URL?>/public/js/vendor/custom.modernizr.js"></script>
        <script language="JavaScript" type="text/JavaScript" src="<?= BASE_URL?>/public/js/jquery-1.7.2.min.js"></script>
        <script language="JavaScript" type="text/JavaScript" src="<?= BASE_URL?>/public/js/homepage.js"></script>
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="<?= BASE_URL?>/public/images/favicon.ico">
        <link rel="apple-touch-icon" href="<?= BASE_URL?>/public/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= BASE_URL?>/public/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= BASE_URL?>/public/images/apple-touch-icon-114x114.png">
    </head>
    <body>
        <?php if(isset($page) && $page=="home"):?>
        <section class="homeTop">
            <div class="row">
                <div class="large-10 small-centered columns">
                    <img class="logo" src="<?= BASE_URL?>/public/images/logo.png" alt="">
                    <h1><span>Prove it.</span> Be the best you can be.</h1>
                    <h3>Right teammates meet Right here, an easiest way to find the best teammates. Real life activity feed on your dashboard about your friend, your team, your community, and the people you followed.</h3>
                    <div class="actionBtn">
                        <a href="#learn-more" class="btnWhite">Learn More</a>
                        <a href="#get-started" class="btnWhite">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>
        <header class="topNav">
            <div class="row">
                <div class="large-5 columns">
                    <img src="<?= BASE_URL?>/public/images/logo.png" alt="">
                </div>
                <div class="large-2 columns text-center">
                    <img class="diamond" src="<?= BASE_URL?>/public/images/diamond-up.png" alt="">
                </div>
                <nav class="large-5 columns">
                    <ul class="large-block-grid-4">
                        <li><a href="">About</a></li>
                        <li><a href="">Sign-in</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="">Search</a></li>
                    </ul>
                </nav>
            </div>
        </header>