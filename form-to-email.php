<?php

// Accessing Form submission data:
$name = $_POST["name"];
$userEmail = $_POST["email"];
$userAge = $_POST["age"];
$contactReason = $_POST["reason"];
$developer = $_POST["dev"];
$devArea = $_POST["area"];
$message = $_POST["message"];

// Compossing the email message:
$to      = "[Put your email address here]";
$subject = "Contact Form Submission";
$message = "Hello, 
    You have got a new submission message:
    Name: $name 
    Email: $userEmail
    Age: $userAge
    The contact reason is: $contactReason
    $name is a $developer developer
    Message:
    $message .
    ";
$area[] = $devArea;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Sending the email:
mail($to, $subject, $message, $headers);
?>