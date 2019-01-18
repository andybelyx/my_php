<?php
$handle = fopen ("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$num3 = fgets($handle);
$i = 0;
while ($i++ < $num3) {
	if (($i % (int)$fizz == 0) && ($i % (int)$buzz == 0)) {
	print "FB ";
}elseif ($i % (int)$fizz == 0) {
	print "F ";
}elseif ($i % (int)$buzz == 0) {
	print "B ";
}else {
	print "$i ";
}
}
?>
