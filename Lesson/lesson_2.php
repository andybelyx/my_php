<?php
print "Enter your number:";
$handle = fopen('php://stdin','r');
$number = fgets($handle);


function num($a){
if ($a < 0) {
	print "The number is negative!";
}else print "The number is positive!";
}

num($number);
