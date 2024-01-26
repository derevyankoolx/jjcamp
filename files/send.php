<?php
$to  = "<info@iq2.com.ua>";
$from = "admin@jjcamp.com.ua";
$subject = "Підлітковий табір “J.J CAMP”";

$location = $_POST['location'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$time = $_POST['time'];

$messages = '<div>Місцезнаходження: '. $location .'</div></br><div>Ім’я та призвище: '. $name .'</div></br><div>Номер телефону: '. $phone .'</div></br><div>Посиланя для нас: '. $message .'</div></br><div>Вибрати час: '. $time .'</div></br>';

$headers  = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: J.J CAMP <admin@jjcamp.com.ua>\r\n";
$headers .= "Reply-To: reply-to@example.com\r\n";

mail($to, $subject, $messages, $headers);
?>