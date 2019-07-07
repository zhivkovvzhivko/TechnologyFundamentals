<?php

$students = [];
$submissions = [];

while (1) {
$input = readline();
	if ($input==='exam finished') {
		break;
	}

	$args = explode('-', $input);
	$student = $args[0];
	$technology = $args[1];
	if ($technology==='banned') {
			unset($students[$student]);
			continue;
	} else {
		$points = $args[2];

		// print_r($args)
		if (!isset($submissions[$technology])) {
			$submissions[$technology] = 1;
		} else {
			$submissions[$technology] += 1;
		}
		if (!isset($students[$student])) {
			$students[$student] = $points;
			// $students['kiro'] = 84;
		} else {
			if ($students[$student] < $points) {
				$students[$student] = $points;
			}
		}
	}
}

uksort($students, function($student1, $student2)use ($students){
	$point1 = $students[$student1];
	$point2 = $students[$student2];
	if ($point1===$point2) {
		return $student1 <=> $student2;
	}
	return $point2 <=> $point1;
});

uksort($submissions, function($tech1, $tech2)use ($submissions){
	$count1 = $submissions[$tech1];
	$count2 = $submissions[$tech2];
	if ($count1===$count2) {
		return $tech1 <=> $tech2;
	}
	return $tech1 <=> $tech2;
});

echo "Results:\n";
foreach ($students as $student => $points) {
	echo "$student | $points\n";
}

echo "Submissions:\n";
foreach ($submissions as $tech => $count) {
	echo "$tech - $count\n";
}
