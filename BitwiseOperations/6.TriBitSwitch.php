<?php

echo "Enter numer: ";
$numer = readline();
echo "Enter position: ";
$position = readline();

$mask = 7;

$mask = $mask << $position;

echo $numer ^ $mask;