<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);

try {
    //Recipients
    $mail->setFrom('noreply@connellyupholstery.co.uk', 'NOREPLY');
    $mail->addAddress('d.horne92@live.co.uk');
    // $mail->addAddress('');

    //Content
    $mail->isHTML(true);   //Set email format to HTML
    $mail->Subject = 'New online Enquiry';
    $mail->Body    = 'Name:'.$_POST['name'].'<br /> Email:'.$_POST['email'].'<br /> Phone:'.$_POST['phone_number'].'<br /> Location:'.$_POST['location'].'<br /> Message:'.$_POST['message'].'<br />';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script> window.location="../contact-success.html#success"; </script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>