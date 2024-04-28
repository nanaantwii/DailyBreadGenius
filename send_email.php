<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "ikwabz@gmail.com"; // Your email address
    $subject = "New Message from LifeHacksGenius Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Thank you, $name! Your message has been sent successfully.</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>
