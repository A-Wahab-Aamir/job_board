<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Basic validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo '<script>alert("All fields are required.")</script>';
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email format.")</script>';
        exit;
    }

    // Sanitize email headers to prevent header injection attacks
    $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safe_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $safe_subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    // Set email parameters
    $to = "hafizsanwalali@gmail.com";  // Replace with your email address
    $headers = "From: " . $safe_name . " <" . $safe_email . ">\r\n";
    $headers .= "Reply-To: " . $safe_email . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Email subject
    $email_subject = "New Contact Form Submission: " . $safe_subject;

    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Here are the details:\n";
    $email_body .= "Name: " . $safe_name . "\n";
    $email_body .= "Email: " . $safe_email . "\n";
    $email_body .= "Subject: " . $safe_subject . "\n";
    $email_body .= "Message:\n" . $safe_message . "\n";

    // Send the email and check for success
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo '<script>alert("Message sent successfully!"); window.location.href = "thankyou.html";</script>';
    } else {
        echo '<script>alert("Sorry, something went wrong. Please try again later.")</script>';
    }
} else {
    echo '<script>alert("Invalid request method.")</script>';
}
?>
