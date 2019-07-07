<?php
/*
input:
4
1 5
9 10
31 81
41 20
output:
1 10 31 20
5 9 81 41
*/
	
$count = intval(readline());
$arr1 = [];
$arr2 = [];

for ($i=0; $i < $count; $i++) { 
	$tokens = explode(' ', readline());
	$elements1 = $tokens[0];
	$elements2 = $tokens[1];

	if ($i%2==0) {
		$arr1[] = $elements1;
		$arr2[] = $elements2;
	} else {
		$arr1[] = $elements2;
		$arr2[] = $elements1;
	}
}
echo implode(' ', $arr1);
echo "\n";
echo implode(' ', $arr2);
