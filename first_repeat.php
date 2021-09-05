<?php
//function that returns first repeating character in string

$str = readline("Enter a string \n");
//echo repeatingCharacter($str);
echo hashOptimize($str);

function repeatingCharacter($str){
    $array = str_split($str,1);
    $arrayCount = array_count_values($array);
    foreach ($arrayCount as $element){
        if($element > 1){
            return array_search ($element, $arrayCount)."\n";
        }
    }
    return "Doesn't exist\n";
}

function hashOptimize($str){
    $array = str_split($str);
    $visited = [];
    foreach ($array as $element){
        if(array_key_exists($element,$visited)){
            return $element ."\n";
        }
        else{
            $visited[$element] = true;
        }
    }
    return "Doesn't exist\n";
}
