<?php

/* https://api.telegram.org/bot5342472775:AAGEzrh4zDazAizhnJdPLxIMbtVqA7jzu9c/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$token = "5213577847:AAEwG2iv8JgNezjngad9zSozO8mPTS_BOz8";
$chat_id = "-631759509";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


?>
