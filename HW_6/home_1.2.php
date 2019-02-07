<?php

$arr = [1,2,3,4,3,2];
$idx = 0;
function index($arr,$idx){

for ($i = $idx; $i < $arr[$i]; $i++) {
	if ($arr[$i+1] > $arr[$i]) {
	 	print $arr[$i];
	}else;
		}
}
index($arr,$idx);
