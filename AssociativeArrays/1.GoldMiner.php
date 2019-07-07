<?php

$input = readline();
$goldArr = [];
while (1) {
	if ($input==='stop') {
		break;
	}
	$value = readline();
	if (!isset($goldArr[$input])) {
		$goldArr[$input] = $value;
	} else {
		$goldArr[$input] += $value;
	}
	$input = readline();
}

print_r($goldArr);
