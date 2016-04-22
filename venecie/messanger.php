<?php

header("Content-Type: text/html; charset=UTF-8");

$otziv=$_GET['otziv'];

// ----------------------------конфигурация-------------------------- // 

$adminemail="veniceneva@gmail.com";  // e-mail админа

$backurl="index.html";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- // 




// Проверяем валидность e-mail 

$head='Отзыв о проживании ';
$msg1='Отзыв: '.$otziv;
$msg=$msg1;
// Отправляем письмо админу

mail($adminemail, $head, $msg);



// Сохраняем в базу данных 

$f = fopen("message.txt", "a+");

fwrite($f," \nОтзыв о проживании");

fwrite($f,"\n $msg ");

fwrite($f,"\n ---------------");

fclose($f);



// Выводим сообщение пользователю 

print "<script type='text/javascript'>
  location.replace('index.html');
</script>";
exit;


?>