<?php
print "Give it to me!\n";
$handle = fopen("php://stdin","r");
$input = fgets($handle);

switch ($input) {
	case $input > 1000:
		print "\n!!!!WOOOWWWW!!!!\n";
		break;
	case $input > 10 && $input < 100:
		print "OK :(";
		break;
	case $input > 100:
		print "Thanks, man!";
		break;
	default;
		print "WHAAAAT???";
		break;
}
print "\n";
?>
