<?php
// contact.php - Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "info@sanatechsupport.com"; // Your email address
    $subject = "New Contact Form Submission from SANA TECH SUPPORT Website";
    
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Service Needed: $service\n\n";
    $email_content .= "Message:\n$message\n";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $email_content, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request method.";
}
?>