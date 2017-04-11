<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Тут указываем на какой ящик посылаем письмо
$to = "pavel@syatkin.ru";
//Далее идет тема и само сообщение
$subject = "Заявка с сайта AppleTea";
$message = "
Письмо отправлено из моей формы.<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "From: mysite.ru <site-email@mysite.ru\r\nContent-type: text/html;
charset=utf8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>
