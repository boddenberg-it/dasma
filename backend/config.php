<?php

// URL to find main page of this web application (without ending slash)
$URL = 'https://datenschutz.boddenberg.it';

// db
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

// mail related texts

$from = "datenschutz@boddenberg.it";
$reply_to = "info@boddenberg.it";

$betreff_registration = "Hallo $name , alte huette!";
$betreff_acceptance = "fefe";
$betreff_reminder = "fefef";

$msg_registration = <<<EOT
Hallo

was geht ab!

Accept the mail with:

$URL$link_registration_yes

Decline:

$URL$link_registration_no

EOT;

?>
