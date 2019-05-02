<?php
print "Enter number:";
$handle = fopen ("php://stdin","r");
$number = fgets ($handle);

$arr = [];

while ((int)$number) {
	$arr[] = (int)$number % 10;
	$number = (int)$number / 10;
}

$rev = (array_reverse($arr));
$sum = (array_sum($rev));
$num = (implode($rev));

if ($num % $sum == 0) {
	print $sum . PHP_EOL;
} else print "NO!". PHP_EOL;