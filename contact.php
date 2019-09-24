<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "mrtncornel@gmail.com";
$subject = "Contact Form";
$mailheader = 'From: mrtncornel@gmail.com' . "\r\n" .
    'Reply-To: ' .$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>

