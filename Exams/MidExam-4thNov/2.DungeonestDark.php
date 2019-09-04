<?php
/*
input data:
rat 10|bat 20|potion 10|rat 10|chest 100|boss 70|chest 1000
cat 10|potion 30|orc 10|chest 10|snake 25|chest 110
*/

$rooms = explode('|', readline());
$count = count($rooms);
$health = 100;
$coins = 0;

for ($i=0; $i < $count; $i++) { 
	$args = explode(' ', $rooms[$i]);
	$command = $args[0];
	$number = $args[1];

	if ($command === 'potion') {
		if ($health+$number > 100) {
			$healed = 100 - $health;
			$health = 100;
			echo "You healed for $healed hp.\n";
		} else {
			$health += $number;
			echo "You healed for $number hp.\n";
		}
		echo "Current health $health hp.\n";
	} elseif ($command === 'chest') {
		$coins += $number;
		echo "You found $number coins.\n";
	} else {
		if (($health - $number) > 0) {
			$health -= $number;
			echo "You slayed $command.\n"; 	
		} else {
			$health -= $number;
			$room = $i + 1;
			echo "You died! Killed by $command.\n";
			echo "Best room: $room\n";
		}
	}
}

if ($health > 0) {
	echo "You've made it Coins: $coins Health: $health\n";
}