<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'port' => env('MAIL_PORT', 587),
    'from' => ['address' => 'javierig.am@gmail.com', 'name' => 'Admin'],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('javierig.am@gmail.com'),
    'password' => env('wenajavo1'),
    'sendmail' => '/usr/sbin/sendmail -bs',

];
