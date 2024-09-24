<?php

$DataActual = date("Y-m-d H:i:s");

$formato1 = date("Y/m/d");    // Format 2013/09/01
$formato2 = date("d.m.y");    // Format 13.09.01
$formato3 = date("Y-m-d");    // Format 2001-03-10

//imprimir les variables dels formats
echo $formato1 . "\n";  // 2013/09/01
echo $formato2 . "\n";  // 13.09.01
echo $formato3 . "\n";  // 2001-03-10
?>
