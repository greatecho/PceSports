<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'turesm456@student.mes.ac.in';
$mail->Password = 'Password@789456123';
$mail->SetFrom('no-reply@PCE.com');
$mail->Subject = 'Hello World';
$mail->Body = 'A test email';
$mail->AddAddress('testbud8@gmail.com');

$mail->Send();

?>