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

// ----------------------------������������-------------------------- // 
 
$adminemail="duha.96@mail.ru";  // e-mail ������
 
$backurl="Z:/home/localhost/www/venece/www/index.html";  // �� ����� ��������� ��������� ����� �������� ������ 
 
//---------------------------------------------------------------------- // 

 
  
 
// ��������� ���������� e-mail 

$head='\r\n������������ ������ ��: '.$name;
//$msg'���: '.$name.'\r\n����� �����: '.$mail.'\r\n����� ��������: '.$number.'\r\n����� ����������: '.$time.'\r\n���������� ������: '.$guests.'\r\n���� ������: '.$arrival.'\r\n���� ������: '.$date_out.'\r\n���������: '$comments;
$msg1='���: '.$name;
$msg2='|   ����� �����: '.$mail;
$msg3='|   ����� ��������: '.$number;
$msg4='|   ����� ����������: '.$time;
$msg5='|   ���������� ������: '.$guests;
$msg6='|   ���� ������: '.$arrival;
$msg7='|   ���� ������: '.$out;
$msg8='|   ���������: '.$comments;
$msg=$msg1.$msg2.$msg3.$msg4.$msg5.$msg6.$msg7.$msg8;
 // ���������� ������ ������  
 
mail($adminemail, $head, $msg);
 
  
 
// ��������� � ���� ������ 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time ��������� �� $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// ������� ��������� ������������ 
 
print "<script type="text/javascript">
  location.replace("index.html");
</script>";  
exit; 
 
 
?>