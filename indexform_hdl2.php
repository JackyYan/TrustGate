<?php

//error_reporting(E_ALL);
$to = "lifemusic1314@gmail.com";
$subject = "Trustgate Enquiry";
$message = 'Name: '. $_POST['name'] .'<br><br>'.'Email: '. $_POST['email'].'<br><br>'.'Contact Number: '. $_POST['hp'].'<br><br>'.'Company/Organisation: '. $_POST['companyname'].'<br><br>'.'Message: '.'<br>'. $_POST['message'];

$from = $_POST['email'];
$headers = "From:" . $_POST['email'];
$send = mail($to,$subject,$message,$headers)

if($send){
    $message= 'Success::<div class="alert alert-success"><strong><i class="fa fa-info message-icon"></i>Message Sent Successfully.</strong></div>';
}else{
  echo 'Message could not be sent.';
  $message=  'Error::<div class="alert alert-danger"><strong><i class="fa fa-info message-icon"></i>Something Went Wrong While Sending Message.</strong></div>';
}
echo $message;
?>
