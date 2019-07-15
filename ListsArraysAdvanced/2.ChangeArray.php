<?php

$arr = array_map('intval', explode(' ', readline()));

while (true) {
	$input = readline();

	if ($input==='Odd' || $input==='Even') {
		if ($input==='Odd') {
			$target = 0;
		} else {
			$target = 1;
		}
		
		$count = count($arr);
		for ($i=0; $i < $count; $i++) { 
			if ($arr[$i] % 2 == $target) {
				echo "$arr[$i] ";
			}
		}
		break;
	}
	
	$args = explode(' ', $input);
	if ($args[0]==='Delete') {
		$element = $args[1];
		while (array_search($element, $arr) !== false) {
			$index = array_search($element, $arr);
			array_splice($arr, $index, 1);
		}
	}
	if ($args[0]==='Insert') {
		$element = $args[1];
		$index = $args[2];
		array_splice($arr, $index, 0, $element);
	}
}

// print_r($arr);
