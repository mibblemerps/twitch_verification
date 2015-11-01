<?php
/*
 * Verifies user
 */

require_once '../vendor/autoload.php';
require 'includes/init.php';

if (isset($_POST['username'], $_POST['g-recaptcha-response'])) {
    $token = $_POST['g-recaptcha-response'];
    $username = $_POST['username'];

    echo TwitchVerification\Verify::verify_captcha($token, $username) ? 'good' : 'fail';
}
