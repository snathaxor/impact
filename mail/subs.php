<?php

$email = $_POST['email'];


$email_message = "

Email: ".$email."

";

// Add headers for proper email formatting
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$mail_success = mail("subscriptions@impactrcm.com", "New Subscription", $email_message, $headers);

// Check if mail sent successfully
if ($mail_success) {
    header("Location: mail-success.html");
    exit; // Exit to prevent further execution
} else {
    echo "Error: Failed to send email.";
}
?>
