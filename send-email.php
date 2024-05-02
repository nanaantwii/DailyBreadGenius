<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here you can process the form submission, for example, sending an email

    // Redirect the user to a thank you page after form submission
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Thank You!</title>
    </head>
    <body>
        <h1>Thank You!</h1>
    </body>
    </html>";
    exit();
} else {
    // If someone tries to access this script directly without submitting the form, redirect them to the contact page
    header("Location: contact.html");
    exit();
}
?>
