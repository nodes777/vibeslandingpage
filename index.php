<?php

$to      = "taylor@spreadthevibe.org, jeff@spreadthevibe.org";
$subject = 'From the Spread The Vibe Landing Page';
$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];
$message = <<<EMAIL
From: $name
Email: $email
$message
EMAIL;
$headers = 'From: ' . $email;

mail($to, $subject, $message, $headers);
echo "Thank you for contacting us! We will be in touch shortly";
?>