<?php
$first = fopen("first.txt","r");
$f = fgets($first);
$s = fgets($first);

$second = fopen("second.txt","w+");

fputs($second,str_repeat($f,2));
fputs($second,str_repeat($s,2));
?>