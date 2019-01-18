<?php
print "What tea do you want? Enter 'black or green':";
$handle = fopen("php://stdin", "r");
$tea = fgets($handle);
$tea = str_replace("\n", "",$tea);

function tea($t) {
	if ($t == "black") {
		return 1;
	}elseif ($t == "green") {
		return 2;
	} else;
}

$createTea = tea($tea);

 	switch ($createTea) {
 		case 1:
 		print "\nGo to the kitchen > Take BLACK tea > Pour boiling water\n";
			break;
 		case 2:
 		print "\nGo to the kitchen > Take GREEN tea > Pour boiling water\n";
			break;
 	}
 ?>