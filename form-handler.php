<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'www.tanishaverma@gmail.com';

$email_subject ='New Form Submission';

$email_body = "User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $emssage.\n";
?>