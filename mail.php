<?php

// https://www.hostinger.es/tutoriales/como-usar-el-servidor-smtp-gmail-gratuito/ para poder activar el host smtp

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';


enviarEmail();

function enviarEmail(){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])){
        //mandar correo
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            // $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'ssl://smtp.gmail.com';                   // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->Username = 'gersondani2001@gmail.com';                 // SMTP username
            $mail->Password = 'gersondani2001$danigerson#';                           // SMTP password

            //Recipients
            $mail->setFrom('gersondani2001@gmail.com', 'Mailer');
            $mail->addAddress('gersondani2001@gmail.com', 'Mailer');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Correo de contacto';
            $mail->Body    = 'Nombre: ' . $name . '<br/>Correo: ' . $email . '<br/>Mensaje:' . $comment;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

    }else{
        return;
    }
}

?>
