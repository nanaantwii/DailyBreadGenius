<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Recipient Email Address
    $to = "kidwiza007@gmail.com";
    
    // Email Subject
    $subject = "New Message from Contact Form";
    
    // Email Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $name <$email>\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Email Content
    $email_content = "
    <html>
    <body>
    <h2>You have received a new message from the contact form</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong><br>$message</p>
    </body>
    </html>
    ";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form is not submitted, redirect to the contact page
    header("Location: contact.html");
    exit;
}
?>
