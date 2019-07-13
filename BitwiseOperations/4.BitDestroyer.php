<?php

echo "Enter numer: ";
$n = readline(); // 111 -> 01101111
echo "Enter position: ";
$p = readline(); // 6



$mask = 1 << $p; // 01000000
$mask = ~$mask; // 10111111

echo $n & $mask; // 01101111 & 10111111 -> 00101111 -> 47
