<?php
//in array of n+1 integers between 1 and n inclusive
//create function than returns duplicate element
//there is only one repeated element
//searched element can appear more than 2 times
//pigeonhole principle - принцип Дирихле
$array = [4, 1, 3, 2, 5];
echo hashMethod($array);


function hashMethod($array){
    $visited = [];
    foreach ($array as $element){
        if(array_key_exists($element, $visited))
            return $element;
        $visited[$element] = true;
    }
    return "Doesn't exist \n";
}


