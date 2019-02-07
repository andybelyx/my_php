<?php

$arr = [1,2,3,4,5,6,7,5,4,3,2];

function index($arr){

for ($i = 1; $i < count($arr); $i++) {

	if ($arr[$i-1] > $arr[$i]) {
		print $arr[$i-1];		
 	}elseif ($arr[$i+1] > $arr[$i]) {
		print $arr[$i+1];
	}elseif ($arr[$i+1] < $arr[$i] && $arr[$i-1] < $arr[$i]) {
		print $arr[$i];
}
		}

}

index($arr);
