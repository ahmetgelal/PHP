<?php
echo("evet bu php calisti");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src\Exception.php';
require 'src\PHPMailer.php';
require 'src\src\SMTP.php';

$mail=new PHPMailer(true);

 


$mail->SMTPDebug = 2;                                       // Enable verbose debug output
$mail->isSMTP();                                            // Set mailer to use SMTP
$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'ahmetgelal@gmail.com';                     // SMTP username
$mail->Password   = 'deutschland1973-1978';                               // SMTP password
//$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
$mail->Port       = 587;                                    // TCP port to connect to



$mail->setFrom('','AG Yazilim Department');
$mail->addAdress('ag.softwaredeveloper@gmail.com','Kullanici');
$mail->addReplyTo('admin@kiralahepsini.com', 'Information');// kullanici yanitlarsa maili buraya gidecek

$mail->isHTML(true);                                  // Set email format to HTML
  
$mail->Subject = 'Burasi Mail basligi';
    $mail->Body    = 'Burasi Mailin Texti ve icerigi';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';// yedek icerik onemli degil.
   $mail->send();// bu da maili yollar
 echo ("mail yollandi");
 




?>