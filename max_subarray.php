<?php
//array  of integers. Function returns greatest sum of subarray
//subarray - рядом стоящие элементы массива
$array = [4, -7, 1, 5];
//echo maxSum($array)."\n";
echo cumulativeSum($array)."\n";

//time o(n^3)
function maxSum($array){
    $length = count($array);
    $maxSum = $array[0];
    for($i = 0; $i < $length ; $i++){
        for($j = $i; $j < $length; $j++) {
            $sum = 0;
            for ($k = $i; $k <= $j; $k++) {
                $sum += $array[$k];
            }
            $maxSum = max($sum, $maxSum);
        }
    }
    return $maxSum;
}

//time o(n^2)
function cumulativeSum($array){
    $length = count($array);
    $maxSum = $array[0];
    for($i = 0; $i < $length ; $i++){
        $cumulativeSum = 0;
        for($j = $i; $j < $length; $j++) {
            $cumulativeSum += $array[$j];
            $maxSum = max($cumulativeSum, $maxSum);
        }
    }
    return $maxSum;
}

