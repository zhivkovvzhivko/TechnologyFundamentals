<?php

$input = readline();
$courses = [];

while (1) {

	if ($input==='end') {
		break;
	}

	$args = explode(' : ', $input);
	$courseName = $args[0];
	$studentName = $args[1];

	$courses[$courseName][] = $studentName;

	$input = readline();
}

uksort($courses, function($course1, $course2)use ($courses){
	$count1 = count($courses[$course1]);
	$count2 = count($courses[$course2]);
	return $count1 <=> $count2;
});

foreach ($courses as $course => $studentArr) {
	asort($studentArr);
	$count = count($studentArr);
	echo "$course: $count\n";
	foreach ($studentArr as $student) {
		echo "-- $student\n";
	}
}
