<?php
namespace TwitchVerification;

class Verify {
    /**
     * Verifies a reCAPTCHA code
     * @param string $token Token received from client
     * @param string|null $ip IP address of client, or leave blank for requesting IP
     * @return bool Is captcha valid?
     */
    public static function verify_captcha($token, $ip = null)
    {
        if ($ip === null) { $ip = $_SERVER['REMOTE_ADDR']; } // defaults to remote address

        $recaptcha = new \ReCaptcha\ReCaptcha(getenv('RECAPTCHA_PRIVATEKEY'));
        $resp = $recaptcha->verify($token, $ip); // verify recaptcha

        return $resp->isSuccess();
    }
}