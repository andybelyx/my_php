<?php
$first = fopen("first.txt","r");
$f = fgets($first);
$s = fgets($first);

$toupper = function($a) {
	return strtoupper($a);
};
$second = fopen("second_UP.txt","w+");

fputs($second,$toupper($f));
fputs($second,$toupper($s));
?>
