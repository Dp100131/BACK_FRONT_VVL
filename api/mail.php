<?php

require("./vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = true){

    // COnfiguración inicial del servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'danielandrespintoortega21212@gmail.com';
    $phpmailer->Password = 'zzfs yaxv qiiw weqc'; // Key generada en email.

    //Añadiendo destinatarios
    $phpmailer->setFrom('danielandrespintoortega21212@gmail.com', 'Daniel Pinto'); // Hay que tener un gmail intermedio para poder enviar la info.
    $phpmailer->addAddress('daniel2190558@correo.uis.edu.co', 'Daniel Pinto'); // El email final

    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    //Mandar el correo
    $phpmailer->send();

}

?>