<?php

require_once "vendor/autoload.php";

use PHPMailMsg\Mail;

$msg = new Mail("mattmezza@gmail.com", "Salutation", "Hello my dear!", "mattmezza@gmail.com", "no-reply@phpmailmsg.com");
if($msg->send()){
  echo "PASSED";
} else {
  echo "NOT PASSED";
}
