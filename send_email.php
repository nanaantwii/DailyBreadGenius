<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Here you can process the form submission, for example, sending an email
  
  // Redirect the user to a thank you page after form submission
  header("Location: thank-you.html");
  exit();
} else {
  // If someone tries to access this script directly without submitting the form, redirect them to the contact page
  header("Location: contact.html");
  exit();
}
?>
