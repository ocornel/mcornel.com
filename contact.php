<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$full_message = "From: $name \n Message: $message \n Phone: $phone";
$mailheader = 'From: mrtncornel@gmail.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("mrtncornel@gmail.com", $subject, $full_message, $mailheader) or die("Error!");
echo "Thank You!";

?>
