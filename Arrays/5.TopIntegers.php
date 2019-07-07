<?php

/*
Find all the top integers in array. A top integer is an integer which is bigger than all the elements to its right.
input:
14 24 3 19 15 17 17
27 19 42 2 13 45 48
output:
24 19 17
48
*/

$arr = explode(' ', readline());
$topIntegers = [];
$count = count($arr);
for ($i=0; $i < $count; $i++) { 
	$isTop = true;
	for ($j=$i+1; $j < $count; $j++) { 
		if ($arr[$i] <= $arr[$j]) {
			$isTop = false;		
			break;
		}
	}
	if ($isTop) {
		$topIntegers[] = $arr[$i];
	}
}

echo implode(' ', $topIntegers);
