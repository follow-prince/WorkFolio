<?php
use PHPMailer\PHPMailer\PHPMailer;

// Include the PHPMailer library
require 'vendor/autoload.php';

// Retrieve form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];


// Configure SMTP settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server host
$mail->Port = 587;  // Replace with your SMTP server port
$mail->SMTPAuth = true;
$mail->Username = 'elavarasa.003@gmail.com';  // Replace with your SMTP username (email address)
$mail->Password = 'zitifjqhotiairhf';  // Replace with your SMTP password

// Set email details
$mail->setFrom('elavarasa.003@gmail.com', 'Prince');  // Replace with the sender's email address and name
$mail->addAddress('elavarasa.003@gmail.com');  // Replace with the recipient's email address
$mail->Subject = 'New Contact Form Submission';
$mail->Body = "Full Name: $fullname\nEmail: $email\nMessage: $message";

// Send the email
if (!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    header('Location: index.php');
}
?>
