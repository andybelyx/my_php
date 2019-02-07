<?php
print "Enter your number:";
$handle = fopen('php://stdin','r');
$number = fgets($handle);


for ($i = 1; $i <= (int)$number; $i++) {
	if ($i == 1) {print "ONE ";}
	elseif ($i == 2) {print "TWO ";}
	elseif ($i == 3) {print "THREE ";}
	elseif ($i == 4) {print "FOUR ";}
	elseif ($i == 5) {print "FIVE ";}
	elseif ($i == 6) {print "SIX ";}
	elseif ($i == 7) {print "SEVEN ";}
	elseif ($i == 8) {print "EIGHT ";}
	elseif ($i == 9) {print "NINE ";}
	elseif ($i == 10) {print "TEN";}
}