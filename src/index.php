<?php
    require_once '../vendor/autoload.php';

    // Load configuration
    $config = require '../config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Twitch Installs - Verification</title>

        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username"><br>
            <div class="g-recaptcha" data-sitekey="6LeN4AMTAAAAAIHYQQa4LwyUEbxWBl8Es8i2fCmg"></div>
        </form>
    </body>
</html>