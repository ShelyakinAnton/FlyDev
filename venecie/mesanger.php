<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<?php

$name=$_GET['name'];
$mail=$_GET['e-mail'];
$number=$_GET['phone'];
$time=$_GET['staying'];
$guests=$_GET['guests'];
$out=$_GET['out'];
$arrival=$_GET['arrive'];
$comments=$_GET['comments'];

// ----------------------------конфигурация-------------------------- // 
 
$adminemail="duha.96@mail.ru";  // e-mail админа
 
$backurl="Z:/home/localhost/www/venece/www/index.html";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 

 
  
 
// Проверяем валидность e-mail 

$head='\r\nБронирование номера от: '.$name;
//$msg'Имя: '.$name.'\r\nАдрес почты: '.$mail.'\r\nНомер телефона: '.$number.'\r\nВремя проживания: '.$time.'\r\nКоличество гостей: '.$guests.'\r\nДата заезда: '.$arrival.'\r\nДата выезда: '.$date_out.'\r\nПожелания: '$comments;
$msg1='Имя: '.$name;
$msg2='|   Адрес почты: '.$mail;
$msg3='|   Номер телефона: '.$number;
$msg4='|   Время проживания: '.$time;
$msg5='|   Количество гостей: '.$guests;
$msg6='|   Дата заезда: '.$arrival;
$msg7='|   Дата выезда: '.$out;
$msg8='|   Пожелания: '.$comments;
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
 
print "<script type="text/javascript">
  location.replace("index.html");
</script>";  
exit; 
 
 
?>