<?php

//error_reporting(E_ALL);
$to = "enquiry@msctrustgate.com";
$subject = "Trustgate Enquiry";
$message = 'Name: '. $_POST['name'] ."\n\n".'Email: '. $_POST['email']."\n\n".'Contact Number: '. $_POST['hp']."\n\n".'Company/Organisation: '. $_POST['companyname']."\n\n".'Message: '."\n". $_POST['message'];

$from = $_POST['email'];
$headers = "From:" . $_POST['email'];
$send = mail($to,$subject,$message,$headers);

if($send){
    $message= 'Success::<div class="alert alert-success"><strong><i class="fa fa-info message-icon"></i>Message Sent Successfully.</strong></div>';
}else{
  echo 'Message could not be sent.';
  $message=  'Error::<div class="alert alert-danger"><strong><i class="fa fa-info message-icon"></i>Something Went Wrong While Sending Message.</strong></div>';
}
echo $message;
?>
