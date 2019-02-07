<?php
$a = 26;
$b = 9;

function comp($a,$b) {
	if ($a < $b) return $a;
	elseif ($b < $a) return $b;
}

print comp($a,$b);