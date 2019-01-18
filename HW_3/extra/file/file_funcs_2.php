<?php
$file1 = fopen("file1.txt","r");
$f = fgets($file1);
$file2 = fopen("file2.txt","r");
$s = fgets($file2);

function appendContents($a) {
	$output = fopen("output.txt","a");
	fputs($output,$a);
}
appendContents($f);
appendContents($s);
?>