<?php

require 'src/email.php';

$mail = new CPANELEMAILCREATOR ();
$mail->url = 'CPANEL_URL';
$mail->user = 'CPANEL_USERNAME';
$mail->pass = 'CPANEL_PASSWORD';

$login = json_decode($mail->loginCpanel());

$quota = 2048; // mb

echo $mail->createEmail($login->cpanelUser, 'DOMAIN', 'USERNAME', 'PASSWORD', $quota);
