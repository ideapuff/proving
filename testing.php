<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="JavaScript" type="text/JavaScript" src="./public/js/jquery-1.7.2.min.js"></script> 
        <script>
            $(document).ready(function() {
                var browserHeight = $(window).height(); // returns height of browser viewport
//            alert(browserHeight);
                $('.browserheight').css('height', browserHeight);
                $(window).on('resize', function() {

                    $('.browserheight').css('height', browserHeight);
                });
            })
        </script>
        <style>
            body{
                padding: 0px;
                margin: 0px;
            }
            .browserheight{
                width: 100%;
                height: 500px;
                background-color: #000;
            }
            .bottomContainer{
                border: 1px solid red;
                width: 100%;
                height: 500px;
            }
        </style>
        <title></title>
    </head>
    <body>
        <div class="browserheight">

        </div>
        <div class="bottomContainer">

        </div>
    </body>
</html>
