<?php

$dim = @filesize ("../download/Account Manager 5.1 - Setup.zip") /1024;
$dim = round($dim);

$dim1 = @filesize ("../download/Account Manager 5.0 - Setup.zip") /1024;
$dim1 = round($dim1);

$dim2 = @filesize ("../download/Account Manager 4.0 - Setup.zip") /1024;
$dim2 = round($dim2);

$dim3 = @filesize ("../download/Account Manager Desktop 3.0 (setup).zip") /1024;
$dim3 = round($dim3);

$dim4 = @filesize ("../download/Account Manager  Desktop 1.5 (Setup).zip") /1024;
$dim4 = round($dim4);

$dim5 = @filesize ("../download/Account Manager Portable 3.0 (setup).zip") /1024;
$dim5= round($dim5);

$dim6 = @filesize ("../download/Account Manager Portable 1.5 (setup).zip") /1024;
$dim6 = round($dim6);

$num = strval($dim);
$num1 = strval($dim1);
$num2 = strval($dim2);
$num3 = strval($dim3);
$num4 = strval($dim4);
$num5 = strval($dim5);
$num6 = strval($dim6);

$num=$num."-".$num1."-".$num2."-".$num3."-".$num4."-".$num5."-".$num6;
echo $num;

?>