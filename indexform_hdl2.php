<?php

//error_reporting(E_ALL);
$to = "lifemusic1314@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "person2@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers) or die("errors");
echo "Mail Sent.";
?>
