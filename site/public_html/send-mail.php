<?php
// Basic mail handler for contact form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact.php');
  exit;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (!$name || !$email || !$message) {
  $error = 'Please fill out all fields correctly.';
  header('Location: contact.php?error=' . urlencode($error));
  exit;
}

$to = 'leencotech@gmail.com, contact@leenco.tech';
$subject = "Website Contact: " . $name;
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $name <$email>\r\n" . "Reply-To: $email\r\n";

// Try to send mail - on shared hosting mail() is usually available.
$success = mail($to, $subject, $body, $headers);

if ($success) {
  header('Location: contact.php?sent=1');
} else {
  header('Location: contact.php?sent=0');
}
exit;
?>