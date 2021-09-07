<?php
//string made of alphabetic letters only
//function returns the longest substring without repeating letters
//$str = 'qwertwertydfghjuik';
$str = 'abcdecba';
//print_r(longestSubstring($str));
print_r(maxSubstring($str));

//o(n^3)
function longestSubstring($str){
    $maxLength = 0;
    for($i = 1; $i <= strlen($str); $i++){
        for($j = $i; $j <= strlen($str); $j++){
            $substr = substr($str,$i,$j);
            if(str_unique($substr) && strlen($substr)>$maxLength){
                $maxLength = strlen($substr);
            }
        }
    }
    return $maxLength;
}

function str_unique($str){
    $array = str_split($str);
    $visited = [];
    for($i = 0; $i < count($array); $i++){
        if(array_key_exists($array[$i], $visited)){
            return false;
        }
        $visited[$array[$i]] = true;
    }
    return true;
}

function maxSubstring($str){
    $maxLength = 0;
    $start = 0;
    $substr = $str[0];
    for($i = 1; $i < strlen($str);$i++){
        if(substr_count($substr, $str[$i]) >= 1){
            $start = strpos($substr, $str[$i]) + 1;
        }
        $substr = substr($str,$start, $i - $start + 1);
        $maxLength = strlen($substr)>$maxLength?strlen($substr):$maxLength;
    }
    return $maxLength;
}