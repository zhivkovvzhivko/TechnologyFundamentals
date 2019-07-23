<?php

$arr = explode(' ', readline());
$count = count($arr);

function exchange(array $arr, int $index) : array {
	$tempArr = [];
	$count = count($arr);
	for ($i=$index + 1; $i < $count; $i++) { 
		$tempArr[] = $arr[$i];
	}
	for ($i=0; $i <= $index; $i++) { 
		$tempArr[] = $arr[$i];
	}
	return $tempArr;
}

function printMax(array $arr, string $type) : void {
	$result = 'No Matches';
	$count = count($arr);
	$maxNumb = PHP_INT_MIN;
	if ($type === 'even') {
		for ($i=0; $i < $count; $i++) { 
			$current = $arr[$i];
			if ($current % 2 === 0 && $current >= $maxNumb) {
				$maxNumb = $current;
				$result = $i;
			}
		}
	}
	if ($type === 'odd') {
		for ($i=0; $i < $count; $i++) { 
			$current = $arr[$i];
			if ($current % 2 === 1 && $current >= $maxNumb) {
				$maxNumb = $current;
				$result = $i;
			}
		}
	}
	echo $result . PHP_EOL;
}

function printMin(array $arr, string $type) : void {
	$result = 'No Matches';
	$count = count($arr);
	$minNumb = PHP_INT_MAX;
	if ($type === 'even') {
		for ($i=0; $i < $count; $i++) { 
			$current = $arr[$i];
			if ($current % 2 === 0 && $current <= $minNumb) {
				$minNumb = $current;
				$result = $i;
			}
		}
	}
	if ($type === 'odd') {
		for ($i=0; $i < $count; $i++) { 
			$current = $arr[$i];
			if ($current % 2 === 1 && $current <= $minNumb) {
				$minNumb = $current;
				$result = $i;
			}
		}
	}
	echo $result . PHP_EOL;
}

function printFirst(array $arr, int $number, string $type) : void {
	$tempArr = [];
	$count = count($arr);
	if ($type === 'even') {
		for ($i=0; $i < $count; $i++) { 
			$current = $arr[$i];
			if ($current % 2 === 0 && $number > 0) {
				$number--;
				$tempArr[] = $current;
			}	
		}
	} elseif ($type === 'odd') {
		for ($i=0; $i < $count; $i++) { 
			$current = $arr[$i];
			if ($current % 2 === 1 && $number > 0) {
				$number--;
				$tempArr[] = $current;
			}	
		}
	}

	if (count($tempArr) > 0) {
		echo '['. implode(', ', $tempArr) . "]\n";
	} else {
		echo "[]\n";
	}
}

function printLast(array $arr, int $num, string $type) : void {
	$tempArr = [];
	$count = count($arr);
	if ($type === 'even') {
		for ($i= $count- 1; $i >=0; $i--) { 
			$current = $arr[$i];
			if ($current % 2 === 0 && $num > 0) {
				$num--;
				$tempArr[] = $current;
			}	
		}
	} elseif ($type === 'odd') {
		for ($i= $count- 1; $i >=0; $i--) { 
			$current = $arr[$i];
			if ($current % 2 === 1 && $num > 0) {
				$num--;
				$tempArr[] = $current;
			}	
		}
	}

	if (count($tempArr) > 0) {
		echo '['. implode(', ', array_reverse($tempArr)) . "]\n";
	} else {
		echo "[]\n";
	}
}

while (true) {
	$input = readline();
	if ($input==='end') {
		break;
	}
	$tokens = explode(' ', $input);
	$command = $tokens[0];
	switch ($command) {
		case 'exchange':
			$index = $tokens[1];
			if ($index >=0 && $index < $count) {
				$arr = exchange($arr, $index);
			} else {
				echo 'Invalid Index';
			}
			break;
		case 'max':
			$type = $tokens[1];
			printMax($arr, $type);
			break;
		case 'min':
			$type = $tokens[1];
			printMin($arr, $type);
			break;
		case 'first':
			$num = (int) $tokens[1];
			if ($num >=0 && $num <= $count) {
				$type = $tokens[2];
				printFirst($arr, $num, $type);
			} else {
				echo "Invalid count\n";
			}
			break;
		case 'last':
			$num = (int) $tokens[1];
			if ($num >=0 && $num <= $count) {
				$type = $tokens[2];
				printLast($arr, $num, $type);
			} else {
				echo "Invalid count\n";
			}
			break;
	}
}

echo '['. implode(', ', $arr) . ']';