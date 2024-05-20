<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$Subject = $_POST['subject'];
$MESSAGE = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message .\n";

$to = 'piyushkumardas2002@gamil.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


 ?>
