<?php

/*
* read array size
* read N times value and insert into array
* add sum on every step
* print array
* print sum
*/
$size = intval(readline());
$arr = [];
$sum = 0;

for ($i=0; $i < $size; $i++) { 
	$arr[$i] = intval(readline());
	$sum+=$arr[$i];
}
echo implode(' ', $arr);
echo "\n$sum";
