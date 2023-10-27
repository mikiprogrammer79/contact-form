<?php
if (!isset($_POST["submit"]))
{
    echo("Error: You need to submit the form");
}

// Accessing Form submission data:
$name = $_POST["name"];
$userEmail = $_POST["email"];
$userAge = $_POST["age"];
$contactReason = filter_input(INPUT_POST, "reason", FILTER_SANITIZE_STRING);
$message = $_POST["message"];

?>