<?php
function getIntersectionOfSortedArray($arr1, $arr2)
{
    $res = [];
    $m = 0;
    $n = 0;
    if (!$arr2 or !$arr1)
        return [];
    for ($i=0;$i<max(count($arr2), count($arr1));$i++){
        if ($arr1[$m]===$arr2[$n]){
            $res[]= $arr1[$m];
            $m+=1;
            $n+=1;
        }
        elseif ($arr1[$m]>$arr2[$n]){
            $n+=1;
        }
        else{
            $m+=1;
        }
    }
    return $res;
}
print_r(getIntersectionOfSortedArray([10, 11, 24,25], [10, 13, 14, 18, 24, 30, 32, 33, 34, 35]));
print_r(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4]));
print_r(getIntersectionOfSortedArray([], [2]));