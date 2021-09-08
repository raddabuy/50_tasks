<?php

$n = 10;
for($i = 1; $i <= $n; $i++){
    echo fib($i). ' ';
}

echo "\n Факториал ". fact($n);

// 1 1 2 3 5 8 13
function fib($n){
    if($n <= 2){
        return 1;
    }
    else{
        return fib($n - 1) + fib($n - 2);
    }
}

function fact($n){
    if($n == 0)
        return 1;
    else
        return $n*fact($n-1);
}