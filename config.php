<?php

return [
    // Are we currently serving requests?
    'enabled' => true,

    // MySQL credentials
    'mysql' => [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'twitchverification'
    ],

    // Obtain from https://www.google.com/recaptcha/admin
    'captcha' => [
        'publickey' => '',
        'privatekey' => ''
    ]
];
