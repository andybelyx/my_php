<?php
print "Enter two number and calculate :\n";
$handle = fopen("php://stdin","r");
$num1 = fgets($handle);
$num2 = fgets($handle);

$sum = function($e, $f) {
	return $e + $f;
};

$sub = function($e, $f) {
	return $e - $f;
};

$mult = function($e, $f) {
	return $e * $f;
};

$div = function($e, $f) {
	return $e / $f;
};

function operation($a, $b, $op) {
	$res = $op($a, $b);
	return $res;
}
//Указываем с какими числами будет производится операция
//и тип операции. Если вместо $sub вставить $sum - числа будут складываться
$print = operation((int)$num1, (int)$num2, $div);

print "$print\n";