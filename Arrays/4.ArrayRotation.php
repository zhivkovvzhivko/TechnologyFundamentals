<?php

/*
input:
51 47 32 61 21
2
output: 32 61 21 51 47
*/

$arr = explode(' ', readline());
$rotations = intval(readline());
$size = sizeof($arr);
for ($i=0; $i < $rotations; $i++) {
	$first = $arr[0];
	for ($j=0; $j < $size-1; $j++) {
		$arr[$j] = $arr[$j+1];
	}
	$arr[$size-1] = $first;
}
print_r($arr);
