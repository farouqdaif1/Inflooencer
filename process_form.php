<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Add more fields as needed

    // Compose email
    $to = "daiffarouq@gmail.com";
    $subject = "Add me to wait list";
    $message = "Name: $name\nEmail: $email\n";
    // Add more fields to the message as needed

    // Send email
    mail($to, $subject, $message);

    // Redirect after sending email (optional)
    // header("Location: index.html");
    exit();
}