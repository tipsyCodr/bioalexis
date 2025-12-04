<?php

error_reporting(0);

// Collect fields
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$subject = $_POST['subject'] ?? 'New Message';
$message = $_POST['message'] ?? '';

$to = "info.bioalexis@gmail.com";

$full_message  = "Name: $name\n";
$full_message .= "Email: $email\n";
$full_message .= "Phone: $phone\n";
$full_message .= "Subject: $subject\n";
$full_message .= "Message:\n$message\n";

// Email headers
$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Try sending mail
if (mail($to, "New Website Contact Form", $full_message, $headers)) {
    header("Location: ../contact.php?status=success");
} else {
    header("Location: ../contact.php?status=error");
}

exit;
?>
