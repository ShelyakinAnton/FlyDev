

<?php

header("Content-Type: text/html; charset=UTF-8");

$name=$_GET['name'];
$mail=$_GET['e-mail'];
$number=$_GET['phone'];
$time=$_GET['staying'];
$guests=$_GET['guests'];
$out=$_GET['out'];
$arrival=$_GET['arrive'];
$comments=$_GET['comments'];

// ----------------------------конфигурация-------------------------- // 
 
$adminemail="veniceneva@gmail.com";  // e-mail админа
 
$backurl="index.html";  // На какую страничку переходит после отправки письма
 
//---------------------------------------------------------------------- // 

 
  
 
// Проверяем валидность e-mail 

$head='Бронирование номера от: '.$name;
$msg1='Имя: '.$name;
$msg2='   |   Адрес почты: '.$mail;
$msg3='   |   Номер телефона: '.$number;
$msg4='   |   Время проживания: '.$time;
$msg5='   |   Количество гостей: '.$guests;
$msg6='   |   Дата выезда: '.$arrival;
$msg7='   |   Дата заезда: '.$out;
$msg8='   |   Пожелания: '.$comments;
$msg=$msg1.$msg2.$msg3.$msg4.$msg5.$msg6.$msg7.$msg8;
 // Отправляем письмо админу  
 
mail($adminemail, $head, $msg);
 
  
 
// Сохраняем в базу данных 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Сообщение от $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// Выводим сообщение пользователю 
 
print "<script type='text/javascript'>
  location.replace('index.html');
</script>";  
exit; 
 
 
?>