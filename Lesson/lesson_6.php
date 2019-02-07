<?php
print "Enter your number apartment:";
$handle = fopen('php://stdin','r');
$a = fgets($handle);


if ($a <= 4) {
	print "подъезд 1, этаж 1, кв. $a";
}elseif ($a <= 8) {
	print "подъезд 1, этаж 2, кв. $a";
}elseif ($a <= 12) {
	print "подъезд 1, этаж 3, кв. $a";
}elseif ($a <= 16) {
	print "подъезд 2, этаж 1, кв. $a";
}elseif ($a <= 20) {
	print "подъезд 2, этаж 2, кв. $a";
}elseif ($a <= 24) {
	print "подъезд 2, этаж 3, кв. $a";
}elseif ($a <= 28) {
	print "подъезд 3, этаж 1, кв. $a";
}elseif ($a <= 32) {
	print "подъезд 3, этаж 2, кв. $a";
}elseif ($a <= 36) {
	print "подъезд 3, этаж 3, кв. $a";
}


