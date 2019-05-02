<?php
$handle = fopen("php://stdin","r");
print "Enter chislitel_1 :";
$chisl1 = fgets($handle);
print "Enter znamenatel_1 :";
$znam1 = fgets($handle);
print "Enter chislitel_2 :";
$chisl2 = fgets($handle);
print "Enter znamenatel_2 :";
$znam2 = fgets($handle);

$sumznam = (int)$znam1 * (int)$znam2;

for ($i = 1; $i < $sumznam; $i++){
	if (($i % (int)$znam1 == 0) && ($i % (int)$znam2 == 0)) {
		break;
		return $i;
	}
}


$dop1 = $i / (int)$znam1;
$dop2 = $i / (int)$znam2;

$newchisl1 = $dop1 * (int)$chisl1;
$newchisl2 = $dop2 * (int)$chisl2;

$sumchisl = $newchisl1 + $newchisl2;
$sumchisl1 = $newchisl1 - $newchisl2;


print $sumchisl . "/" . $i; 
