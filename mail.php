<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
// require 'vendor/autoload.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



function sendm($receiver, $subject, $message)
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true ;
    $mail->Username ='softown.tech@gmail.com';
    $mail->Password = 'dqevxtdgdfqlzrkb';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('softown.tech@gmail.com');
    $mail->addAddress($receiver);
    $mail->Subject = $subject;
    //$mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $mail->Body = $message;
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'The email message was sent.';
    }
}
//code by aditya.m
