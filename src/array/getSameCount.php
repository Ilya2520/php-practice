<?php
function getSameCount($arr1, $arr2)
{
    $arr = array_merge($arr1,$arr2);
    $uniq_arr =array_unique($arr);
    $res = 0;
    foreach ($uniq_arr as $it){
        if (in_array($it, $arr1) and in_array($it, $arr2))
            $res+=1;
    }
    return $res;
}
print_r(getSameCount([], []) . "\n");
print_r(getSameCount([4, 4], [4, 4]) . "\n");
print_r(getSameCount([1, 10, 3], [10, 100, 35, 1]) . "\n");
print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2]) . "\n");