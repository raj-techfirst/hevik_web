<?php
require_once 'config/config.php';
require_once 'includes/functions.php';
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Ensure no output before headers
ob_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['status' => 'error', 'message' => 'An error occurred'];

    // Get and clean form data
    $name = cleanInput($_POST['name'] ?? '');
    $email = cleanInput($_POST['email'] ?? '');
    $phone = cleanInput($_POST['phone'] ?? '');
    $subject = cleanInput($_POST['subject'] ?? '');
    $message = cleanInput($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        $response['message'] = 'All fields are required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Invalid email format';
    } else {
        try {
            $mail = new PHPMailer(true);

            // Server settings
            $mail->SMTPDebug = 0;    // Disable debug output for clean JSON response
            $mail->isSMTP();                       // Send using SMTP
            $mail->Host       = SMTP_HOST;         // Set the SMTP server to send through
            $mail->SMTPAuth   = true;             // Enable SMTP authentication
            $mail->Username   = SMTP_USERNAME;     // SMTP username
            $mail->Password   = SMTP_PASSWORD;     // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
            $mail->Port       = SMTP_PORT;        // TCP port to connect to

            // SSL Configuration
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Recipients
            $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
            $mail->addAddress(ADMIN_EMAIL);        // Add a recipient
            $mail->addReplyTo($email, $name);

            // Email content
            $emailContent = "
                <html>
                <head>
                    <title>New Contact Form Submission</title>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .header { background: #2D7D32; color: white; padding: 20px; text-align: center; }
                        .content { padding: 20px; background: #f9f9f9; }
                        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h2>New Contact Form Submission</h2>
                        </div>
                        <div class='content'>
                            <p><strong>Name:</strong> {$name}</p>
                            <p><strong>Email:</strong> {$email}</p>
                            <p><strong>Phone:</strong> {$phone}</p>
                            <p><strong>Subject:</strong> {$subject}</p>
                            <p><strong>Message:</strong></p>
                            <p>{$message}</p>
                        </div>
                        <div class='footer'>
                            <p>This email was sent from the Tiger Force contact form.</p>
                        </div>
                    </div>
                </body>
                </html>
            ";

            // Content
            $mail->isHTML(true);
            $mail->Subject = "New Contact Form Submission: {$subject}";
            $mail->Body    = $emailContent;
            $mail->AltBody = strip_tags($message);

            $mail->send();

            // Send confirmation email to user
            $mail->clearAddresses();
            $mail->addAddress($email, $name);

            // Confirmation email content
            $confirmationContent = "
                <html>
                <head>
                    <title>Thank You for Contacting Tiger Force</title>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .header { background: #2D7D32; color: white; padding: 20px; text-align: center; }
                        .content { padding: 20px; background: #f9f9f9; }
                        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h2>Thank You for Contacting Tiger Force</h2>
                        </div>
                        <div class='content'>
                            <p>Dear {$name},</p>
                            <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
                            <p>Here's a summary of your message:</p>
                            <p><strong>Subject:</strong> {$subject}</p>
                            <p><strong>Message:</strong></p>
                            <p>{$message}</p>
                            <p>If you have any urgent queries, please feel free to call us at +91-9904927824.</p>
                            <p>Best regards,<br>Tiger Force Team</p>
                        </div>
                        <div class='footer'>
                            <p>This is an automated response. Please do not reply to this email.</p>
                        </div>
                    </div>
                </body>
                </html>
            ";

            $mail->Subject = 'Thank you for contacting Tiger Force';
            $mail->Body    = $confirmationContent;
            $mail->AltBody = strip_tags($confirmationContent);

            $mail->send();

            $response = [
                'status' => 'success',
                'message' => 'Thank you for your message. We will get back to you soon!'
            ];
        } catch (Exception $e) {
            $response['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            error_log("Mail Error: " . $mail->ErrorInfo);
        }
    }

    // Clear any previous output
    ob_clean();

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
} else {
    // If not a POST request, redirect to contact page
    header('Location: contact.php');
    exit;
}
