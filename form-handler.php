<?php
$name = $-POST['name'];
$Visitor-email = $-POST['email'];
$subject = $-POST['subject'];
$Message = $-POST['message'];

$email-from = 'info@derickssenyonga.github.io/D-EVENTS/';

$email-subject = 'New Form Submission';

$email-body = "User Name: $name.\n".
                "User Email: $visitor.\n".
                "Subject: $subbject.\n".
                "User Message: $message.\n";

$to = 'Derickss0424@gmail.com';

$headers = "From: $email-from \r\n";

$headers .= "Reply-To: $Visitor-email \r\n";


mail($to,$email-subject,$email-body,$headers);

header("Location: contact.html")
?>