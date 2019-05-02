<?php
$handle = fopen ("num.txt","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$num = fgets($handle);

function fizz($c) {
global $fizz;
global $buzz;
	if (($c % (int)$fizz == 0)&&($c % (int)$buzz == 0)) {
		return "FB";
	}elseif ($c % (int)$fizz == 0){
		return "F";
	}elseif ($c % (int)$buzz == 0){
		return "B";
	}else return $c;
}

print_r(array_map('fizz',range(1,$num)));