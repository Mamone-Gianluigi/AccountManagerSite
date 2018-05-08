<?php

$fp = fopen("numeroDownload.txt", "r");
if(!$fp) die ("Errore nella operaione con il file");
$data = fread($fp, 10);
//echo $data;
fclose($fp);
$num = intval($data);
echo $num;
?>