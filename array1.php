<?php
$grades = [5, 4, 3, 4, 5];
function calculateAverage($grades) {
    $sum = array_sum($grades);
    $count = count($grades);
    return $count > 0 ? $sum / $count : 0;
}
$average = calculateAverage($grades);
echo "Средняя оценка студентов: " . round($average, 2);
