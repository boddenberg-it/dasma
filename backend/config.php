<?php

// URL to find main page of this web application (without ending slash)
$URL = 'https://datenschutz.boddenberg.it';


// db
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";



//mail related texts

$from = "datenschutz@boddenberg.it";
$reply_to = "info@boddenberg.it";

$betreff_registration = "Registration confirmed, please continue the process";
$betreff_reminder = "ullu";


$msg_registration = <<<EOT
Hello $mail,

Please tell us whether you accept.....

Accept:

$URL$link_registration_yes

Decline:

$URL$link_registration_no


Best Regards,
   boddenberg.it
EOT;

?>

