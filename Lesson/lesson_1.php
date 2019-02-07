<?php
$arr = [2.1,4.2,4.7,5.3];

function sum($arr) {
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
	$sum += $arr[$i];
}
return $sum;
}

print sum($arr);