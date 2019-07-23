<?php

$start = readline();
$end = readline();

printRange($start, $end);

function printRange($num1, $num2) {
	$start = ord($num1);
	$end = ord($num2);

	if ($start > $end) {
		$temp = $start;
		$start = $end;
		$end = $temp;
	}
	for ($i=$start + 1; $i < $end; $i++) { 
		echo chr($i) . " ";		
	}
}