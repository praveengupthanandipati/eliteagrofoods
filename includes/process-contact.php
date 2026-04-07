<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject_category = strip_tags(trim($_POST["subject"]));
    $message_content = strip_tags(trim($_POST["message"]));

    // Recipient email
    $to = "praveen@corewebpro.in";

    // Set email subject based on category
    $subject = "Elite Agro Contact: " . strtoupper($subject_category);

    // Build email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Subject Category: $subject_category\n\n";
    $email_content .= "Message:\n$message_content\n";

    // Build email headers
    $email_headers = "MIME-Version: 1.0" . "\r\n";
    $email_headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
    $email_headers .= "From: Elite Agro Website <noreply@eliteagro.com>" . "\r\n";
    $email_headers .= "Reply-To: $email" . "\r\n";
    $email_headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Redirection with success code
        header("Location: ../contact.php?success=1#contact-form");
    } else {
        // Redirection with error code
        header("Location: ../contact.php?error=1#contact-form");
    }
} else {
    // Not a POST request
    header("Location: ../contact.php");
}
exit;
?>