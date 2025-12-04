<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Collect fields
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$subject = $_POST['subject'] ?? 'New Message';
$message = $_POST['message'] ?? '';

// $to = "info.bioalexis@gmail.com";
$to = "developerpathideamultiskill@gmail.com";

$full_message  = "Name: $name\n";
$full_message .= "Email: $email\n";
$full_message .= "Phone: $phone\n";
$full_message .= "Subject: $subject\n";
$full_message .= "Message:\n$message\n";

// Email headers
// Use a fixed From address to avoid SPF issues, set Reply-To to the sender
$headers  = "From: no-reply@bioalexis.com\r\n"; 
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Try sending mail
if (mail($to, "New Website Contact Form: $subject", $full_message, $headers)) {
    header("Location: ../contact.php?status=success");
} else {
    header("Location: ../contact.php?status=error");
}

exit;
?>
