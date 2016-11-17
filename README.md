# mail-msg
Need to send an email from your webserver's MTA using the mail() function??

[![Build Status](https://travis-ci.org/mattmezza/php-mail-msg.svg?branch=master)](https://travis-ci.org/mattmezza/php-mail-msg)

----

`composer require mattmezza/php-mail-msg`

```php
$mail = new PHPMailMsg\Mail($to, $subject, $body, $replyTo, $from); //you can specify a $mailer as last param
if($mail->send()) {
  //mail msg has been sent
} else {
  // Ooopss
}
```

The library uses the default `mail(...)` function and has been made with demonstration purposes.


Matteo Merola <mattmezza@gmail.com>
