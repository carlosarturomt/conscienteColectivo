<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false)
{

  // Initial Settings of my server of mails :)
  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.gmail.com'; //To use Gmail
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $phpmailer->Port = 465; //2525 Before this changes.
  $phpmailer->Username = 'profesionistasmexico@gmail.com';
  $phpmailer->Password = 'xfqceqizjkenentz';

  // Recipients
  $phpmailer->setFrom('profesionistasmexico@gmail.com', 'Carlos Miranda');
  $phpmailer->addAddress('sepapsicologia@gmail.com', 'Altagracia Colorado');
  $phpmailer->addAddress('carlosarturomt@gmail.com', 'Carlos Arturo MT');

  // Content
  $phpmailer->isHTML($html); //Set email format to HTML
  $phpmailer->Subject = "Interesado en ConscienteColectivo";
  $phpmailer->Body    = $body;

  // Send Mail
  $phpmailer->send();
}