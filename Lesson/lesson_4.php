<?php
$a = 357644;

function split($split) {
	
	$a = str_split($split,1);
$sum = 0;
	foreach ($a as $key) {
		$sum +=$key;
	}if ($sum > 9 ) {print split($sum);
	}else print $sum;
}

split($a);

