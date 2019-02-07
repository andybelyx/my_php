<?php
$arr = [1,2,3,4,3,2,6];

function sum($arr) {
	$sum = 0;
	for ($i = 0; $i < count($arr); $i++) {
		$sum += $arr[$i];	
	}
print $sum;	
}
sum($arr);