<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?= BASE_URL ?>/registrationByGame" method="POST">

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
                        <a href="" class="haveAccount">Already have an account?</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
