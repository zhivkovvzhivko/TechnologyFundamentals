<?php

$productsQuantity = [];
$productsPrice = [];

while (1) {
	$input = readline();
	if ($input==='buy') {
		break;
	}

	$tokens = explode(' ', $input);
	$productName = $tokens[0];
	$productPrice = $tokens[1];
	$productQuantity = $tokens[2];

	$productsPrice[$productName] = $productPrice;
	if (!isset($productsQuantity[$productName])) {		
		$productsQuantity[$productName] = $productQuantity;
	} else {
		$productsQuantity[$productName] += $productQuantity;
	}
}

foreach ($productsPrice as $product => $price) {
	// Beer -> 220.00
	$sum = $price * $productsQuantity[$product];
	printf("$product -> %.2f".PHP_EOL, $sum);
}