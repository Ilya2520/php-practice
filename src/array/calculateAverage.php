<?php

function calculateAverage ($arr)
{
    $sum = 0;
    $n = count($arr);
    if (!$n) return 0;
    foreach($arr as $item){
        $sum += $item;
    }
    return $sum/count($arr);
}
$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];
$temperatures=[];
print_r(calculateAverage($temperatures));