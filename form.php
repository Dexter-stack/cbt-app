<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sulaimanmuhammed18@gmail.com';                 // SMTP username
$mail->Password = '08100891337';                           // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'sulaimanmuhammed18@gmail.com';
$mail->FromName = 'sulaimanmuhammed18@gmail.com';
$mail->addAddress('khadijatomowunmi74@gmail.com', 'User');     // Add a recipient
$mail->addAddress('sulaimanmuhammed18@gmail.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('sulaimanmuhammed18@gmail.com');
$mail->addBCC('sulaimanmuhammed18@gmail.com');

//$mail->addAttachment('');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'our cbt';
$mail->Body    = 'My cbt welcomed you <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


























?>