<?php

header("Content-Type: text/html; charset=UTF-8");

$otziv=$_GET['otziv'];

// ----------------------------������������-------------------------- // 

$adminemail="veniceneva@gmail.com";  // e-mail ������

$backurl="index.html";  // �� ����� ��������� ��������� ����� �������� ������

//---------------------------------------------------------------------- // 




// ��������� ���������� e-mail 

$head='����� � ���������� ';
$msg1='�����: '.$otziv;
$msg=$msg1;
// ���������� ������ ������

mail($adminemail, $head, $msg);



// ��������� � ���� ������ 

$f = fopen("message.txt", "a+");

fwrite($f," \n����� � ����������");

fwrite($f,"\n $msg ");

fwrite($f,"\n ---------------");

fclose($f);



// ������� ��������� ������������ 

print "<script type='text/javascript'>
  location.replace('index.html');
</script>";
exit;


?>