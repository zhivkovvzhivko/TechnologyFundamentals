<?php

$one = readline();
$two = readline();
$three = readline();

printSmallest($one, $two, $three);


function printSmallest($numOne, $numTwo, $numThree) {
	$result = min($numOne, $numTwo, $numThree);
	echo $result. PHP_EOL;
}