<?php

$fp = fopen("numeroDownload.txt", "r");
if(!$fp) die ("Errore nella operaione con il file");
$data = fread($fp, 10);
//echo $data;
fclose($fp);
$num = intval($data);
$num = $num +1;
//echo $num;
$fp1 = fopen("numeroDownload.txt", "w");
if(!$fp1) die ("Errore nella operaione con il file");
fwrite($fp1,$num);
echo $num;
?>