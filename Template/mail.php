<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function send($assunto, $mensagem){

    try {
        $mail = new PHPMailer(true);
        $mail->setLanguage('br');
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'tls://smtp.gmail.com';
        $mail->Username = "wendelfi66@gmail.com";
        $mail->Password = "gustavo09";
        $mail->Port = 587;
        $mail->setFrom("wendelfi66@gmail.com");
        $mail->addAddress("wendelfi66@gmail.com");
        $mail->addReplyTo("wendelfi66@gmail.com");
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $assunto;
        $mail->Body = $mensagem;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
        echo "ERRO: {$mail->ErrorInfo}";
    }
}
