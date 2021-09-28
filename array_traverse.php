<?php

$array = [[[1,2,3],[4,5,6]],[[7,8,9],[10,11,12]],[[13,14,15],[16,17,18]]];

traverse($array);

function traverse($array){
    $result = [];
    foreach ($array as $key => $value){
        if (is_array($value)) {
            traverse($value);
        } else {
            echo $value."\n";
        }
    }
    return $result;
}
