<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Phone: ".$phone."
Subject: ".$subject."
Message: ".$message."
";

// Add headers for proper email formatting
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$mail_success = mail("s.z.bhatti@gmail.com", "New Message", $email_message, $headers);

// Check if mail sent successfully
if ($mail_success) {
    header("Location: ../mail-success.html");
    exit; // Exit to prevent further execution
} else {
    echo "Error: Failed to send email.";
}
?>
