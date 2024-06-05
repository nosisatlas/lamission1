<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Database connection parameters
$servername = "localhost:3306"; // Change this if your database is hosted elsewhere
$username = "lamissio_admin"; // Change this to your database username
$password = "dO54%%r;{Mz."; // Change this to your database password
$database = "lamissio_contact"; // Change this to your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$to = "contact@lamission1.com";
// Get the form data and format it
$fullname = formatInput($_POST['fullname']);
$tel = formatInput($_POST['tel']);
$email = formatInput($_POST['email']);
$message = formatInput($_POST['message']);
// Retrieve form data

// Function to format input data (for example, to prevent SQL injection)
function formatInput($data) {
    // Remove leading/trailing whitespace
    $data = trim($data);
    // Convert special characters to HTML entities (to prevent XSS attacks)
    $data = htmlspecialchars($data);
    // You may apply more formatting based on your requirements
    return $data;
}

if(empty($tel) && empty($email)){
    header("Location: erreur.html");
    exit;
}

// SQL query to insert data into the table
$sql = "INSERT INTO ContactMessages (fullname, tel, email, message) 
        VALUES (?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssss", $fullname, $tel, $email, $message);
$stmt->execute();
// Close the statement and connection
$stmt->close();
$conn->close();

$mail = new PHPMailer(true); // Enable exceptions

try {
    $mail->isSMTP();
    $mail->Host = 'mail.lamission1.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@lamission1.com';
    $mail->Password = 'z-{Ap&KG#zCG'; // Use your actual email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL encryption
    $mail->Port = 465;

    $mail->setFrom($email, $fullname);
    $mail->addAddress($to);
    $mail->Subject = "Demander un rappel - Lamission 1";

    // Compose the email message
    $mail->Body = "Full Name: $fullname\n";
    $mail->Body .= "Phone Number: $tel\n";
    $mail->Body .= "Email: $email\n\n";
    $mail->Body .= "Message:\n$message";

    if ($mail->send()) {
        // Email sent successfully
        header("Location: merci.html");
        exit;
    } else {
        header("Location: erreur.html");
        exit;
    }
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: erreur.html");
        exit;
} catch (Error $e) {
    // echo "An error occurred: {$e->getMessage()}";
    
    header("Location: erreur.html");
        exit;
}
?>