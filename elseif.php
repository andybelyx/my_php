<?php
print "Give me the mark!\n";
$handle = fopen("php://stdin","r");
$input = fgets($handle);
if ($input == 2) {
	print "I am better!!";
} elseif ($input == 3) {
	print "OK :(";
} elseif ($input == 4) {
	print "I am good :)";
} elseif ($input == 5) {
	print "YeeeeWhaaaa!!!!";
} else print "\n";
?> 
