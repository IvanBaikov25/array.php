<?php

function findThirdMax($arr) {
    if (count($arr) < 3) {
        return null; 
    }
    $firstMax = $secondMax = $thirdMax = PHP_INT_MIN;

    foreach ($arr as $num) {
        if ($num > $firstMax) {
            $thirdMax = $secondMax;
            $secondMax = $firstMax;
            $firstMax = $num;
        } elseif ($num > $secondMax && $num < $firstMax) {
            $thirdMax = $secondMax;
            $secondMax = $num;
        } elseif ($num > $thirdMax && $num < $secondMax) {
            $thirdMax = $num;
        }
    }

    return $thirdMax;
}
$numbers = [3, 1, 4, 4, 5, 2, 5];
$thirdMax = findThirdMax($numbers);

if ($thirdMax !== null) {
    echo "Третье максимальное число: " . $thirdMax;
} else {
    echo "В массиве недостаточно уникальных элементов.";
}

?>
