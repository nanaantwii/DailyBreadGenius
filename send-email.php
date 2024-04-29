<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set and not empty
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) &&
        !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

        // Sanitize the form data to prevent SQL injection and other attacks
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Here you can process the form submission, for example, sending an email
        // For simplicity, let's just print the received data
        echo "<h1>Thank You!</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Message: $message</p>";
        
    } else {
        // If any required field is missing or empty, redirect back to the contact page
        header("Location: contact.html");
        exit();
    }
} else {
    // If someone tries to access this script directly without submitting the form, redirect them to the contact page
    header("Location: contact.html");
    exit();
}
?>
