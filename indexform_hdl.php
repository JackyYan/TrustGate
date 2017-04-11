<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'lifemusic1314@gmail.com';                 // SMTP username
$mail->Password = 'woshisinger';                           // SMTP password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;                             // Enable encryption, 'ssl' also accepted

$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->addAddress('lifemusic1314@gmail.com','JackyYan');       // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'TrustGate';
$mail->Body    = 'Name: '. $_POST['name'] .'<br><br>'.'Email: '. $_POST['email'].'<br><br>'.'Contact Number: '. $_POST['hp'].'<br><br>'.'Company/Organisation: '. $_POST['companyname'].'<br><br>'.'Message: '.'<br>'. $_POST['message'];


if(!$mail->send()) {
    echo 'Message could not be sent.';
    $message=  'Error::<div class="alert alert-danger"><strong><i class="fa fa-info message-icon"></i>Something Went Wrong While Sending Message.</strong></div>';
} else {
    $message= 'Success::<div class="alert alert-success"><strong><i class="fa fa-info message-icon"></i>Message Sent Successfully.</strong></div>';
}

echo $message;
