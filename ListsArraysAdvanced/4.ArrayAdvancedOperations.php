<?php

function is_valid_index($arr, $index): bool {
	if ($index >=0 && $index < count($arr)) {
		return true;
	}
	return false;
}

function shift(array $arr, string $position, int $number) {

	if ($position == 'left') {
		for ($i=0; $i < $number; $i++) {
			$temp = array_shift($arr);
			$arr[] = $temp;
		}
	} else{
		for ($i=0; $i < $number; $i++) { 
			$temp = array_pop($arr);
			array_unshift($arr, $temp);
		}
	}
	return $arr;
}

$arr = explode(' ', readline());

while (true) {
	$input = readline();
	if ($input === 'End') {
		break;
	}

	$args = explode(' ', $input);
	if ($args[0] === 'Add') {
		// array_push($arr, $args[1]);
		$arr[] = $args[1];
		// break;
	}
	if ($args[0] === 'Insert') {
		$index = intval($args[1]);
		$number = $args[2];

		if (is_valid_index($arr, $index)) {	
			array_splice($arr, $index, 0, $number);
		} else {
			echo "Invalid Index\n";
		}
		// break;
	}
	if ($args[0] === 'Remove') {
		$index = $args[1];
		if (is_valid_index($arr, $index)) {	
			// unset($arr[$index]);
			array_splice($arr, $index, 1);
		} else {
			echo "Invalid Index\n"	;
		}
		// break;
	}
	if ($args[0] === 'Shift') {
		$position = $args[1];
		$number = $args[2];
		$arr = shift($arr, $position, $number);
	}
}

print_r($arr);
