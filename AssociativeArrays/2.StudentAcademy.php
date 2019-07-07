<?php

$count = readline();
$students = [];
$gradeCount = [];
for ($i=0; $i < $count; $i++) {
	$studentName = readline();
	$currentGrade = floatval(readline());

	if (!isset($students[$studentName])) {
		$students[$studentName] = $currentGrade;
		$gradeCount[$studentName] = 1;
	} else {
		$students[$studentName] += $currentGrade;
		$gradeCount[$studentName]++;
	}
}

foreach ($students as $student => $sumGrade) {
	$sum = $students[$student];
	$gradesCount = $gradeCount[$student];
	$avg = $sum/$gradesCount;
	$students[$student] = $avg;
}
arsort($students);

array_filter($students, function($avg){
	if ($avg >= 4.5) {
		return printf("student -> %.2f" .PHP_EOL, $avg);
	}
});

// foreach ($students as $student => $avg) {
// 	if ($avg > 4.5) {
// 		// printf("student -> $avg");
// 		printf("student -> %.2f" .PHP_EOL, $avg);
// 	}
// }
