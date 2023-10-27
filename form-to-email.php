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
    "Reply-To: $userEmail" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Sending the email:
mail($to, $subject, $message, $headers);

// Navigate the user to a successful email sent page
echo("<h3>Thank you to submit your details and message</h3>
    <p>$name, your message has been successfully sent.</p>
    <p>You will get a response as soon as possible within the next 48 hours.</p>
    <p>Thanks</p>")
?>