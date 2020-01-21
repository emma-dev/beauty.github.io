<?php 
$to  = "<sveta.pongo87@gmail.com>, " ; 
$to .= "sveta.pongo87@gmail.com>"; 

$message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: От кого письмо <from@example.com>\r\n"; 
$headers .= "Reply-To: sveta.pongo87@gmail.com\r\n"; 

mail($to, $message, $headers); 
?>