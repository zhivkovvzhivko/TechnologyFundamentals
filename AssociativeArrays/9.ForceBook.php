<?php

$forceSides = [];

while (1) {
	$input = readline();

	if ($input === 'Lumpawaroo') {
		continue;
	}

	$tokens = explode(' | ', $input);
	if (count($tokens)===1) {
		$tokens = explode(' -> ', $input);
		$name = $tokens[0];
		$side = $tokens[1];
		if ($forceSides[$side]) {
			// if (!in_array($name, $forceSides)) {
			// 	$forceSides[$side][] = $name;
			// }
		} else {
			$forceSides[$side][] = $name;
		}
	} else {
		$name = $tokens[1];
		$side = $tokens[0];
		if ($forceSides[$side]) {
			// if (!in_array($name, $forceSides)) {
			// 	$forceSides[$side][] = $name;
			// }
		}
	}
	$forceSides[$side][] = $name;
}

print_r($forceSides);