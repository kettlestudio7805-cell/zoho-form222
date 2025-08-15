<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Change this to your email
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Your message has been sent successfully!";
    } else {
        echo "❌ Sorry, there was a problem sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>
