<?php
/*
$arr = [1, 2, 3, 2, 3, 1, 3];
1 -> 001
^
2 -> 010
^
	 011
3 -> 011
^
	 000
2 -> 010
^
	 010
3 -> 011
^
	 001
1 -> 001
^
	 000
3 -> 011
	 011
*/
$numbers = explode(' ', readline());

$result = $numbers[0];
for ($i=1; $i < count($numbers); $i++) { 
	$result = $result ^ $numbers[$i];
}

print_r($result);
