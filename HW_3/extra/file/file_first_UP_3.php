<?php
$first = fopen("first.txt","r");
$f = fgets($first);
$s = fgets($first);

$second = fopen("second_UP.txt","w+");

fputs($second,strtoupper($f));
fputs($second,strtoupper($s));
?>