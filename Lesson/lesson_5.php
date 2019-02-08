<?php
print "How many stars do you want:";
$handle = fopen('php://stdin','r');
$c = intval(fgets($handle));
$a = $c * 2;

for ($j = 0; $j <= $a; $j++) {
	print str_repeat(" ", $a--).str_repeat(" *",$j).PHP_EOL;
}
for ($i = $a; $i > 0; $i--) {
	print str_repeat(" ", $a+++2).str_repeat(" *",$i).PHP_EOL;
}
