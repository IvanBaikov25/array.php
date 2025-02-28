<?php
$numbers = [9, 35, 4, 20, 34, 82, 54];
function findThirdMax($numbers) {
    $uniqueNumbers = array_unique($numbers);
    rsort($uniqueNumbers);
    if (count($uniqueNumbers) < 3) {
        return null; 
    }
    return $uniqueNumbers[2];
}
$thirdMax = findThirdMax($numbers);
if ($thirdMax !== null) {
    echo "Третье максимальное число: " . $thirdMax;
} else {
    echo "В массиве недостаточно уникальных чисел для нахождения третьего максимума.";
}
?>
