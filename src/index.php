<?php
    require_once '../vendor/autoload.php';

    // Load configuration
    $env = new \Dotenv\Dotenv(__DIR__ . '/..');
    $env->load();
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
            <div class="g-recaptcha" data-sitekey="<?php echo getenv('RECAPTCHA_PUBLICKEY'); ?>"></div><br>
            <input type="submit">
        </form>
    </body>
</html>