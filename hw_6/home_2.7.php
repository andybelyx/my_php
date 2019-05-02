<?php

function str($text) {
	for ($i=0;$i < count($text); $i++){
	$alf = range(a,z);
	if ($text[$i] == $alf) print $text[$i];
}
}
$text = 'iev433536jhj3h563456j'
str($text);