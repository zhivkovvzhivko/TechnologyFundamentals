<?php

echo "Enter numer: ";
$n = readline();

$bitAtPosition1 = $n >> 1;
echo $bitAtPosition1 & 1;