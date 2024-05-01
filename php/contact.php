<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email address where you want to receive the messages
    $to = "fz.farhane109@gmail.com";

    // Subject of the email
    $subject = "New Contact Form Submission - Lamission 1 Website";

    // Compose the email message
    $email_message = "Full Name: $fullname\n";
    $email_message .= "Phone Number: $tel\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    mail($to, $subject, $email_message);
    // Send email
    // if () {
    //     // Email sent successfully, execute JavaScript code
    //     echo "<script>";
    //     echo "alertify.set('notifier','position', 'top-center');";
    //     echo "alertify.success('Message envoyé! Nous vous contacterons soon');";
    //     echo "</script>";
        
    //     // Redirect after submission (optional)
    //     header("Location: index.html");
    //     exit();
    // } else {
    //     // Error handling if email sending fails
    //     echo "Error: Unable to send email.";
    // }
}
?>