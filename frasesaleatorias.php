<?php  
$frases = array();

$file = fopen("frases/frases.txt", "r");
while(!feof($file)) {
	$frases[] = fgets($file);
}
fclose($file);

?>