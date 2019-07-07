<?php

/*
input:
2 1 1 2 3 3 2 2 2 1
1 1 1 2 3 1 3 3
output:
2 2 2
1 1 1
*/

$arr = explode(' ', readline());
$count = count($arr);
$bestLen = 1;
$bestSymbol = 0;
$length = 1;
for ($i=0; $i < $count; $i++) {
	for ($j= $i + 1; $j < $count; $j++) { 
		if ($arr[$i] === $arr[$j]) {
			$length++;
			if ($length > $bestLen) {
				$bestLen = $length;
				$bestSymbol = $arr[$i];
			}
		} else {
			$length = 0;
		}
	}
}

// echo "bestLen = $bestLen\n symbol = $bestSymbol";
echo str_repeat($bestSymbol .' ', $bestLen);
