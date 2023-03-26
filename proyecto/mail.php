<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false)
{
    //! initial configuration of the mail

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '40f8e515daaffc';
    $phpmailer->Password = '57eb63240cd44a';

    $phpmailer->setFrom('contact@uriot.me', 'UriotDev');
    $phpmailer->addAddress($email, $name);     //Add a recipient

    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //! send the mail
    $phpmailer->send();

}

?>