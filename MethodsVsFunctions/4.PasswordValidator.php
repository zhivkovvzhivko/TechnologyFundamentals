<?php

function hasValidLength(string $text) : bool {
	$length = strlen($text);
	if ($length < 6 || $length> 10) {
		return false;
	}
	return true;
}

function hasValidContent(string $text) : bool {
	$length = strlen($text);
	if (ctype_alnum($text)) {
		return true;		
	}
	return false;
}

function hasEnoughDigits(string $text) {
	$digits = 0;
	$len = strlen($text);
	for ($i=0; $i < $len; $i++) { 
		$c = $text[$i];
		if (ctype_digit($c)) {
			$digits++;
		}
	}

	if ($digits < 2) {
		return false;
	}
	return true;
}

$password = readline();

$validLen = hasValidLength($password);
$validContent = hasValidContent($password);
$enoughDigits = hasEnoughDigits($password);

if (!$validLen) {
	echo "Password must be between 6 and 10 characters\n";
}
if (!$validContent) {
	echo "Password must consist only of letters and digits\n";
}
if (!$enoughDigits) {
	echo "Password must have at least 2 digits\n";
}
if ($validLen && $validContent && $enoughDigits) {
	echo "Password is valid\n";
}
