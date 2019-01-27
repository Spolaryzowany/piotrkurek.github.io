<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pitko829@gmail.com';
    $mail->Password = 'jtcbaxjfnlafcyfa';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($_GET['email'], 'Portfolio');
    $mail->addAddress('pitko829@gmail.com', 'Piotr Kurek');

    $mail->setLanguage('pl','phpmailer/src/language/phpmailer.lang-pl.php');

    $mail->isHTML(true);
    $mail->Subject = 'Wiadomość od '.$_GET['name'];
    $mail->Body = $_GET['content'];
    $mail->AltBody = $_GET['content'];

    $mail->send();
    echo "Email został wysłany.";
}
catch(Exception $e){
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}