<?php

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/Sao_Paulo');

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->CharSet     = 'utf-8';
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.exemplo.com.br';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'origem@exemplo.com.br';
//Password to use for SMTP authentication
$mail->Password = 'senha';
//Set who the message is to be sent from
$mail->setFrom('origem@exemplo.com.br', 'Origem do Email');
//Set who the message is to be sent to
$mail->addAddress('destino@exemplo.com.br', 'Destino do Email');
//Set the subject line
$mail->Subject = 'Alteração de Senha';
//Replace the plain text body with one created manually
$mail->AltBody = 'Sistema Informatizado';
//Attach an image file
$mail->Body        = "Corpo do e-mail.";
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
