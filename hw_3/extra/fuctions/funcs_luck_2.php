<?php
print "Whill I get lucky tommorrow?";
function getAnswer($a) {
	if ($a == 1){
		return 1;
	}elseif ($a == 2) {
		return 2;
	}else;
}
$luck = getAnswer(rand(1,2));
	if ($luck == 1) {
	print "\nYES!\n";
	}elseif ($luck == 2) {
	print "\nNO\n";
	}else;
	?>
	