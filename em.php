<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['tel'];
//$text = $_POST['lic'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
  // почты и имя отправителя
  $mail->Host       = 'ssl://smtp.mail.ru';
$mail->SMTPSecure = 'ssl';
$mail->Port       = '465';
$mail->isSMTP();   
$mail->CharSet = "UTF-8";                                          
$mail->SMTPAuth   = true;
$mail->Username   = 'autoxep@mail.ru*'; 
$mail->Password   = '****'; // Пароль на почте


$mail->From = 'autoxep@mail.ru'; 
$mail -> FromName = 'Элсима ';
    // Получатель письма
  $mail->addAddress('Info@elsima.ru');  
   $mail->addAddress('rumta@ya.ru'); // Ещё один, если нужен
    // Прикрипление файлов к письму

        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'заявка с сайта elsima';
       $mail->Body    = "<b>Имя:</b> $name <br>
        <b>Телефон:</b> $email <br>  ";
        
// Проверяем отравленность сообщения
if ($mail->send()) {
     echo "$msg";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
