<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ivandavid19299@gmail.com';                     //SMTP username
    $mail->Password   = 'pochoclo';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587; 
                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ivandavid19299@gmail.com', 'Personal');
    $mail->addAddress('ivandavid6084@hotmail.com', 'jua');     //Add a recipient
    

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'asunto';
    $mail->Body    = '<h1>Hola Bienvenido</h1>';
    $mail->AltBody = 'texto plano';

    $mail->send();
    echo 'mensaje enviado';
} catch (Exception $e) {
    echo "Hubo un error, Error: {$mail->ErrorInfo}";
}
?>