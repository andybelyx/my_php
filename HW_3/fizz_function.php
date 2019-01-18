<?php
$handle = fopen ("num.txt","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$num3 = fgets($handle);

function fizzbuzz($c, $d) {
	$res = $c % $d;
	return $res;
}

for ($i = 1; $i <= $num3; $i++) {
 $f = fizzbuzz($i, (int)$fizz);
 $b = fizzbuzz($i, (int)$buzz);
 		if (($f == 0) && ($b == 0)) {
 			print "FB ";
 		}elseif ($f == 0) {
 			print "F ";
 		}elseif ($b == 0) {
 			print "B "; 		
 		}else print "$i ";
}