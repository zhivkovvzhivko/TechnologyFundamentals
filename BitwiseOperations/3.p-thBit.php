<?php

echo "Enter numer: ";
$n = readline();
echo "Enter position: ";
$p = readline();

$bitAtPosition1 = $n >> $p;
echo $bitAtPosition1 & 1;