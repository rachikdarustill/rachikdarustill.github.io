<?php

$name = $_POST['name'];

$address = 'arturovichrach@yandex.ru';
$sub = '=?utf-8?B?'. base64_encode('Сообщение:') .'?=';
$mess= "Отправитель: $name \n $lastname \n ";
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";

mail($address, $sub, $mess, $headers);

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

?>