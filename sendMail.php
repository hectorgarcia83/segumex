<?php 
date_default_timezone_set('America/Mazatlan');

$file = fopen("correos.txt", "a");
fwrite($file, date("Y-m-d H:i:s")." - ". $_POST["mail"] . PHP_EOL);
fclose($file);


$to = "hectorgarcia83@gmail.com,info@securitybox.com.mx";
$subject = "Registro de Correo Web Segumex";
$body = "Una persona ha solicitado información desde el sitio web.";
$body .= "<br>Su correo electrónico es: ".$_POST["mail"];

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: Segumex <no-reply@segumex.com>' . "\r\n";

mail($to,$subject,$body,$cabeceras);
?>