<?php
//non-empty arr of integers
//function returns index of peak element
$array = [1, 3, 8, 8, 5, 9];//8 - peak, index - 2
//echo peakIndex($array);
//echo binarySearch($array);
echo findPeak($array);

//o(n)
function peakIndex($array){
    for($i = 0; $i < count($array); $i++){
        if(($i == 0 || $array[$i] >= $array[$i - 1])and
           ($i == count($array) - 1 || $array[$i] >= $array[$i + 1])){
                return $i;
            }
    }
    return "No peak";

}

//binary search
//o(logn)
function binarySearch($array){
    $left = 0;
    $right = count($array) - 1;
    while($left < $right){
        $mid = (int)(($left + $right)/2);
        if($array[$mid] < $array[$mid + 1])
            $left = $mid + 1;
        else
            $right = $mid;
    }

    return $left;
}

//recurse
//o(logn)
function findPeak($array){
    return findPeakRec($array, 0, count($array) - 1);
}

function findPeakRec($array, $left, $right){
    if($left >= $right)
        return $left;
    $mid = (int)(($left + $right)/2);
    if($array[$mid] < $array[$mid + 1])
        return findPeakRec($array, $mid + 1, $right);
    else
        return findPeakRec($array, $left, $mid);
}