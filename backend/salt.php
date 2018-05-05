<?php

// api salt
$salt = "DEADBEEF";

// function to generate the hash
function generate_hash($mail)
{
        return hash('sha256', $mail + $salt);
}



