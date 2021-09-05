<?php
//find pair in array that sums up k (k =  11, i.e. 5 and 6)
//boolean function that checks if that pair exists

    $array = [8,5,7,4,6,2,1,9,2];
    $k = readline("Enter the sum \n");
//  echo pairSum($k, $array);
//   echo optimizedPairSum($k, $array);
   echo optimizedHash($k,$array);

   //O(n^2)
function pairSum($k, $array){
    $length = count($array);
    for($i = 0; $i < $length-1; $i++){
        for($j = $i + 1; $j <= $length-1; $j++){
            if($array[$i] + $array[$j] == $k)
                return "Exists \n";
        }
    }
    return "Doesn't exist\n";
}

//O(nlogn)
function optimizedPairSum($k, $array)
{
    $length = count($array);
    sort($array);
    $i = 0;
    $j = $length - 1;
    while ($i < $j) {
        $sum = $array[$i] + $array[$j];
        if ($sum == $k)
            return "Exists \n";
        elseif ($sum < $k) {
            $i++;
        } else {
            $j--;
        }
    }
    return "Doesn't exist\n";
}

//    o(1)
function optimizedHash($k, $array){
        $visited = [];
        foreach ($array as $element){
            if(array_key_exists($k - $element, $visited)){
                return "Exists \n";
            }
            else{
                $visited[$element] = true;
            }
        }
        return "Doesn't exist\n";
    }




