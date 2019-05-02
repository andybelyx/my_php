<?php 
print "Enter your number:";
$handle = fopen("php://stdin","r");
$num = fgets($handle);

function transNumber($a){
	if (($a > 15) || ($a < 3)) {
		return $a;
	}else return "3\n";
}
print transNumber($num);
?>