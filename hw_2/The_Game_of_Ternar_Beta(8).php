<?php
$handle = fopen("php://stdin","r");

print "                              Play the GAME?          \nEnter a number from 1 to 10 and check your LUCK!!\nEnter your number:";
$input = fgets($handle);
print ($input == 8) ? "\n                         !!!Congratulation!!!!\n                             !!You WIN!!\n" : "\n                                 You Lose :(\n";
?>
