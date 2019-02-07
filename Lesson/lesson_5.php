<?php
print "How many stars do you want:";
$handle = fopen('php://stdin','r');
$a = intval(fgets($handle));


for ($j = 0;$j <= $a; $j++) {
	print str_repeat(" ", $a--).str_repeat(" x",$j).PHP_EOL;
}



for ($i = $a ;$i > 0; $i--) {
	print str_repeat(" ", $a+++2).str_repeat(" x",$i).PHP_EOL;
}