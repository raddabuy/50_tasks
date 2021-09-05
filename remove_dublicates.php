<?php
//returns array of int without duplicates
$array = [1,2,3,4,1,2,5,6,7,4,6];

//print_r(removeDuplicatesSimple($array));
//print_r(removeDuplicatesBrute($array));
//print_r(sortArraySolution($array));
print_r(hashOptimized($array));

function removeDuplicatesSimple($array){
    return array_unique($array);
}

function removeDuplicatesBrute($array){
    $uniqueArray = [];
    foreach ($array as $element){
        if(!in_array($element, $uniqueArray)){
            $uniqueArray[] = $element;
        }
    }
    return $uniqueArray;
}

function sortArraySolution($array)
{
    sort($array);
    $el = $array[0];
    $uniqueArray = [$el];
    foreach ($array as $element) {
        if ($element != $el) {
            $uniqueArray[] = $element;
            $el = $element;
        }
    }
    return $uniqueArray;
}

    function hashOptimized($array){
        $visited = [];
        foreach ($array as $element){
            if(!array_key_exists($element,$visited)){
                $visited[$element] = true;
            }
        }
        return array_keys($visited);

    }


