<?php
// SMTP server settings
$smtp_server = 'smtp.example.com';
$smtp_username = 'user@example.com';
$smtp_password = 'password';
$smtp_port = 587;

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send email
$to = 'recipient@example.com';
$subject = 'New message from contact form';
$body = "Name: $fullname\n\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $email\r\n";
if (mail($to, $subject, $body, $headers)) {
  echo 'Message sent successfully';
} else {
  echo 'Message failed to send';
}
?>
