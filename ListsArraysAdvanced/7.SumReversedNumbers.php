<?php

$arr = explode(' ', readline());

$count = count($arr);
$sum = 0;
for ($i=0; $i < $count; $i++) { 
	$sum += strrev($arr[$i]);
}
echo $sum;