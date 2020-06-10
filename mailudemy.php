<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);
//try {
    
    $mail->setLanguage('tr');
    //$mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'udemytest123erbilen@gmail.com';
    $mail->Password = 'zm%L(2akf^&{Qqkk';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    // maili gönderen kişi
    $mail->setFrom('udemytest123erbilen@gmail.com', 'Udemy Tayfun Erbilen');
    $mail->addAddress('tayfunerbilen@gmail.com');
    $mail->addAddress('info@uzmancevap.org');
    $mail->addReplyTo('info@uzmancevap.org', 'Uzman Cevap');

    $mail->addAttachment('PHPMailer-master.zip', 'phpmailkullanimi.zip');

    $mail->isHTML(true);
    $mail->Subject = 'Udemy - şeker şey mail geldi mi=';
    $mail->Body = 'Burası test olsun.';

    $mail->send();

    echo "Mail gönderme işlemi başarıyla gerçekleşti.";

//} catch (Exception $e){
   // echo $e->errorMessage();
//}
*/
?>