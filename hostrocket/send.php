<?php
$name = $_POST['name'];
$city = $_POST['city'];
$newPost = $_POST['newPost'];
$phone = $_POST['phone'];

$email = $_POST['email'];
if (mail("dmitrijkrasiluk4@gmail.com", "📚 Новый желающий получить Библию!", "Имя:".$name."\nНаселенный пункт: ".$city." \nНовая почта: ".$newPost.". \nТелефон: ".$phone,"From: dmitrijkrasiluk4@gmail.com \r\n"))
 {     header("Location: index.html");
} else {
    echo "при отправке сообщения возникли ошибки";
}?>