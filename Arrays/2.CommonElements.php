<?php

/*
* read arrays and split by spaces
* compare each element of arr1 with each element of arr2 // i love to code
* if match add in arr3 // code i love to
* print arr3 // code i love to
*/

$arr1 = explode(' ', readline());
$arr2 = explode(' ', readline());
$arr3 = [];
$sizeArr1 = sizeof($arr1);
$sizeArr2 = sizeof($arr2);

for ($j=0; $j < $sizeArr2; $j++) { 
	for ($i=0; $i < $sizeArr1; $i++) { 
		if ($arr1[$i]===$arr2[$j]) {
			$arr3[] = $arr1[$i];
		}
	}
}

echo implode(' ', $arr3);
