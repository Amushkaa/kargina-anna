<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Формирование самого письма
$title = "Сообщение с сайта-портфолио";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>E-mail:</b> $email<br><br>
<b>Сообщение:</b><br>$message";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        $GLOBALS['status'][] = $str;
    };

    // Настройки вашей почты
    $mail->Host = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username = 'amushkaaaa@yandex.ru'; // Логин на почте
    $mail->Password = 'qeguuqqklkkucszs'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('amushkaaaa@yandex.ru', 'amushkaaaa'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('ameee.am@gmail.com');

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

// Проверяем отравленность сообщения

    if ($mail->send()) {
        $result = "success";
    } else {
        $result = "error";
    }
}
catch (Exception $e) {
    $result = "error";
    $status = "Error reason: {$mail->ErrorInfo}";
}

$response = ["message" => $result];
/*}*/

header('Content-type: application/json');
echo json_encode($response);